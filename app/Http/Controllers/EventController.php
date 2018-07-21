<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index() {
      $event = Event::all();

      return view('pages.event')->with("event", $event);
    }
}
