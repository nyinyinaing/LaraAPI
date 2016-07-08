<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
class UserTicketCtrl extends Controller
{
    public function index($id)
    {
    	$tickets = User::find($id)->ticket;
    	return response()->json(['data'=>$tickets], 200);
    }
}
