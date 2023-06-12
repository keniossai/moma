<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
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
        $user->loadCount(['sessions',
            'sessions as completed_sessions' => fn(Builder $query) => $query->forTherapist($user)->completed(),
            'sessions as declined_sessions' => fn(Builder $query) => $query->forTherapist($user)->declined(),
        ]);
        return view('users.show', compact(['user','states']));
    }
}
