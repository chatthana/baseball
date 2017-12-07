<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ProductController extends Controller
{

    public function __construct() {
      $this->middleware('auth:api');
    }

    public function index() {
      return \App\Product::all();
    }
}
