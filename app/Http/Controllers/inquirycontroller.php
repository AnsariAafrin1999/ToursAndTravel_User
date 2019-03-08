<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
class inquirycontroller extends Controller
{
    //
    public function inquiry_add(Request $request)
    {
    	$post=inquiry::create([
    	  "name"=>$request->name,
    	  "email_id"=>$request->email,
    	  "comment"=>$request->comment,
          "pack_id"=>$request->pack_id,
          ]);
    	return redirect('/inquiry_show');
    	//dd($post);
    }
    public function inquiry_show(Request $request)
    {
    	$posts = inquiry::all();
    	return view('inquiry_show')->with('postdata',$posts); 
    }
    public function inquiry_delete(Request $request,$id)
    {
        inquiry::where('id',$id)->delete();
        return redirect('/inquiry_show');
    }
    public function inquiryupdate(Request $request,$id)
     {
             $post = inquiry::where("id",$id)->first();
        //dd($post);
        return view('inquiry_update')->with('post',$post);
    }
    public function inquirysaveupdated(Request $request)
    {
        // dd($request->all());
      inquiry::where('id',$request->id)->update([
      	    "name"=>$request->name,
      		"email_id"=>$request->email,
      		"comment"=>$request->comment,
           "pack_id"=>$request->pack_id,
          ]);
        return redirect('/inquiry_show');
    }
}
