<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\country;

class countrycontroller extends Controller
{
     public function country_add(Request $request)
    {
    	$post=country::create([
          "cn_name"=>$request->name,
          "description"=>$request->description,
    	]);
    	return redirect('/country_show');
    	//dd($post);
    }
    public function country_show(Request $request)
    {
    	$posts = country::all();
    	return view('country_show')->with('postdata',$posts); 
    }
    public function country_delete(Request $request,$id)
    {
        country::where('id',$id)->delete();
        return redirect('/country_show');
    }
    public function countryupdate(Request $request,$id)
     {
             $post = country::where("id",$id)->first();
        //dd($post);
        return view('country_update')->with('post',$post);
    }
    public function countrysaveupdated(Request $request)
    {
        // dd($request->all());
      country::where('id',$request->id)->update([
           'cn_name'=>$request->cn_name,
           "description"=>$request->description,
        ]);
        return redirect('/country_show');
    }
}
