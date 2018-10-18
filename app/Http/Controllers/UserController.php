<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function authenticate(Request $request) {
        $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        if($user != null && Hash::check($password, $user->password))
            return response()->json(['status' => 'success','token' => $user->api_token]);

        return response()->json(['status' => 'fail'], 401);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:255',
        ]);
        $usuario = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'api_token' => base64_encode(str_random(40))
        ]);

        return response()->json(['status' => 'success']);
    }


}
