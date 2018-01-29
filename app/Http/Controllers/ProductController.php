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
      return \App\Product::where('highlight', 1)->get();
    }

    public function highlight() {
      // return \App\Product::where('highlight', true)->where('active', true)->take(3);
    }

    public function slider() {
      // return \App\Product::find();
    }

    public function show($id) {
      return \App\Product::findOrFail($id);
    }
}
