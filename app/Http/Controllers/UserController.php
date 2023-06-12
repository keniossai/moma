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
        if($request->has('type'))
            return view('users.index', ['users' => User::{$request->type}()->get()]);

        return view('users.index', ['users' => User::all()]);
    }

    public function show(User $user)
    {
        $states = State::all();
        $user->load(['comments' => fn($query) => $query->whereBelongsTo($user)])
            ->loadCount(['sessions',
            'sessions as completed_sessions' => fn($query) => $query->forTherapist($user)->completed(),
            'sessions as declined_sessions' => fn($query) => $query->forTherapist($user)->declined(),
        ]);

        return view('users.show', compact(['user','states']));
    }
}
