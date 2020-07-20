<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Bank;

//use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    public function bank()
    {
        return view('backend.layouts.bank.bankform');
        
    }
    public function create(Request $request)
    {
//        $new_user=User::create([
//            'name'=>$request->name,
//            'email'=>$request->email,
//            'password'=>$request->password,
//            'status'=>$request->status,
//        ]);
        Bank::create([
//            'user_id'=>$new_user->id,
            'bank_name'=>$request->bank_name,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'email'=>$request->email,
            'logo'=>$request->logo,
        ]);

        return redirect()->route('banklist')->with('msg','Bank Information Added Successfully');
        
    }
    public function banklist()
    {
        $bank=Bank::paginate(3);
        return view('backend.layouts.bank.bankview',compact('bank'));
    }
       
}
