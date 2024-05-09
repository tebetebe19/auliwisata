<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $products = Http::get('https://local-auliwisata.tubaguskresnabayu.site/api/v1/products');
        $products = json_decode($products, true);

        // return response($products);

        return view('visitor-page.home', compact('products'));
    }

    public function product($slug = null)
    {
        $product = Http::get('https://local-auliwisata.tubaguskresnabayu.site/api/v1/product/'.$slug);
        $product = json_decode($product, true);

        // return response($product);

        return view('visitor-page.product', compact('product'));
    }
}
