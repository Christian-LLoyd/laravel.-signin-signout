<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    public function create(){
        return view('user.login');
    }
    //login
    public function process(Request $request){
        $validated = $request->validate([
            "email" => ['required','email'],
            'password' => 'required'

        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/log_out') -> with('message' , 'Logged-in succesfully!');
        }

        return back()->withErrors(['email' => 'Login failed'])->onlyInput('email');
    }

    public function register(){
        return view('user.register');
    }

    public function store(Request $request){
        
        $validated = $request->validate([
            "name" => ['required' , 'min:4'],
            "email" => ['required','email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6'

        ]);

        $validated['password'] = bcrypt( $validated['password']);

        $user = User::create($validated);

        auth()->login($user);

        return redirect('/log_out') -> with('message' , 'account_made_succesfully!');
    }

    public function log_out(Request $request){
        return view('user.log_out');
    }
    
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','Logout Sucessful!');
    }
}