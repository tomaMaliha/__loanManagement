<?php

use Illuminate\Database\Seeder;
use App\Models\Loaninfo;

class LoanInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loaninfo::create([
        	'bank_id'=>1, 
        	
        	'loan_type_id'=>'1',
        	'interest_rate'=>'6.9%',
        	'age_req'=>'min 30',
        	'min_income'=>'4000',
        	'gaurantor'=>'son',
        	'emp_eligibility'=>'aoisud',
        	'source_income'=>'job',
        	'before_loan'=>'no',
        	'islamic'=>'yes',
        	'max_loan_tenure'=>'1 yr',
        	'approve_time'=>'20 yrs',
            'service_charge'=>'seuyr4398',
            'late_payment'=>'seuyr4398',
            'terms'=>'seuyr4398',
            'details'=>'seuyr4398',
        ]);
    }
}
