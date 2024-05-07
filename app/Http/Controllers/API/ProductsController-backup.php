<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller
{
    public function index($slug = null)
    {
        $apiKey = env('AIRTABLE_KEY');
        $baseId = env('AIRTABLE_BASE_ID');
        $tableIDproducts = env('AIRTABLE_TABLE_ID_PRODUCTS');
        $tableIDitineraries = env('AIRTABLE_TABLE_ID_ITINERARIES');

        // switch ($slug) {
        //     case $slug:
        //         $responseProducts = Http::withHeaders([
        //             'Authorization' => 'Bearer '.$apiKey,
        //         ])->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableIDproducts.'/'.$slug);
        //         $products = json_decode($responseProducts, true);
        //         break;
        //     case null:
        //         $responseProducts = Http::withHeaders([
        //             'Authorization' => 'Bearer '.$apiKey,
        //         ])->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableIDproducts.'');
        //         $products = json_decode($responseProducts, true)['records'];
        //         break;
        // }

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

        $yakali = array_map(function ($products) use ($itins) {
            // Counting duration
            $duration = count($products['fields']['itineraries']);

            // Mapping itinerary
            $itineraryIds = $products['fields']['itineraries'];
            $itinsMapped = [];
            foreach ($itineraryIds as $itineraryId) {
                $record = collect($itins)->firstWhere('id', $itineraryId);
                if ($record) {
                    $itinsMapped[] = $record;
                }
            }

            $priceNormal = number_format($products['fields']['price_normal'], 0, ',', '.');
            $priceDiscount = isset($products['fields']['price_discount']) ? number_format($products['fields']['price_discount'], 0, ',', '.') : null;
            // $testdulukale = $itins['meal'];

            return [
                'id' => $products['id'],
                'slug' => $products['fields']['slug'],
                'name' => $products['fields']['name'],
                'thumbnail' => $products['fields']['thumbnail'][0]['url'],
                'price_normal' => $priceNormal,
                'price_discount' => $priceDiscount,
                'duration' => $duration,
                'itineraries' => $itinsMapped,
            ];

            $productId = $products['id'];
        }, $yakali);

        return response($products);
    }
}
