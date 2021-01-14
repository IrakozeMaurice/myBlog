<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store()
    {
        $attributes = $this->validateUser();
        $attributes['password'] = Hash::make($attributes['password']);
        $attributes['is_admin'] = request('is_admin');
        User::create($attributes);
        return redirect('/users')->with('message', 'created');
    }

    public function show(User $user)
    {
        return view('backend.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('backend.users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = $this->validateUser();
        $attributes['password'] = Hash::make($attributes['password']);
        $attributes['is_admin'] = request('is_admin');
        $user->update($attributes);
        return redirect('/users')->with('message', 'updated');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with('message', 'deleted');
    }

    protected function validateUser()
    {
        return request()->validate(
            [
                'name' => ['required', 'min:3'],
                'email' => ['required'],
                'password' => ['required', 'string', 'min:8']
            ]
        );
    }
}
