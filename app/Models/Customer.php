<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['user_id','name','email','contact','role','address','permanent','image','status','country', 'password'];
}
