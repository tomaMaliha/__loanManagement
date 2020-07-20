<?php

namespace App\Http\Controllers\Backend;
use App\Models\Customer;
use App\Models\User;
use App;
use PDF;
use Illuminate\Http\Request;

class CustomerController extends Controller
{


	public function customerform()
   	{
       
   		return view('backend.layouts.user.customerform');
   	}

    public function create(Request $request)
    {
    		$new_user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
             'image'=>$request->image,
            'role'=>$request->role,
            'password'=>$request->password,
            
        ]);
            Customer::create([
            'user_id'=>$new_user->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'role'=>$request->role,
            'address'=>$request->address,
            'permanent'=>$request->permanent,
            'image'=>$request->image,
            'status'=>$request->status,
            'country'=>$request->country,
            'password'=>$request->password,
        ]);
            return redirect()->route('customerview')->with('msg','Customer Information Added Successfully');
    }
    public function customerview()
    {
       // $admin=Admin::where('status','active')->get();
        $customer=User::where('role','Customer')->get();
        return view('backend.layouts.user.customerview',compact('customer'));
    }
    public function edit($id)
    {
        $customer=User::find($id);
        return view('backend.layouts.user.customerUpdate',compact('customer'));
    }

    public function update(Request $request,$id)
    {
       User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'role'=>$request->role,
            'address'=>$request->address,
            'permanent'=>$request->permanent,
            'image'=>$request->image,
            'status'=>$request->status,
            'country'=>$request->country,
            'password'=>$request->password,
       ]);

       return redirect()->route('customerview')->with('msg','Customer Information Updated Successfully');
    }
    public function customerSingle($id)
    {
        $customer=Customer::find($id);
        return view('backend.layouts.user.customerSingle',compact('customer'));
    }
    public function search(Request $request){
        $search = $request->search;
        $customer = Customer::where('name', $search)->paginate(5);
        return view('backend.layouts.user.customerview', compact('customer'));
    }
    public function singleprint($id)
    {
        $customer= Customer::find($id);
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.user.customerSinglePrint',compact('customer'));
        return $pdf->stream('Customer Personal Information.pdf');
    }

     public function print()
    {
        $customer= Customer::all();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.user.customerPrint',compact('customer'));
        return $pdf->stream('All Customer Personal Information.pdf');
    }
}




