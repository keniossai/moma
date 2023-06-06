<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email'      => 'email|unique:users',
            'first_name' => 'required',
            'last_name'  => 'required',
            'location'  => 'required',
            'phone'  => 'required',
            'type' => ['required', Rule::in(User::CLIENT, User::MASSEUR)],
            'password'   => 'required|confirmed|min:5',
        ]);

        Auth::login($user = User::create($validated), $request->get('remember'));

        $user->append('token');

        return Response::api([
            'message' => 'Registered successfully.',
            'data'    => compact('user')
        ]);
    }
}
