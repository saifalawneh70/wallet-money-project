<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\modelusers ;
use Session;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
	public function index(){
		return view('index');
	}
	public function viewregister()
	{
		return view('register');
	}
	public function store(Request $request){
		$request->validate([
			'uname' => 'required|max:100|string',
			'uemail' => 'required|email',
			'uemail' => "unique:modelusers,email",
			'upassword' => 'required|min:8|regex:((?=.*\d)(?=.*[a-zA-Z]))',
			'countrycode' => 'required',
			'uphone' => 'required|unique:modelusers,phone',
			'WalletCurrency' => 'required|string',
			'birthdate' => 'required',
			'upload_file' => 'required|max:5000',

		]);
		$image= time().'.'.$request->upload_file->extension();
		$request->file('upload_file')->move(public_path('images/users'), $image);
		
		$user=new modelusers;
		$user->name=$request->uname;
		$user->email=$request->uemail;
		$user->password=$request->upassword;
		$user->phone=$request->uphone;
		$user->countrycode="(".$request->countrycode.")-";
		$user->birthdate=$request->birthdate;
		$user->wallet_currency=$request->WalletCurrency;
		$user->current_balance=0;
		$user->image=$image;
		$user->save();
		$request->session()->flash('success', 'registeration successful!');
		return redirect('/register');
	}
	public function checkLogin(Request $request)
	{   
		$user=new modelusers;
		$email=$request->uemail;
		$password=$request->upassword;
		$users = DB::table('modelusers')
		->where('email', '=',$email )
		->where('password', '=',$password )
		->get();
		if (!empty($users[0]->user_id)) {
			session(['user_id' => $users[0]->user_id]);
			return redirect('/trans_processes');
		}
		else
		{   
			$request->session()->flash('warning', 'Email or password incorrect');
			return redirect('/login');
		}
	}
	public function returnLogin()
	{
		return view('/login');
	}
	public function userTransfer(){
		$user=new modelusers;
		if (!empty(session('user_id'))) {
			$info=$user->where('user_id', '=', session('user_id'))->get();
			return view('/userside/trans_processes',['info'=>$info]);
		}
		else{
			return redirect('/login');
		}
	}
    
	public function logout()
	{
		session::forget('user_id');
		return redirect('/');
	} 

}
