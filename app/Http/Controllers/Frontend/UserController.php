<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Loantype;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
  public function showRegForm()
    {
       
        // dd($types);
        return view('frontend.layouts.auth.registration');
    }

    public function showLoginForm(Request $request)
    {
      //validate 
          

        $rules = [
            'name'          => 'required',
            'email'         => 'required|email',
            'password'         => 'required|min:6',

        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $user_image= $request->file('image');
        $file_name = uniqid('customer_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        $user_image->storeAs('customer',$file_name);

       User::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'role'=>$request->role,
          'password'=>bcrypt($request->password),
          'status'=>$request->status,
          'address'=>$request->address,
          'image'=>$file_name,
       ]);


      return redirect()->route('login')->with('msg','Registration Successful');
   }

   public function login()
    {
       
        // dd($types);
        return view('frontend.layouts.auth.login');
    }

     public function doLogin(Request $request)
    {

      //validate 
        $rules = [
            'email'         => 'required|email',
            'password'         => 'required',

        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) && Auth()->User()->role=="Admin") 
        {

            return redirect()->route('admin');
        }
        elseif (Auth::attempt($credentials) && Auth()->User()->role=="Customer") 
        {

            return redirect()->route('test');
        }
        elseif (Auth::attempt($credentials) && Auth()->User()->role=="Bank") 
        {

            return redirect()->route('admin');
        }

        return redirect()->back()->with('msg','Invalid User credentials');
    }
    public function logout()
    {
       
        // dd($types);
       $types = Loantype::all();
       Auth::logout();
       session()->invalidate();
      session()->flash('msg',' You Have Successfully logged out');
        return redirect()->route('login');
    }


}
