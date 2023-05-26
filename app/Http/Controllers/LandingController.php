<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // mengambil 8 data produk secara acak
        $products = Product::inRandomOrder(8)->get();

        return view('landing', compact('products'));
    }
}
