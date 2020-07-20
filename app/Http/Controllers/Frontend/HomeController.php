<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Loantype;
use App\Models\Loaninfo;
use Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Bank;


class HomeController extends Controller
{
    public function index()
    {
        $types = Loantype::all();
        
        return view('frontend.layouts.index',compact('types'));
    }
    public function about()
    {
         $types = Loantype::all();
        return view('frontend.layouts.about',compact('types'));
    }

    public function applyloan(){

        $types = Loantype::all();
       return view('frontend.layouts.applyloan',compact('types'));
    }

     public function searchLoan(Request $request)
    {
        
        Session::put('criteria',$request->except('_token'));

        $allLoans=Loaninfo::where('loan_type_id',$request->type)
            ->where('min_loan_tenure_years','<=',$request->year)
            ->where('max_loan_tenure_years','>=',$request->year)
            ->where('min_income','<=',$request->salary)
            ->where('min_financial_amount','<=',$request->loan_amount)
            ->where('max_financial_amount','>=',$request->loan_amount)
        ->get();

        $criteria=$request->all();

    
        
        $types = Loantype::all();
        $type=Loaninfo::with('LoanType','bank')->get();
       
        return view('frontend.layouts.homeloan',compact('types','allLoans','criteria','type'));
    

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

    public function viewLoan($id)
    {
       
        $singleLoanView=Loaninfo::find($id);
        $types = Loantype::all();
        return view('frontend.layouts.list',compact('types','singleLoanView','allLoans'));
    }  
    public function entrypage()
    {
        $types = Loantype::all();
        return view('frontend.layouts.entrypage',compact('types'));
    } 
    public function drophome($id)
    {
        $allLoans=Loaninfo::where('loan_type_id',$id)->get();
       // dd($allLoans);

        $types = Loantype::all();

        return view('frontend.layouts.drophome',compact('types','allLoans'));
    }  
    public function faq()
    {
        $types = Loantype::all();

        return view('frontend.layouts.faq',compact('types'));
    }
   public function mission()
    {
        $types = Loantype::all();

        return view('frontend.layouts.mission',compact('types'));
    }
    public function relation()
    {
        $types = Loantype::all();

        return view('frontend.layouts.relation',compact('types'));
    }
    public function bankreview()
    {
        $types = Loantype::all();

        return view('frontend.layouts.bankreview',compact('types'));
    }
}
