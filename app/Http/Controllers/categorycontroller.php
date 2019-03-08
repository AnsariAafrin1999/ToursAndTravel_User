<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
class categorycontroller extends Controller
{
     public function category_add(Request $request)
    {
    	$post=category::create([
          "cat_name"=>$request->name,
    	]);
    	return redirect('/category_show');
    	//dd($post);
    }
    public function category_show(Request $request)
    {
    	$posts = category::all();
    	return view('category_show')->with('postdata',$posts); 
    }
    public function category_delete(Request $request,$cat_id)
    {
        category::where('cat_id',$cat_id)->delete();
        return redirect('/category_show');
    }
    public function category_update(Request $request,$cat_id)
     {
        $post = category::where("cat_id",$cat_id)->first();
        //dd($post);
        return view('category_update')->with('post',$post);
    }
    public function category_saveupdated(Request $request)
    {
        // dd($request->all());
        category::where('cat_id',$request->id)->update([
            'cat_name'=>$request->name,
        ]);
        return redirect('/category_show');
    }
}
