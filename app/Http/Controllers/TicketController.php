<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(request $Request){
    $ticket = new Ticket;
    $ticket->title = $request->title;
    $ticket->message = $request->message;
    $ticket->category_id = $request->category;
    $ticket->user_id = Auth()->user()->id;
    $ticket->status = "Open";
    $ticket->ticket_id = strtoupper(str-random(10));
    $ticket->save();
}

public function show($ticket_id){
    $ticket = Ticket::where('ticket_id','=' , $ticket_id)->firstOtFail();
    $category = Category::all();
    return view('show',compact('ticket','category'));
}


public function index(){
    $ticket = Ticket::all();
    $category = Category::all();
    return view('my',compact('ticket','category'));
}

}