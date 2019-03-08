<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    //
     protected $table = "package";
	//all columns
	protected $fillable =[
		"id",
		"pack_name",
		"cat_id",
		"ct_id",
		"hotel_id",
		"day_id",
		"pack_desc",
		"pack_price",
		"pack_image",
		"pack_image1",
		"pack_image2",
		"source",
		"destination",
		"travel_by",
		"date-time",
		"created_at",
		"updated_at"
	];

	public function hotelget()
	{
		return $this->belongsTo('App\hotel','hotel_id','id');
	}

	public function dayscheduleget()
	{
		return $this->belongsTo('App\dayschedule','day_id','day_id');
	}
	
}
