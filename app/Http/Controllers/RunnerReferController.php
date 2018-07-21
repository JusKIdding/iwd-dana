<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class RunnerReferController extends Controller
{
    public function index(){
        $item = Item::all();

        return view("pages.runnerfreer")->with("item", $item);
    }


}
