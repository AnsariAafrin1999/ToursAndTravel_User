<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    //
     protected $table = "feedback";
	//all columns
	protected $fillable =[
		"id",
		"user_id",
		"feedback",
		"created_at",
		"updated_at",
	];
}
