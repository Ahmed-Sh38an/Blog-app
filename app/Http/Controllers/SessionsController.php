<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Email does not exist',
                'password' => 'Password is incorrect'
            ]);
        }
        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back!');   
             

    }

    public function destroy()
    {
        auth()->logout();

        return back()->with('success', 'Goodbye!');
    }
}
