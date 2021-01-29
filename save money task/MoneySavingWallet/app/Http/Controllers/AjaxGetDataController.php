<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\subCategory ;

class AjaxGetDataController extends Controller
{
	public function index()
	{
		return view('transaction');
	}
	public function giveData(Request $request)
	{
		$subcate =new subCategory;
		$info=$subcate
        ->where('category_id', '=', $request->cat_id)
        ->where('user_id', '=', session('user_id'))
        ->get();
        $result='<option></option>';
        foreach ($info as $v) {
            $result.="<option value=".$v['subcategory_id'].">".$v['subcategory_name']."</option>";
        }
        return $result;
	}
}
