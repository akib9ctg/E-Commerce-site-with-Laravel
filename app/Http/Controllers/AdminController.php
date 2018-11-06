<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use App\Http\Requests;
use DB;
use Session;
Session_start();
class AdminController extends Controller
{
    //
    public function index(){
    	return view("pages.login");
    }
    public function dashboard(Request $request){
    	$userEmail=$request->adminEmail;
    	$userPassword=($request->adminPassword);
    	$result=DB::table('users')
    				->where('email',$userEmail)
    				->where('password',$userPassword)
    				->first();
    				

    			if($result){
    				Session::put('userName',$result->name);
    				return view("admin_layout");
    			}else{
    				Session::put('message','Invalid Email or Password');
    				return Redirect::to('/admin');
    			}

    }

}
