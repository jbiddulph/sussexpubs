<?php

namespace App\Http\Controllers;

use JWTAuth;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller

{
    public $loginAfterSignup = true;

    public function login(Request $request) {
        $credentials = $request->only("email", "password");
        $token = null;

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                "status" => false,
                "message" => "Unauthorised"
            ]);
        }
        return response()->json([
            "status" => true,
            "token" => $token
        ]);
    }
    

    public function register(Request $request) {
        $this->validate($request, [
            "name" => "required|string",
            "email" => "required|email|unique:users",
            "password" => "required|string|min:6|max:10"
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if($this->loginAfterSignup) {
            return $this->login($request);
        }

        return response()->json([
            "status" => true,
            "user" => $user
        ]);
    }

    public function logout(Request $request) {
        $this->validate($request, [
            "token" => "required"
        ]);

        try {
            JWTAuth::invalidate($request->token);
            return response()->json([
                "status" => true,
                "message" => "User Logged out Successfully"
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                "status" => false,
                "message" => "The user cannot be logged out"
            ]);
        }
    }
}
