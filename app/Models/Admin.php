<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable=['user_id','name','contact','email','role','address','status','image'];
}
