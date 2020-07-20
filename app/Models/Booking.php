<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // protected $guarded=[];
    protected $fillable=['user_id','loan_id','status','criteria'];

    public function user()
 	{
 		return $this->belongsTo(User::class,'user_id','id');
 	}
 	
 	public function LoanType()
 	{
 		return $this->belongsTo(Loantype::class,'loan_id','id');
 	}
    public function LoanInfo()
    {
        return $this->belongsTo(Loaninfo::class,'loan_id','id');
    }

 	public function bank()
 	{
 		return $this->belongsTo(Bank::class,'loan_id','id');
 	}
    public function customer()
    {
        return $this->belongsTo(Customer::class,'user_id','id');
    }
}
