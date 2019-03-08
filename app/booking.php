<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
     protected $table="booking";
    protected $fillable=[
    	"id",
    	"pack_id",
    	"book_date",
        "user_id",
        "description",
    	"created_at",
    	"updated_at"
    ];
}
