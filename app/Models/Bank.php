<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
	// protected $table=['bank'];
    protected $fillable=['bank_name','contact','address','email','image'];
}
