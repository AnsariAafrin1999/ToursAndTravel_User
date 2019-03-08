<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pay extends Model
{
    //
    protected $table = "pay";
	//all columns
	protected $fillable =[
		"id",
		"pay_name",
		"pay_amount",
		"user_id",
		"pack_id",
		"admin_id",
		"created_at",
		"updated_at",
	];
}
