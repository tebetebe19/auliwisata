<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index($slug = null)
    {
        $apiKey = env('AIRTABLE_KEY');
        $baseId = env('AIRTABLE_BASE_ID');
        $tableIDproducts = env('AIRTABLE_TABLE_ID_PRODUCTS');
        $tableIDitineraries = env('AIRTABLE_TABLE_ID_ITINERARIES');

        // Fetch and Transform Product Start
        $responseProducts = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableIDproducts.'?filterByFormula=SEARCH(%22'.$slug.'%22%2C+%7Bslug%7D)');
        $products = json_decode($responseProducts, true)['records'];

        // return response($products);
        if ($products == null) {
            return [
                'code' => '204',
                'error' => 'Package Not Found',
            ];
        }
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
                'itinerary' => $prd['fields']['itineraries'],
            ];
            $simpleprd[] = $transprd;
        }
        $products = $simpleprd;

        // return response($products);
        // Fetch and Transform Product End

        // Fetch and Transform Itineraries Start
        $respItins = Http::withHeaders([
            'Authorization' => 'Bearer '.$apiKey,
        ])->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableIDitineraries.'');
        $itins = json_decode($respItins, true)['records'];

        // return response($itins);
        foreach ($itins as $itin) {
            // Restructure Flight Schedule Start
            $flight = [
                'airlinesCode' => isset($itin['fields']['airlinesCode']) ? $itin['fields']['airlinesCode'] : [],
                'airlinesName' => isset($itin['fields']['airlinesName']) ? $itin['fields']['airlinesName'] : [],
                'airportDepartureCode' => isset($itin['fields']['airportDepartureCode']) ? $itin['fields']['airportDepartureCode'] : [],
                'airportDepartureCity' => isset($itin['fields']['airportDepartureCity']) ? $itin['fields']['airportDepartureCity'] : [],
                'airportArrivalCode' => isset($itin['fields']['airportArrivalCode']) ? $itin['fields']['airportArrivalCode'] : [],
                'airportArrivalCity' => isset($itin['fields']['airportArrivalCity']) ? $itin['fields']['airportArrivalCity'] : [],
            ];
            $flights = [];

            $flightCount = count($flight['airlinesCode']); // Counting Jumlah Flight by Code
            if ($flightCount != null) {
                for ($i = 0; $i < $flightCount; ++$i) {
                    $flight = [
                        'airlinesCode' => $flight['airlinesCode'][$i],
                        'airlinesName' => $flight['airlinesName'][$i],
                        'airportDepartureCode' => $flight['airportDepartureCode'][$i],
                        'airportDepartureCity' => $flight['airportDepartureCity'][$i],
                        'airportArrivalCode' => $flight['airportArrivalCode'][$i],
                        'airportArrivalCity' => $flight['airportArrivalCity'][$i],
                    ];

                    $flights[] = $flight;
                }
            }
            // Restructure Flight Schedule End

            $transitin = [
                'id' => $itin['id'],
                'title' => $itin['fields']['title'],
                'description' => $itin['fields']['description'],
                'flight' => $flights,
                'meal' => isset($itin['fields']['meal']) ? $itin['fields']['meal'] : [],
            ];
            $simpleitins[] = $transitin;
        }
        $itins = $simpleitins;
        // Fetch and Transform Itineraries End

        $products = array_map(function ($products) use ($itins) {
            $itinsMapped = [];
            foreach ($products['itinerary'] as $prdItins) {
                $record = collect($itins)->firstWhere('id', $prdItins);
                if ($record) {
                    $itinsMapped[] = $record;
                }
            }

            return [
                'id' => $products['id'],
                'slug' => $products['slug'],
                'thumbnail' => $products['thumbnail'],
                'name' => $products['name'],
                'price_normal' => $products['price_normal'],
                'price_discount' => $products['price_discount'],
                'discount_percent' => $products['discount_percent'],
                'duration' => $products['duration'],
                'airlines_icon' => $products['airlines_icon'],
                'airlines_name' => $products['airlines_name'],
                'itinerary' => $itinsMapped,
            ];
        }, $products);

        return response($products);
    }
}
