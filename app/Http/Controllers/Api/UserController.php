<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(User::class);
        $this->middleware('throttle:update-user')->only('update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'email'      => 'email|unique:users',
            'phone'      => 'unique:users'
        ]);

        User::create($request->all());

        return Response::api('Registration successful');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUserRequest  $request
     * @param  User  $user
     * @return Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $request->user->update($request->all());
        return Response::api(['message' => 'Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return Response::api('Deleted successfully');
    }
}
