<?php

namespace App\Http\Controllers;

use App\Models\User;
use Closure;
use Dotenv\Exception\ValidationException;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
// public function showLoginForm(){
//     return view("auth.login");
// }


    // public function register(Request $request)
    // {
    //     $fields = $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|string|unique:users,email',
    //         'password' => 'required|string'
    //     ]);
    //     $user = User::create([
    //         'name' => $fields['name'],
    //         'email' => $fields['email'],
    //         'password' => bcrypt($fields['password'])
    //     ]);
    //     $token = $user->createToken('myapptoken')->plainTextToken;

    //     $response = [
    //         'user' => $user,
    //         'token' => $token,

    //     ];
    //     return response($response, 201);
    // }
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $user = User::where('email', $fields['email'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                "message"=>"Invalid credantials"
            ],401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,

        ];
        session()->put(["response"=>$response]);
        return response($response,201);
    }
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return [
            'message' => 'Logged out'
        ];
    }
}
