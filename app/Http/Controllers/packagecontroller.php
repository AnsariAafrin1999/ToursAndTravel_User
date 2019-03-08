<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;
class packagecontroller extends Controller
{
    //
    public function package_add(Request $request)
    {
    	$post=package::create([
          "pack_name"=>$request->name,
          "cat_id"=>$request->cat_id,
          "ct_id"=>$request->ct_id,
          "hotel_id"=>$request->hotel_id,
          "pack_desc"=>$request->description,
          "pack_price"=>$request->price,
          "pack_image1"=>$request->text,
          "pack_image2"=>$request->text1,
          "pack_image3"=>$request->text2,
          "source"=>$request->source,
          "destination"=>$request->destination,
          "travel_by"=>$request->travel_by,
          "date-time"=>$request->date_time,

    	]);
    	return redirect('/package_show');
    	//dd($post);
    }
    public function package_show(Request $request)
    {
    	$posts = package::all();
    	return view('package_show')->with('postdata',$posts); 
    }
    public function package_delete(Request $request,$id)
    {
        package::where('id',$id)->delete();
        return redirect('/package_show');
    }
    public function packageupdate(Request $request,$id)
     {
             $post = package::where("id",$id)->first();
        //dd($post);
        return view('package_update')->with('post',$post);
    }
    public function packagesaveupdated(Request $request)
    {
        // dd($request->all());
      package::where('id',$request->id)->update([
           'pack_name'=>$request->name,
           "cat_id"=>$request->cat_id,
          "ct_id"=>$request->ct_id,
          "hotel_id"=>$request->hotel_id,
          "pack_desc"=>$request->description,
          "pack_price"=>$request->price,
          "pack_image1"=>$request->text,
          "pack_image2"=>$request->text1,
          "pack_image3"=>$request->text2,
          "source"=>$request->source,
          "destination"=>$request->destination,
          "travel_by"=>$request->travel_by,
          "date-time"=>$request->date_time,

        ]);
        return redirect('/package_show');
    }
}
