<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function home()
    {
        $products = Product::all();
        
        $products = Product::orderBy('created_at')->take(4)->get();


        return view('home.index', [
            'products' => $products
        ]);
    }
}
