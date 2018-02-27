<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller {
  public function index(Request $request) {

    // echo error_reporting(0);
    // error_reporting(22519);
    // echo error_reporting();
    // var_dump(ini_get('error_reporting'));
    // var_dump(ini_get_all()['error_reporting']);
    // echo php_ini_loaded_file();
    // die();
    // error_reporting(0);
    // Retrieve Query Parameters
    $params = $request->input();
	
	echo error_reporting();

    // var_dump(!$params['order']);
    // Get the list of products
    // if ($params['order'] !== null) {
    // $orderingFilter = isset($params['order']) ? $params['order'] : 'id';
    // echo $orderingFilter;

    // echo $orderingFilter;
    // die();

    // $products = Product::orderBy($orderingFilter, 'desc')->get();
    // return $products;
  }
}

?>
