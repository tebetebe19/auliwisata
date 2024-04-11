<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
               $apiKey = env('AIRTABLE_KEY');
        $baseId = env('AIRTABLE_BASE_ID');
        $tableIDproducts = env('AIRTABLE_TABLE_ID_PRODUCTS');
        $tableIDitineraries = env('AIRTABLE_TABLE_ID_ITINERARIES');

        // Fetch table product
        $responseProducts = Http::withHeaders([
            'Authorization' => 'Bearer '.$apiKey,
        ])->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableIDproducts.'');
        $products = json_decode($responseProducts, true)['records'];

        // Fetch table and transform itineraries
        $respItins = Http::withHeaders([
            'Authorization' => 'Bearer '.$apiKey,
        ])->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableIDitineraries.'');
        $itins = json_decode($respItins, true)['records'];
        foreach ($itins as $itin) {
            $transitin = [
                'id' => $itin['id'],
                'title' => $itin['fields']['title'],
                'meal' => $itin['fields']['meal'],
                'description' => $itin['fields']['description'],
                'airlines' => isset($itin['fields']['airlinesName']) ? $itin['fields']['airlinesName'] : null,
            ];

            $itinsSimple[] = $transitin;
        }
        $itins = $itinsSimple;

        $products = array_map(function ($products) use ($itins) {
            // Counting duration
            $duration = count($products['fields']['itineraries']);

            // Mapping itinerary
            $itineraryIds = $products['fields']['itineraries'];
            $itinerariesMapped = [];
            foreach ($itineraryIds as $itineraryId) {
                $record = collect($itins)->firstWhere('id', $itineraryId);
                if ($record) {
                    $itinerariesMapped[] = $record;
                }
            }

            // dd($itinerariesMapped);

            // Convert price to thousand
            $priceNormal = number_format($products['fields']['price_normal'], 0, ',', '.'); // Tambah response harga pakai separator ribuan
            $priceDiscount = number_format($products['fields']['price_discount'], 0, ',', '.');

            return [
                'name' => $products['fields']['name'],
                'thumbnail' => $products['fields']['thumbnail'][0]['url'],
                'price_normal' => $priceNormal,
                'price_discount' => $priceDiscount,
                'duration' => $duration,
                'itineraries' => $itinerariesMapped,
            ];
        }, $products);

        // dd($products);

        return view('visitor-page.home', compact('products'));
    }
}
