<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use App\Models\User;
use App\Models\Customer;
use App\Models\Booking;
use App\Models\LoanType;
use App\Models\Bank;
use App;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function admin()
    {
       $count = Loantype::all();
       $countCustomer = User::where('role','Customer')->get();
       $countBank = Bank::all();
       $countall = Booking::all();
       return view('backend.layouts.adminpanel',compact('count','countCustomer','countBank','countall'));
    }

	public function adminform()
   	{
       
   		return view('backend.layouts.user.adminform');
   	}

    public function create(Request $request)
    {


        $user_image= $request->file('image');
        $file_name = uniqid('admin_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        $user_image->storeAs('admin',$file_name);


    		$new_user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'contact'=>$request->contact,
            'password'=>bcrypt($request->password),
            'status'=>$request->status,
            'image'=>$file_name,
            'address'=>$request->address,
        ]);
            
            Admin::create([
            'user_id'=>$new_user->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'contact'=>$request->contact,
            'status'=>$request->status,
            'image'=>$file_name,
            'address'=>$request->address,


            
        ]);
            return redirect()->route('adminview')->with('msg','Admin Information Loaded Successfully');
    }

    public function adminview()
	{
       // $admin=Admin::where('status','active')->get();
        $admin=User::where('role','Admin')->paginate(5);
		return view('backend.layouts.user.adminview',compact('admin'));
	}

    public function adminSingle($id)
    {
        $admin=Admin::find($id);
        return view('backend.layouts.user.adminSingle',compact('admin'));
    }
    
     public function edit($id)
    {
        $admin=User::find($id);
        return view('backend.layouts.user.adminUpdate',compact('admin'));
    }

    public function update(Request $request,$id)
    {
       User::where('id',$id)->update([
          'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'role'=>$request->role,
            'address'=>$request->address,
            'status'=>$request->status,
       ]);

       return redirect()->route('adminview')->with('msg','Admin Information Updated Successfully');
    }
    public function delete($id)
    {
         User::find($id)->delete();
        return redirect()->route('adminview')->with('msg','Admin Information Deleted Successfully');
    }

    public function search(Request $request){
        $search = $request->search;
        $admin = Admin::where('name', $search)->paginate(5);
        return view('backend.layouts.user.adminview', compact('admin'));
    }
    public function singleprint($id)
    {
        $admin= Admin::find($id);
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.user.adminsingleprint',compact('admin'));
        return $pdf->stream('Admin Personal Information.pdf');
    }

     public function print()
    {
        $admin= Admin::all();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.user.adminallprint',compact('admin'));
        return $pdf->stream('All Admins Personal Information.pdf');
    }

    public function customerloan()
    {
       // $admin=Admin::where('status','active')->get();

        $loans = DB::table('bookings')
                    ->join('users','bookings.user_id','=','users.id')
                    ->where('bookings.status','=','0')
                    ->select('bookings.*','users.name as user_name','users.email as user_email','users.address as user_address')
                    ->paginate(15);
       
        // $loans=Booking::with('LoanType','bank','LoanInfo','user')->paginate(10);
        // dd($loans);
        return view('backend.layouts.user.customerloan',compact('loans'));
    }
     public function customerloanlist($id)
    {
       $loan=Booking::with(['user', 'LoanInfo', 'LoanType', 'bank'])->find($id);
        // return $loan;
        // dd($loans);
        return view('frontend.layouts.customerloanlist',compact('loan'));
    }
     public function customerpro()
    {
       // $admin=Admin::where('status','active')->get();
        $customer=Customer::paginate(3);
        $types = Loantype::all();
        return view('frontend.layouts.customerpro',compact('customer','types'));
    }
    public function customerloanapprove($id)
    {
        Booking::findOrFail($id)->update([
            'status' => 1,
        ]);

        return back();
    }
    public function customerAll()
    {
        $loan=Booking::all();
        $loans=Booking::with('LoanType','bank','LoanInfo','user')->get();
        return view('backend.layouts.user.customerAll',compact('loans','loan'));
    }

    public function loanReport()
    {
        return view('backend.layouts.loanReport');
    } 

    public function showLoanReport(Request $request)
    {
        $from = Carbon::createFromFormat('Y-m-d', $request->from);
        $to = Carbon::createFromFormat('Y-m-d', $request->to)->addDays(1);
        $loans = Booking::with(['user','LoanInfo','LoanType'])->whereBetween('created_at', [$from, $to])->latest()->get();
        return view('backend.layouts.loanReport', compact('loans'));
    }
    public function Reportprint()
    {
        $loans= Booking::all();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Reportprint',compact('loans'));
        return $pdf->stream('All Loan Information.pdf');
    }

    public function loandelete($id)
    {
         Booking::find($id)->delete();
        return redirect()->route('loanReport')->with('msg','Loan Information Deleted Successfully');
    }
}
