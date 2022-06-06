<?php



namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class AdminAuthController extends Controller

{

    public function index()

    {

        if(Auth::check() && auth()->user()->user_type=='1') {



            return redirect()->route('admin.dashboard');

        }

        return view('backend.login');

    }

    public function login(Request $request)

    {

        $request->validate([

            'email' => 'required',

            'password' => 'required'

        ]);

        $credentials = $request->only('email', 'password');



        if (Auth::attempt($credentials)) {

            if (auth()->user()->user_type == '1') {

                return redirect()->route('admin.dashboard');

            } else {

                return redirect()->route('admin')->with(['status'=>'danger','message'=>'You dont have admin access']);

            }

        }

        return  redirect()->route('admin')->with(['status'=>'danger','message'=>'Invalid Credentials']);;

    }

    public function logout()

    {



        Auth::logout();
        
        return redirect()->route('admin')->with(['status'=>'success','message'=>'Logout success']);;

    }

}

