<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Models\Loantype;
use App;
use PDF;

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
        
        $loantype=Loantype::where('status','active')->paginate(3);
        return view('backend.layouts.loantype.loantypeview',compact('loantype'));
    }

     public function loantypeSingleView($id)
    {
        $loantype=Loantype::find($id);
        return view('backend.layouts.loantype.view',compact('loantype'));
    }
    public function edit($id)
    {
        $loantype=Loantype::find($id);
        return view('backend.layouts.loantype.loantypeUpdate',compact('loantype'));
    }
    public function update(Request $request,$id)
    {
        Loantype::where('id',$id)->update([
            'name'=>$request->name,
            'status'=>$request->status,
        ]);

        return redirect()->route('loantypelist')->with('msg','Loan Type Updated Successfully');
        
    }
    public function delete($id)
    {
        Loantype::find($id)->delete();
        return redirect('loantypelist')->with('msg','Loan Type Deleted Successfully');
    }
    public function search(Request $request){
        $search = $request->search;
        $loantype = Loantype::where('name', $search)->paginate(3);
        return view('backend.layouts.loantype.loantypeview', compact('loantype'));
    }
    public function typesingleprint($id)
    {
        $loantype= Loantype::find($id);
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.loantype.typeSinglePrint',compact('loantype'));
        return $pdf->stream('Loan Type Information.pdf');
    }
   public function print()
    {
        $loantype= Loantype::all();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.loantype.typePrint',compact('loantype'));
        return $pdf->stream('All Loan Type Information.pdf');
    }
    
}
