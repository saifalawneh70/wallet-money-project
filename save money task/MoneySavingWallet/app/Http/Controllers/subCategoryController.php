<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\subCategory ;

class subCategoryController extends Controller
{
	public function index()
	{  
	 if (!empty(session('user_id')))
	  { 
	  	$subcat=new subCategory;
	  	$subcat_info=$subcat
	  	->where('user_id', '=', session('user_id'))
        ->get();;
		return view('/userside/subcategory',[
			'subcat_info'=>$subcat_info
		]);
	  }
	  else
	  {
		return redirect('/login');
	  }
}

public function store(Request $request)
{
	$request->validate([
		'SubCategoryName' => 'required',
		'CategoryName'  => 'required',
	]);
	$subcat=new subCategory;
	$subcat->user_id=session('user_id');
	$subcat->subcategory_name=$request->SubCategoryName;
	$subcat->category_id=$request->CategoryName;
	$subcat->save();
	$request->session()->flash('successadded', 'create successful!');
	return redirect('/add-sub-cat');
}

}
