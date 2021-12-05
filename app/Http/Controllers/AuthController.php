<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Hash;


class AuthController extends Controller
{
    public function index()
    {
		return view('welcome');
    }
	
    public function signup()
    {
        return view('auth.signup');
    }

    public function customSignup(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        $data = $request->all();
        $check = $this->createUser($data);
        return redirect("login");
    }
	
    public function createUser(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    

    public function dashboardView()
    {
        if(Auth::check()){
            return view('auth.dashboard');
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }

    public function signin()
    {
        return view('auth.signin');
    }
	
    public function createSignin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/blog/index');
        }
        return redirect("login")->withSuccess('Credentials are wrong.');
    }
	
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}