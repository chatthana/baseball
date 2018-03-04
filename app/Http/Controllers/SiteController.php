<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model imports
use App\Product;

class SiteController extends Controller
{
    public function index() {
        $product = Product::where('highlight', 1)->get()[0];
        return view('site.index', ["product" => $product]);
    }

    public function showcase() {
        return view('site.showcase');
    }
}
