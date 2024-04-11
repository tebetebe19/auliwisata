<?php

namespace App\Http\Controllers\Visitor;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotionController extends Controller
{
    protected $notion;

    public function __construct(Client $notion)
    {
        $this->notion = $notion;
    }

    public function fetchData()
    {
        $response = $this->notion->get('databases/f2a69c6acc2b4596ac605f854dc4797f/query');
        $data = json_decode($response->getBody(), true);

        // Process the retrieved data as needed
        // dd($data);
        return response()->json($data);
    }
}
