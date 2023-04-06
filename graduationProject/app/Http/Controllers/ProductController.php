<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProduct($product_id) {
        $item = Product::where('id', $product_id)->first();

        return view('product.product', [
            'item' => $item
        ]);
    }
}
