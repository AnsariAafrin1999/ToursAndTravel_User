<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
     protected $table = "country";
	//all columns
	protected $fillable =[
		"id",
		"cn_name",
		"description",
		"created_at",
		"updated_at"
	];
}
