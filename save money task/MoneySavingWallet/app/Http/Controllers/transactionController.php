<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use DateTime;


use App\subCategory;
use App\transaction;
use App\modelusers;

class transactionController extends Controller
{
    public function index()
    {    
    	if (!empty(session('user_id'))) 
    	{
    		return view('/userside/transaction');
    	}
    	else
    	{
    		return redirect('/login');
    	}
    }

    public function store(Request $request)
    {
        $request->validate([
            'CategoryName' => 'required',
            'SubCategoryName'  => 'required',
            'Amount'  => 'required',
        ]);
        if($request->CategoryName==1)
        {  
            $user_info = DB::table('modelusers')
            ->where('user_id','=',session('user_id'))
            ->get();
            $last_current_balance=$request->Amount+$user_info[0]->current_balance;
            $user = DB::table('modelusers')
            ->where('user_id','=',session('user_id'))
            ->update(['current_balance' =>$last_current_balance]);
            $trans=new transaction;
            $trans->subcategory_id=$request->SubCategoryName;
            $trans->category_id=$request->CategoryName;
            $trans->user_id=session('user_id');
            $trans->note=$request->note;
            $trans->amount=$request->Amount;
            $date=new DateTime();
            $trans->date=$date->format('Y-m-d');
            $trans->save();
            $request->session()->flash('completeProcesses1', 'Your transaction successful');
            return redirect('/transaction');
        }
        elseif ($request->CategoryName==2) 
        {
          $user_info = DB::table('modelusers')
          ->where('user_id','=',session('user_id'))
          ->get();
          if ($request->Amount<$user_info[0]->current_balance)
          {
            $last_current_balance=$user_info[0]->current_balance-$request->Amount;
            $user = DB::table('modelusers')
            ->where('user_id','=',session('user_id'))
            ->update(['current_balance' =>$last_current_balance]);
            $trans=new transaction;
            $trans->subcategory_id=$request->SubCategoryName;
            $trans->category_id=$request->CategoryName;
            $trans->user_id=session('user_id');
            $trans->note=$request->note;
            $trans->amount=$request->Amount;
            $date=new DateTime();
            $trans->date=$date->format('Y-m-d');
            $trans->save();
            $request->session()->flash('completeProcesses2', 'Your transaction successful');
            return redirect('/transaction');
          }
          else
          {
           $request->session()->flash('amount', 'Your current balance less than the Amount');
           return redirect('/transaction');
          }
        }

}

}