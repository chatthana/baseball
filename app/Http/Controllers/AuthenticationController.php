<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use JWTAuth;

class AuthenticationController extends Controller
{
    public function authenticate(Request $request) {
      $credentials = $request->only(['email', 'password']);

      if (!$token = JWTAuth::attempt($credentials)) {
        return response()->json([
          "status" => "403",
          "message" => "Invalid login information",
        ], 401);
      }

      return response()->json([
        "status" => "000",
        "message" => "Login Successfully",
        "token" => $token,
      ], 200);
    }

}
