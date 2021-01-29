<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class chartController extends Controller
{
	public function index()
	{   

		if (!empty(session('user_id'))) 
		{   
			$nowdate = Carbon::now()->format('Y-m-d');
			$total_daily=DB::table('transactions')
			->whereDate('created_at','=',$nowdate)
			->where('user_id','=',session('user_id'))
			->sum('amount');
			
			$total_monthly=DB::table('transactions')
			->where('user_id','=',session('user_id'))
			->whereYear('created_at', '=', date('Y'))
			->whereMonth('created_at', '=', date('m'))
			->sum('amount');
			
			$total_annual=DB::table('transactions')
			->where('user_id','=',session('user_id'))
			->whereYear('created_at', '=', date('Y'))
			->sum('amount');
			
			return view('userside/chart', [
				'final_total_daily'=>$total_daily,
				'final_total_monthly'=>$total_monthly,
				'final_total_annual'=>$total_annual
			]);
		}
		else
		{
			return redirect('/login');
		}

	}
}
