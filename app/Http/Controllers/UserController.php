<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(User::class);
    }

    public function index(Request $request)
    {
        if(!empty($request->type))
        {
            return view('users.index', ['users' => User::{$request->type}()->get()]);
        }
        return view('users.index', ['users' => User::all()]);
    }

    public function show(User $user)
    {
        $states = State::all();
        return view('users.show', compact(['user','states']));
    }
}
