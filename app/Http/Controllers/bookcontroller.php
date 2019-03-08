<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;
class bookcontroller extends Controller
{
    //
    public function book_add(Request $request)
    {
    	$pt=booking::create([
            "pack_id"=>"1"
            "book_date"=>$request->book_date,
            "user_id"=>"2",
            "description"=>$request->description,
    	
    	]);
    	return redirect('/booking_show');
   		//dd($post);
    }
    public function booking_show(Request $request)
    {
        $posts = booking::all();
        //dd($posts);
        return view('booking_show')->with('postdata',$posts); 
    }

}
