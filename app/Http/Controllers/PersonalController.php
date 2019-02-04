<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Personal;

class PersonalController extends Controller
{
    public function index()
    {
    	return view('transaction');
    }
    public function store(Request $request)
    {
    	$user=Auth::user();
        $id=$user->id;
        $transaction=array(
        		'user_id'=>$id,
        		'date'=>$request->date,
        		'category'=>$request->category,
        		'amount'=>$request->amount,
        		'notes'=>$request->notes
        );
        Personal::insert($transaction);
        return redirect()->back();
    }
}
