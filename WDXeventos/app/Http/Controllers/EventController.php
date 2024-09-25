<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){

            $events = Event::where(['title', 'like', '%' .$search . '%'])->get();

        }else{

            $events = Event::all();
        }
        return view('Welcome', ['events' => $events, 'search' => $search]);
    }

    public function criar(){
        return view('events.criar');
    }
}
