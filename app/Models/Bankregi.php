<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bankregi extends Model
{
    protected $fillable=['user_id','name','email','role','status','address','logo','contact'];
}
