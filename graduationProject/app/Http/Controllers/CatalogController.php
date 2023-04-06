<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        // foreach ($products as $product) {
        //     echo 'Title: '.$product->title;
        //     echo "<br>";
        //     echo 'Price: '.$product->price;
        //     echo "<br>";
        //     echo "____________";
        //     echo "<br>";    
        // }
        $products = Product::orderBy('created_at')->take(8)->paginate(9);


        return view('catalog.catalog', [
            'products' => $products
        ]);
    }
}
