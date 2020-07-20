<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Models\Loantype;

class LoanTypeController extends Controller
{
    public function loantype()
    {
    	
        // dd($loantype);
    	//select * from Loantypes
        return view('backend.layouts.loantype.loantypeform');
    	
       // return view('backend.layouts.loantypeform');
    	
    }
    public function create(Request $request)
    {
    	Loantype::create([
            'name'=>$request->name,
            'status'=>$request->status,
        ]);

//        insert into 'products'('column name') values('value');


        return redirect()->route('loantypelist')->with('msg','Loan Type Added Successfully');
    	
    }
     public function loantypelist()
    {
        $loantype=Loantype::paginate(3);
        return view('backend.layouts.loantype.loantypeview',compact('loantype'));
    }
    
}
