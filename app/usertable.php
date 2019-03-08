<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usertable extends Model
{
    //
     protected $table = "user";
	//all columns
	protected $fillable =[
		"id",
		"user_name",
		"user_address",
		"user_phoneno",
		"user_email",
		"user_password",
		"description",
		"hotel_id",
		"created_at",
		"updated_at"
	];
}
