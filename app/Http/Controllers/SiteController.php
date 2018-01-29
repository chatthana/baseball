<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model imports
use App\Product;

class SiteController extends Controller
{
    public function index() {
        $product = Product::create([
            "name" => "Test Name 3",
            "description" => "Test Test Test",
            "sku" => "KLS123",
            "price" => 100,
            "cover_image_path" => "https://www.google.co.th"
        ]);

        return view('site.index');
    }
}
