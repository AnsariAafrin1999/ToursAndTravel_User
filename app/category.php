<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     protected $table = "category";
	//all columns
	protected $fillable =[
		"cat_id",
		"cat_name",
		"description",
		"created_at",
		"updated_at"
	];
}
