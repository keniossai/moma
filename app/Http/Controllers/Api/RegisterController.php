<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email'      => 'email|unique:users',
            'first_name' => 'required',
            'last_name'  => 'required',
            'location'  => 'required',
            'phone'  => 'required',
            'password'   => 'required|confirmed|min:5',
        ]);

        Auth::login($user = User::create($request->all()));

        if (! $request->hasSession()) {
            $user->load('form')->append('token');
        }

        return Response::api([
            'message' => 'Registered successfully.',
            'data'    => compact('user')
        ]);
    }
}
