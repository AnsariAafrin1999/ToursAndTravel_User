<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\MessageBag;
class rootcontroller extends Controller
{
    public function attemptLogin(Request $request)
    {
    	if(Auth::attempt([
    		"email_address"=>$request->email_address,
    		"password"=>$request->password
   
    	]))
         {
            //dd("Login Success");
            return redirect('/');
    	 }else{
    	 	return redirect('/login')->withErrors(['credentials'=>'Invalid credentials']);
    }
}
}

