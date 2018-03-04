<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller {
  public function index(Request $request) {
    $params = $request->input();
    $default_sorting_option = [
      "key" => "id",
      "type" => $params["order"] === "recent" ? "desc" : "asc" 
    ];
    $products = Product::orderBy($default_sorting_option["key"], $default_sorting_option["type"]);
    return $products->get();
  }

  public function show($id) {
    return "hello";
  }
}

?>
