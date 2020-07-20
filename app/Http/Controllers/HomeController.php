<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loantype;
use App\Models\Loaninfo;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function index()
    {
        $types = Loantype::all();
        return view('frontend.layouts.index',compact('types'))->with('msg','done');
    }
    public function applyloan(){
        $types = Loantype::all();
       return view('frontend.layouts.applyloan',compact('types'));
    }
     public function searchLoan(Request $request)
    {
        dd($request->all()); 
       
        // loan_type_id
        // min_loan_tenure_years
        // max_loan_tenure_years
        // min_income

        // min_financial_amount
        // max_financial_amount

// dd($request->all());
//get list of loan based on user criteria
        $allLoans=Loaninfo::where('loan_type_id',$request->type)
            ->where('min_loan_tenure_years','<=',$request->year)
            ->where('max_loan_tenure_years','>=',$request->year)
            ->where('min_income','<=',$request->salary)
            ->where('min_financial_amount','<=',$request->loan_amount)
            ->where('max_financial_amount','>=',$request->loan_amount)
        ->get();

        $criteria=$request->all();

     

        $types = Loantype::all();
        return view('frontend.layouts.homeloan',compact('types','allLoans','criteria'));
    }
     public function homeloan()
    {

        $types = Loantype::all();
        return view('frontend.layouts.homeloan',compact('types'));
    }  
    public function carloan()
    {

        $types = Loantype::all();
        return view('frontend.layouts.carloan',compact('types'));
    }    
    
public function test()
    {

        $types = Loantype::all();
        return view('frontend.layouts.loans.test',compact('types'));
    }

    public function list()
    {
        $loaninfohome=Loaninfo::paginate(3);
        $types = Loantype::all();
        return view('frontend.layouts.list',compact('loaninfohome','types'));
        
        
    }   
   
}
