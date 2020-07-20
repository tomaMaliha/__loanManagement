<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loaninfo;
use App\Models\Loantype;
use App\Models\Bank;

class LoaninfoController extends Controller
{
   	public function loaninfohome()
   	{
       
        $types = Loantype::all();
   		return view('backend.layouts.loaninfo.loaninfohome',compact('types'));
   	}

    public function loaninfocar()
    {
        
        $types = Loantype::all();
        return view('backend.layouts.loaninfo.loaninfocar',compact('types'));
    }
    public function loaninfopersonal()
    {
        
        $types = Loantype::all();
        return view('backend.layouts.loaninfo.loaninfopersonal',compact('types'));
    }


   	public function create(Request $request)
    {
       
        Loaninfo::create([
            'bank_id'=>$request->bank_id,
            'loan_type_id'=>1,
            'interest_rate'=>$request->interest_rate,
            'min_age_requirement'=>$request->min_age_requirement,
            'max_age_requirement'=>$request->max_age_requirement,
            'min_income'=>$request->min_income,
            'min_financial_amount'=>$request->min_financial_amount,
            'max_financial_amount'=>$request->max_financial_amount,
            'gaurantor'=>$request->gaurantor,
            'min_loan_tenure_years'=>$request->min_loan_tenure_years,
            'max_loan_tenure_years'=>$request->max_loan_tenure_years,
            'emp_eligibility'=>$request->emp_eligibility,
            'source_income'=>$request->source_income,
            'before_loan'=>$request->before_loan,
            'islamic'=>$request->islamic,
            'max_loan_tenure'=>$request->max_loan_tenure,
            'approve_time'=>$request->approve_time,
            'service_charge'=>$request->service_charge,
            'late_payment'=>$request->late_payment,
            'terms'=>$request->terms,
            'details'=>json_encode($request->details),
        ]);
        return redirect()->route('loaninfohomeview')->with('msg',' Loan Added Successfully');
    }

    public function loaninfohomeview()
        {


            $loaninfohome=Loaninfo::with('bank')->paginate(3);


            //$data = [];
            //$data = json_decode($loaninfohome->details, true);
            //return $data;
            return view('backend.layouts.loaninfo.loaninfohomeview',compact('loaninfohome', 'data'));
        }
        public function detailsview()
        {
            
            $loaninfohome=Loaninfo::paginate(3);
            return view('backend.layouts.loaninfo.detailsview',compact('loaninfohome'));
        }
}
