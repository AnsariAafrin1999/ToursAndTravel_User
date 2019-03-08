<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;
class paymentcontroller extends Controller
{
    //
    public function payment_add(Request $request)
    {
    	$post=payment::create([

          "pay_name"=>$request->name,
          "pay_amount"=>$request->amount,
          "user_id"=>$request->user_id,
          "pack_id"=>$request->pack_id,
          "admin_id"=>$request->admin_id,
          ]);
    	return redirect('/payment_show');
    	//dd($post);
    }
    public function payment_show(Request $request)
    {
      $posts = payment::all();
      return view('payment_show')->with('postdata',$posts); 
    }
    public function payment_delete(Request $request,$id)
    {
        payment::where('id',$id)->delete();
        return redirect('/payment_show');
    }
    public function paymentupdate(Request $request,$id)
     {
             $post = payment::where("id",$id)->first();
        //dd($post);
        return view('payment_update')->with('post',$post);
    }
    public function paymentsaveupdated(Request $request)
    {
        // dd($request->all());
      payment::where('id',$request->id)->update([
           "pay_name"=>$request->name,
          "pay_amount"=>$request->amount,
          "user_id"=>$request->user_id,
          "pack_id"=>$request->pack_id,
          "admin_id"=>$request->admin_id,
          ]);
        return redirect('/payment_show');
    }
}
