<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        $search = null;

        $cutsomers = User::where('user_type',NULL)->paginate(15);
        if($request->search !=null) {
           $cutsomers = User::where('mobile', 'LIKE', "%{$request->search}%")
           ->orWhere('email', 'LIKE', "%{$request->search}%")->paginate(15);
            $search = $request->search;
        }
        $count = User::where('user_type',null)->where('status',1)->count();
        return view('backend.users.index')->with(['customers'=>$cutsomers,'search'=>$search,'count'=>$count]);
    }
    public function create(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:25',
            'email'=>'required|unique:users|max:35',
            'mobile'=>'required|max:10',
        ]);
        User::create($request->all());
        return redirect()->back()->with(['status'=>'success','message'=>'New User Added successfully']);
    }
    public function destroy($id)
    {
       $user = User::find($id);
       $user->delete();
       return redirect()->back()->with(['status'=>'success','message'=>'User Deleted successfully']);

    }
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('backend.users.edit',['user'=>$user]);
    }
    public function update(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:25',
            'email'=>"unique:users,email,$request->id,id",
            'mobile'=>'required|max:10',
        ]);
       $id = $request->id;
       $user = User::find($id);
       $user->name = $request->name;
       $user->email = $request->email;
       $user->mobile = $request->mobile;;
       $user->save();
       return redirect()->route('admin.users')->with(['status'=>'success','message'=>'User updated sucesfully']);
    }
    public function passwordEdit(Request $request)
    {
        return view('backend.admin.password-edit');
    }
    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->route('admin.dashboard')->with(['status'=>'success','message'=>'Password Changed sucesfully']);
    }
}
