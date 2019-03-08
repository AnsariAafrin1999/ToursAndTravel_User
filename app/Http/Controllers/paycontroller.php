<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;
class paycontroller extends Controller
{
    //
    public function pay_add(Request $request)
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
}
