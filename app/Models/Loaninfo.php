<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loaninfo extends Model
{
     protected $fillable=['bank_id','loan_type_id','interest_rate','min_age_requirement','max_age_requirement','min_income','min_financial_amount','max_financial_amount','gaurantor','min_loan_tenure_years','max_loan_tenure_years','emp_eligibility','source_income','before_loan','islamic','max_loan_tenure','approve_time','service_charge','late_payment','terms','details'];

     	public function LoanType()
     	{
     		return $this->belongsTo(Loantype::class);
     	}

     	public function bank()
     	{
     		return $this->belongsTo(Bank::class);
     	}

}
