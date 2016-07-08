<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
class UserCtrl extends Controller
{
    public function index()
    {
    	$users = User::all();
    	return response()->json(['data'=>$users], 200);
    }

    public function show($id)
    {
    	$users = User::find($id);
    	if(!$users)
    	{
    		return response()->json(['message'=>'This user does not exist!', 'code'=> 404], 404);
    	}
    	return response()->json(['data'=>$users], 200);
    }
}
