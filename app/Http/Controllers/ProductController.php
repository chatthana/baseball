<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ProductController extends Controller
{

    public function __construct() {
      // $this->middleware('auth:api');
    }

    public function index() {
      $products = \App\Product::where('highlight', 1)->get();
      return $products;
    }

    public function show($id) {
      $product = \App\Product::findOrFail($id);
      return view('product.show', ['product' => $product]);
    }
}
