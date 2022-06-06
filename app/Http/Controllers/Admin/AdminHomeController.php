<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmailMessage;

class AdminHomeController extends Controller
{
    public function index()
    {
        $customer = User::where('user_type',null)->where('status',1)->count();

        return view('backend.home')->with(['customer_count'=>$customer]);
    }
    public function profile()
    {
        return view('backend.admin.profile');
    }
    public function edit()
    {
        return view('backend.admin.edit-admin');
    }
    public function update(Request $request)
    {
        $id = auth()->id();
        $this->validate($request,[
            'name'=>'required|max:25',
            'email'=>"unique:users,email,$id,id",
            'mobile'=>'required|max:10',
        ]);
        $user = User::find(auth()->id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->save();
        return redirect()->back()->with(['status'=>'success','message'=>'Admin updataed successfully']);
    }
}
