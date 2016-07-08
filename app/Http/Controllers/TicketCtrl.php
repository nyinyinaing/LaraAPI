<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ticket;
class TicketCtrl extends Controller
{
    public function index()
    {
    	$tickets = Ticket::all();
    	return response()->json(['data'=>$tickets], 200);
    }

    public function show($id)
    {
    	$tickets = Ticket::find($id);
    	if(!$tickets)
    	{
    		return response()->json(['message'=>'This ticket does not exist!', 'code'=> 404], 404);
    	}

    	return response()->json(['data'=>$tickets], 200);
    }
}
