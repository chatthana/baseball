<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model imports
use App\Product;

class SiteController extends Controller
{
    public function index() {
        $product = Product::where('highlight', 1)->get();
        return view('site.index', ["product" => $product->toJson()]);
    }

    public function showcase() {
        return view('site.showcase');
        // echo "<script>".json_encode(Product::findOrFail(1))."</script>";
        // echo json_encode(Product::findOrFail(1));
    }
}
