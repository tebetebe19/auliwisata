<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index($id)
    {
        $products = Http::get('https://local-auliwisata.tubaguskresnabayu.site/api/v1/products');
        $products = json_decode($products, true);

        // dd($products);

        return view('visitor-page.home', compact('products'));
    }

    public function product()
    {
        $products = Http::get('https://local-auliwisata.tubaguskresnabayu.site/api/v1/products');
        $products = json_decode($products, true);

        // dd($products);

        return view('visitor-page.product');
    }
}
