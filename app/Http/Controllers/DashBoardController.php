<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth.cust');
    }

    public function index() {
      return view('pages.dashboard')->with("id", Auth::user()->name);
    }
}
