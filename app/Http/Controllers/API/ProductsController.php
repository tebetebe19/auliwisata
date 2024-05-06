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

        $responseProducts = Http::withHeaders([
                    'Authorization' => 'Bearer '.$apiKey,
                ])->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableIDproducts.'');
        $products = json_decode($responseProducts, true)['records'];
        // dd($products);
        foreach ($products as $prd) {
            $transprd = [
                'id' => $prd['id'],
                'slug' => $prd['fields']['slug'],
                'thumbnail' => $prd['fields']['thumbnail'][0]['thumbnails']['full']['url'],
                'name' => $prd['fields']['name'],
                'price_normal' => $prd['fields']['price_normal'],
                'price_discount' => $prd['fields']['price_discount'],
                'discount_percent' => $prd['fields']['discount_percent'],
                'duration' => count($prd['fields']['itineraries']),
                'airlines_icon' => $prd['fields']['airlinesIcon'][0]['url'],
                'airlines_name' => $prd['fields']['airlinesName'][0],
                'extra_data' => ['itins_id' => $prd['fields']['itineraries']],
            ];
            $simpleprd[] = $transprd;
        }
        $products = $simpleprd;

        return response($products);
    }
}
