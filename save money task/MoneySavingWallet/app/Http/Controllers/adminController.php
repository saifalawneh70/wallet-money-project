<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\admin ;
use Illuminate\Support\Facades\DB;
use Session;

class adminController extends Controller
{
   public function index(){
   	    
		if (!empty(session('admin_id'))) {
			$admin=new admin;
			$info=$admin->where('admin_id', '=', session('admin_id'))->get();
			return view('adminside/index',['info'=>$info]);
		}
		else{
			return redirect('/login-admin');
		}
	}

	public function login()
	{
		return view('adminside/login');
	}

	public function checklogin(Request $request)
	{
		$email=$request->email;
		$password=$request->password;
		$admin = DB::table('admins')
		->where('email', '=',$email )
		->where('password', '=',$password)
		->get();
		if (!empty($admin[0]->admin_id)) {
			session(['admin_id' => $admin[0]->admin_id]);
			return redirect('/home-admin');
		}
		else
		{   
			$request->session()->flash('warning', 'Email or password incorrect');
			return redirect('/login-admin');
		}
	}

    public function transaction()
    {  
      if (!empty(session('admin_id'))) {
			$admin=new admin;
			$info=$admin->where('admin_id', '=', session('admin_id'))->get();
            
            $transaction_info = DB::table('transactions')
			->get();
			$user_info = DB::table('modelusers')
			->get();
			return view('adminside/transaction',[
				'info'=>$info,
				'user_info'=>$user_info,
				'transaction_info' =>$transaction_info 
			]);
		}
		else{
			return redirect('/login-admin');
		}
      
    }

	public function logout()
	{
		session::forget('admin_id');
		return redirect('/login-admin');
	}
}
