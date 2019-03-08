<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;
class feedbackcontroller extends Controller
{
    //
    public function feedback_add(Request $request)
    {
    	$post=feedback::create([
          "user_id"=>$request->user_id,
          "feedback"=>$request->feedback,
          ]);
    	return redirect('/feedback_show');
    	//dd($post);
    }
    public function feedback_show(Request $request)
    {
    	$posts = feedback::all();
    	return view('feedback_show')->with('postdata',$posts); 
    }
    public function feedback_delete(Request $request,$id)
    {
        feedback::where('id',$id)->delete();
        return redirect('/feedback_show');
    }
    public function feedbackupdate(Request $request,$id)
     {
             $post = feedback::where("id",$id)->first();
        //dd($post);
        return view('feedback_update')->with('post',$post);
    }
    public function feedbacksaveupdated(Request $request)
    {
        // dd($request->all());
      feedback::where('id',$request->id)->update([
           "user_id"=>$request->user_id,
           "feedback"=>$request->feedback,
          ]);
        return redirect('/feedback_show');
    }
}
