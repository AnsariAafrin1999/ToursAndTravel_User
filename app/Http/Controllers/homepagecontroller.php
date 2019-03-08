<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;

class homepagecontroller extends Controller
{
    {
  public function Viewdesigner(Request $request)
  {
  	$design=package::orderBy('created_at''DESC')->limit(12)->get();
  	return view('home')->with('design',$design);
  }
}
