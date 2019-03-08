<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //table name
	protected $table="post";
	//all columns
	protected $fillable=[
		"id",
		"title",
		"description",
		"created_at",
		"updated_at",
	];
}
