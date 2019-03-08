<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;
class homecontroller extends Controller
{
    //
    public function viewpackage(Request $request)
    {
    	$design=package::orderBy('created_at','DESC')->get();
    	return view('home')->with('design',$design);
    }
}
