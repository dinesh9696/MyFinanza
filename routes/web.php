<?php
use App\Account;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('profile','UserController@profile');

Route::post('/profile-update','UserController@update_profile');
Route::get('account','UserController@account');
Route::post('account','UserController@create_account');


Route::get('/transaction',function(){
	$user=Auth::user();
	$id=$user->id;
	$val=Account::where('user_id',$id)->count();
	
	if($val){
		return view('transaction');
			}
	else{ 
		
		return view('account');
	}
});
Route::post('/transaction','PersonalController@store');