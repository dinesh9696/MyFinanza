<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Account;
class UserController extends Controller
{
    //Add Profile Image
    public function profile()
    {
    	return view('profile',array('user'=>Auth::user()));
    }
    public function update_profile(Request $request)
    {
    	if($request->hasFile('dp')){
	$avatar=$request->file('dp');
	$filename=time().'.'.$avatar->getClientOriginalExtension();
	Image::make($avatar)->resize(300,300)->save(public_path('uploads/profile/'.$filename));
	$user=Auth::user();
	$user->image=$filename;
	$user->save();
    }
    return view('profile',array('user'=>Auth::user()));
    }
    //Create Account
    public function account(){
        return view('account',array('user'=>Auth::user()));
    }
    public function create_account(Request $request)
    {
        $user=Auth::user();
        $id=$user->id;
        
        $account=array(
            'user_id'=>$id,
            'accounttype'=>$request->type
        );
        $val=Account::where('user_id',$id)->count();
        //return $val;
       if($val<3){
        Account::insert($account);
        $request->session()->flash('alert-success','Account Created Successfully');
        return view('home');
       }else{ 
            $request->session()->flash('alert-danger','Reached your maximum account limit');
            return view('home');
       
    }
    
}
}
