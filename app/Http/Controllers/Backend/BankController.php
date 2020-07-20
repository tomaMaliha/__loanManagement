<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bank;
use App;
use PDF;

//use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    public function bank()
    {
       
        return view('backend.layouts.bank.bankform');
        
    }
    public function create(Request $request)
    {

        $user_image= $request->file('image');
        $file_name = uniqid('bank_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        $user_image->storeAs('bank',$file_name);
                
            
            $new_user=User::create([
            'name'=>$request->bank_name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'address'=>$request->address,
            'role'=>$request->role,
            'password'=>bcrypt($request->password),
            'image'=>$file_name,
        ]);

        Bank::create([
            'user_id'=>$new_user->id,
            'bank_name'=>$request->bank_name,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'email'=>$request->email,
            'role'=>$request->role,
            'image'=>$file_name,
        ]);

      // insert into 'products'('column name') values('value');


        return redirect()->route('banklist')->with('msg','Bank Information added successfully');
        
    }
    public function banklist()
    {
        $bank=Bank::paginate(3);
        return view('backend.layouts.bank.bankview',compact('bank'));
    }

    public function banklistView($id)
    {
        $bank=Bank::find($id);
        return view('backend.layouts.bank.view',compact('bank'));
    }

    public function edit($id)
    {
        $bank=Bank::find($id);
        return view('backend.layouts.bank.bankUpdate',compact('bank'));
    }

     public function update(Request $request,$id)
    {

         $user_image= $request->file('image');
         $file_name = uniqid('bank_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        $user_image->storeAs('bank',$file_name);
        
        Bank::where('id',$id)->update([


            'bank_name'=>$request->bank_name,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'email'=>$request->email,
            'image'=>$file_name,
       ]);

       return redirect()->route('banklist')->with('msg','Bank Information Updated Successfully');
    }
    public function delete($id)
    {
        Bank::find($id)->delete();
        return redirect()->route('banklist')->with('msg','Bank Information Deleted Successfully');
    }
    public function search(Request $request){
        $search = $request->search;
        $bank = Bank::where('bank_name', $search)->paginate(5);
        return view('backend.layouts.bank.bankview', compact('bank'));
    }
    public function singleprint($id)
    {
        $bank= Bank::find($id);
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.bank.banksingleprint',compact('bank'));
        return $pdf->stream('Bank Personal Information.pdf');
    }

     public function print()
    {
        $bank= Bank::all();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.bank.bankallprint',compact('bank'));
        return $pdf->stream('All Bank Personal Information.pdf');
    }
       
}
