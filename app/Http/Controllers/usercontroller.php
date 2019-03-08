<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usertable;
class usercontroller extends Controller
{
    //
    public function user_add(Request $request)
    {
    	$post=usertable::create([
          "user_name"=>$request->name,
          "user_address"=>$request->address,
          "user_phoneno"=>$request->phoneno,
          "user_email"=>$request->email,
          "user_password"=>$request->password,
          "description"=>$request->description,
          "hotel_id"=>$request->hotel_id,
    	]);
    	return redirect('/usertable_show');
    	//dd($post);
    }
    public function user_show(Request $request)
    {
    	$posts = usertable::all();
    	return view('usertable_show')->with('postdata',$posts); 
    }
    public function user_delete(Request $request,$id)
    {
        usertable::where('id',$id)->delete();
        return redirect('/usertable_show');
    }
    public function userupdate(Request $request,$id)
     {
             $post = usertable::where("id",$id)->first();
        //dd($post);
        return view('usertable_update')->with('post',$post);
    }
    public function usersaveupdated(Request $request)
    {
        // dd($request->all());
      usertable::where('id',$request->id)->update([
           'user_name'=>$request->user_name,
           'user_address'=>$request->address,
           "description"=>$request->description,
           "hotel_id"=>$request->hotel_id,
        ]);
        return redirect('/usertable_show');
    }
}
