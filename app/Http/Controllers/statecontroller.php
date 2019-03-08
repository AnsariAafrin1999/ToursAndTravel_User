<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\state;
class statecontroller extends Controller
{
    //
    public function state_add(Request $request)
    {
    	$post=state::create([

          "st_name"=>$request->name,
          "cn_id"=>$request->cn_id,
          ]);
    	//return redirect('/state_show');
    	dd($post);
    }
}
