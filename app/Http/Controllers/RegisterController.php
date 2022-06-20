<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:255|alpha',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:5|max:30'

        ]);

        $validated['role'] = 'admin';
        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect('/login')->with('registerSuccess', 'Register success. Lets try to login here');
    }
}
