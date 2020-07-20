<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Loantype;
use Session;
use App\Models\Loaninfo;
use App\Models\Booking;
use App\Models\Bank;



class LoanController extends Controller
{
    public function loan()
    {
    	$types = Loantype::all();
        return view('frontend.layouts.loan',compact('types')); 
    }
    public function homeform()
    {
    	$types = Loantype::all();
        return view('frontend.layouts.loans.home',compact('types')); 
    }
    
    public function carform()
    {
        $types = Loantype::all();
        return view('frontend.layouts.loans.car',compact('types')); 
    }
    public function personalform()
    {
        $types = Loantype::all();
        return view('frontend.layouts.loans.personal',compact('types')); 
    }

    public function apply($id)
    {

        $types=Loantype::all();
       
        $criteria=Session::get('criteria');

    
        $loan=Loaninfo::find($id);

            //  dd($criteria);
       //dd($loan);
        $type=Loaninfo::with('LoanType','bank')->get();
        
        Session()->flash('msg','Booking Confirmed Successflly');
        return view('frontend.layouts.LoanApply',compact('types','criteria','loan','type','id'));
    }

    
    
    public function booking($id)
    {
         //dd(auth()->user()->id);
        
            Booking::create([
                'user_id'=>auth()->user()->id,
                'loan_id'=>$id,
                'status'=>0,
                'criteria'=>json_encode(Session::get('criteria')),
            ]);


        return redirect()->route('index')->with('msg','You Confirmed Your Loan, Wait for Confirmation message.');
    }



     public function bookingdone($id)
    {
        $book=Booking::find($id);
        $types = Loantype::all();
        return view('frontend.layouts.bookingdone',compact('types','book')); 
    }

   


}

