<?php

use Illuminate\Database\Seeder;
use App\Models\Loan;

class LoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	Loan::create(
                [
        	'r_id'=>'2',
            'r_name'=>'toma',
            'contact'=>'toma',
            'email'=>'foysal@gmail.com',
            'address'=>'toma',
            'birth'=>'2019-10-10',
            'work'=>'toma',
            'marital'=>'toma',
            'year_exp'=>'toma',
            'monthly_inc'=>'toma',
            'yearly_inc'=>'toma',
            'before_loan'=>'toma',
            'loan_amount'=>'toma',
            'gaurantor_name'=>'toma',
            'gaurantor_relation'=>'toma',
            'gaurantor_contact'=>'toma',
            'gaurantor_address'=>'toma',
            'image'=>'toma',
            'details'=>'toma',
        ]
    );
    }
}
