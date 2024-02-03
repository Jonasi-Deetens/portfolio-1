<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        if(auth()->check())
            return redirect()->route('home');
        else
            return view('authentication.login');
    }

    public function login(LoginRequest $request)
    {
        $username = $request->loginUsername;
        $password = $request->loginPassword;
        
        if (auth()->attempt(['name' => $username, 'password' => $password])) {
            return redirect()->route('home');
        } else {
            return back()->withErrors(['loginPassword' => 'Invalid username or password.'])->withInput();
        }
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->registerUsername,
            'email' => $request->registerEmail,
            'password' => $request->registerPassword,
        ]);

        auth()->login($user);

        return redirect()->route('home');
    }

    public function logout()
    {
        if(auth()->check()) auth()->logout();

        return redirect()->route('login');
    }
}
