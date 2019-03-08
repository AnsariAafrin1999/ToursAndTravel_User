<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;
class packagebookingcontroller extends Controller
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
          "pack_image"=>$request->file,
          "pack_image1"=>$request->file1,
          "pack_image2"=>$request->file2,
          "source"=>$request->source,
          "destination"=>$request->destination,
          "travel_by"=>$request->travel_by,
          "date-time"=>$request->date_time,

    	]);
    	//return redirect('/package_show');
    	dd($post);
    }
    public function single_package(Request $request,$id)
    {
      $sing=package::where("id",$id)->with('hotelget')->first();
           // dd($sing->toArray());

      return view('package')->with('sing',$sing);
    }
   
}
