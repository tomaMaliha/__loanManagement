<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Loaninfo;
use App\Models\Loantype;
use App\Models\Bank;
use App;
use PDF;

class LoaninfoController extends Controller
{
   	public function loaninfohome()
   	{
        $banks=Bank::all();
        $types = Loantype::all();
   		return view('backend.layouts.loaninfo.loaninfohome',compact('types','banks'));
   	}

    public function loaninfocar()
    {
        $banks=Bank::all();
        $types = Loantype::all();
        return view('backend.layouts.loaninfo.loaninfocar',compact('types','banks'));
    }

    public function loaninfopersonal()
    {
        $banks=Bank::all();
        $types = Loantype::all();
        return view('backend.layouts.loaninfo.loaninfopersonal',compact('types','banks'));
    }


   	public function create(Request $request)
    {

       
       $data = Loaninfo::create([
            'bank_id'=>$request->bank_id,
            'loan_type_id'=>$request->loan_type_id,
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
            $data = Loantype::where('name','Home Loan')->first();

            $types=Loaninfo::with('LoanType','bank')->where('loan_type_id',$data->id)->get();

            // $loaninfohouse=Loaninfo::with('LoanType')->paginate(3);
            // $loaninfohome=Loaninfo::with('bank')->paginate(3);
            return view('backend.layouts.loaninfo.loaninfohomeview',compact('types'));
    }
    public function homeedit($id)
    {

        $loaninfohome=Loaninfo::find($id);

        $data = Loantype::where('name','Home Loan')->first();
        $banks=Bank::all();
        $types=Loaninfo::with('LoanType','bank')->where('loan_type_id',$data->id)->get();
        
        return view('backend.layouts.loaninfo.homeUpdate',compact('loaninfohome','types','banks'));
    }
    public function homeupdate(Request $request,$id)
    {
   
        Loaninfo::where('id',$id)->update([
            'bank_id'=>$request->bank_id,
            'loan_type_id'=>$request->loan_type_id,
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

        return redirect()->route('loaninfohomeview')->with('msg','Loan Information Loaded Successfully');
    }
    public function HomeSingleView($id)
    {  
        $loaninfohome=Loaninfo::find($id);
        return view('backend.layouts.loaninfo.HomeSingleView',compact('loaninfohome'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $loaninfohome = Loaninfo::where('bank_name', $search)->paginate(5);
        return view('backend.layouts.loaninfo.loaninfohomeview', compact('loaninfohome'));
    }
    public function homesingleprint($id)
    {
        $loaninfohome= Loaninfo::find($id);
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.loaninfo.HomeSinglePrint',compact('loaninfohome'));
        return $pdf->stream('Home Loan Information.pdf');
    }
    public function homePrint()
    {
        $loaninfohome= Loaninfo::all();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.loaninfo.homeallprint',compact('loaninfohome'));
        return $pdf->stream('All Home Loans Information.pdf');
    }

    public function CreateCar(Request $request)
    {
       
        Loaninfo::create([
            'bank_id'=>$request->bank_id,
            'loan_type_id'=>$request->loan_type_id,
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
        return redirect()->route('LoanInfoCarView')->with('msg',' Loan Added Successfully');
    }

    
        public function detailsview()
        {
            
            $loaninfohome=Loaninfo::paginate(3);
            return view('backend.layouts.loaninfo.detailsview',compact('loaninfohome'));
        }

        public function LoanInfoCarView()
        {
            $data = Loantype::where('name','Car Loan')->first();
           $types=Loaninfo::with('LoanType','bank')->where('loan_type_id',$data->id)->get();
            //$loaninfocar=Loaninfo::paginate(3);
     
        return view('backend.layouts.loaninfo.LoanInfoCarView',compact('loaninfocar','types'));
        }
        public function CarSingleView($id)
        {  
        $loaninfocar=Loaninfo::find($id);
        return view('backend.layouts.loaninfo.carSingle',compact('loaninfocar'));
        }
        public function caredit($id)
        {

        $loaninfocar=Loaninfo::find($id);

        $data = Loantype::where('name','Car Loan')->first();
        $banks=Bank::all();
        $types=Loaninfo::with('LoanType','bank')->where('loan_type_id',$data->id)->get();
        
        return view('backend.layouts.loaninfo.carUpdate',compact('loaninfocar','types','banks'));
        }
        public function carupdate(Request $request,$id)
    {
   
        Loaninfo::where('id',$id)->update([
            'bank_id'=>$request->bank_id,
            'loan_type_id'=>$request->loan_type_id,
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

        return redirect()->route('LoanInfoCarview')->with('msg','Loan Information Loaded Successfully');
    }

        public function createPersonal(Request $request)
    {
       
        Loaninfo::create([
            'bank_id'=>$request->bank_id,
            'loan_type_id'=>$request->loan_type_id,
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
        return redirect()->route('loaninfopersonalView')->with('msg',' Loan Added Successfully');
    }
    public function personalView()
        {
            $data = Loantype::where('name','Personal Loan')->first();
            $types=Loaninfo::with('LoanType','bank')->where('loan_type_id',$data->id)->get();
            $loaninfopersonal=Loaninfo::paginate(3);
       
        return view('backend.layouts.loaninfo.loaninfopersonalView',compact('loaninfopersonal','types','data'));
        }
        public function personalSingleView($id)
        {  
        $loaninfopersonal=Loaninfo::find($id);
        return view('backend.layouts.loaninfo.personalSingle',compact('loaninfopersonal'));
        }
        public function personaledit($id)
        {

        $loaninfopersonal=Loaninfo::find($id);

        $data = Loantype::where('name','Personal Loan')->first();
        $banks=Bank::all();
        $types=Loaninfo::with('LoanType','bank')->where('loan_type_id',$data->id)->get();
        
        return view('backend.layouts.loaninfo.personalUpdate',compact('loaninfopersonal','types','banks'));
        }
        public function personalupdate(Request $request,$id)
        {
   
        Loaninfo::where('id',$id)->update([
            'bank_id'=>$request->bank_id,
            'loan_type_id'=>$request->loan_type_id,
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
        return redirect()->route('loaninfopersonalView')->with('msg',' Loan Added Successfully');
    }
}
