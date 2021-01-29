<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class summaryController extends Controller
{
	public function index()
	{   

		if (!empty(session('user_id'))) 
		{   
			$user_info = DB::table('modelusers')
            ->where('user_id','=',session('user_id'))
            ->get();
			$transaction_info = DB::table('transactions')
			->where('user_id','=',session('user_id'))
			->get();
			$subcat_info = DB::table('sub_categories')
			->where('user_id','=',session('user_id'))
			->get();
			$total_income=DB::table('transactions')->where('category_id','=',1)->where('user_id','=',session('user_id'))->sum('amount');
			$total_expenses=DB::table('transactions')->where('category_id','=',2)->where('user_id','=',session('user_id'))->sum('amount');	
			return view('userside/summary',[
            'transaction_info'=>$transaction_info,
            'user_info' =>$user_info,
            'subcat_info' =>$subcat_info,
            'total_income' =>$total_income,
            'total_expenses' =>$total_expenses
			]);
		}
		else
		{
			return redirect('/login');
		}

	}
}
