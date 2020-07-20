<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function admin()
    {
       
        return view('backend.master1');
    }

	public function adminform()
   	{
       
   		return view('backend.layouts.user.adminform');
   	}

    public function create(Request $request)
    {
    		$new_user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>$request->password,
            'status'=>$request->status,
        ]);
            
            Admin::create([
            'user_id'=>$new_user->id,
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'role'=>$request->role,
            'address'=>$request->address,
            'status'=>$request->status,


            
        ]);
            return redirect()->route('adminview')->with('msg','Admin Information Loaded Successfully');
    }

    public function adminview()
	{
        $admin=Admin::paginate(3);
		return view('backend.layouts.user.adminview',compact('admin'));
	}
}
