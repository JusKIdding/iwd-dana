<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index() {
      return view('pages.login');
    }

    public function register(Request $request){

      $name = $request->name;
      $email = $request->email;
      $password = $request->password;

      $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'password' => 'required|confirmed'
      ]);

     $hashed = Hash::make($password);

      $user = User::create([
        'name' => $name,
        'email' => $email,
        'password' => $hashed
      ]);

      auth()->login($user);

      return redirect()->to('dashboard');
    }

    public function login(Request $request) {
      $this->validate($request, [
         'email' => 'required|email',
         'password' => 'required|'
      ]);

      $userdata = array(
        'email'    => $request->email,
        'password'  => $request->password
      );

      if (Auth::attempt($userdata)) {
        return redirect()->to('dashboard');
      } else {
        return redirect()->to('login');
      }
    }
}
