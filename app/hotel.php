<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
      protected $table="hotel";
    protected $fillable=[
    	"id",
    	"hotel_name",
    	"image_1",
    	"image_2",
    	"image_3",
        "check_in",
        "check_out",
        "status",
        "cn_id",
        "st_id",
        "c_id",
        "description",
    	"created_at",
    	"updated_at"
    ];
}
