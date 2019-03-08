<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inquiry extends Model
{
    //
    protected $table = "inquiry";
	//all columns
	protected $fillable =[
		"id",
		"name",
		"email_id",
		"comment",
		"pack_id",
		"created_at",
		"updated_at",
	];
}
