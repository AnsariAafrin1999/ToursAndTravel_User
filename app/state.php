<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    //
    protected $table = "state";
	//all columns
	protected $fillable =[
		"id",
		"st_name",
		"cn_id",
		"created_at",
		"updated_at",
	];
}
