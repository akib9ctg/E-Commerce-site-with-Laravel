<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
    	return view("pages.login");
    }
    public function dashboard(){
    	return view("admin_layout");
    }
}
