<?php


namespace App\Http\Controllers;

use App\Models\user;
use App\Models\Login;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
      return view('login');
    }
    public function register(){
      return view('register');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt((['email' => $request->email, 'password' => $request->password]))) {
          return redirect('/admin');
        }
        return redirect('/login');
    }
    public function logout(Request $request){
      Auth::logout();
      return redirect('/login');
    }
}