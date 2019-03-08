<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;
use Auth;

class registercontroller extends Controller
{
    //
    public function register_add(Request $request)
    {
    	$post=register::create([
         "id"=>$request->id,
    	  "first_name"=>$request->first_name,
    	  "last_name"=>$request->last_name,
    	  "email_address"=>$request->email_address,
          "gender"=>$request->gender,
    	  "password"=>bcrypt($request->password),
    	  "confirm_password"=>$request->confirm_password,
          ]);
    	return redirect('/login');
    	//dd($post);
    }
    public function attemptLogin(Request $request)
    {
        if(Auth::attempt([
            "email_address"=>$request->email_address,
            "password"=>$request->password,
        ]))
        {
            return redirect('/');
        }
        else
        {
            return redirect('/login?error=Invalid Credentials');
        }
    }
     public function logout(Request $request)
    {
      Auth::logout();
      return redirect('/');
    }
    public function register_show(Request $request)
    {
    	$posts = register::all();
    	return view('register_show')->with('postdata',$posts); 
    }
    public function delete(Request $request,$id)
    {
        register::where('id',$id)->delete();
        return redirect('/register_show');
    }
    public function update(Request $request,$id)
     {
             $post = register::find($id);
        //dd($post);
        return view('register_update')->with('post',$post);
    }
    public function saveupdated(Request $request)
    {
        // dd($request->all());
      register::where('id',$request->id)->update([
      	  "first_name"=>$request->first_name,
    	  "last_name"=>$request->last_name,
    	  "email_address"=>$request->email,
          "gender"=>$request->gender,
    	  "password"=>$request->password,
    	  "confirm_password"=>$request->confirm_password,
          ]);
        return redirect('/register_show');
    }
}
