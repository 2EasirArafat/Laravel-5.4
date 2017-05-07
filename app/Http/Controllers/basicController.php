<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basicController extends Controller
{
    //
    public function index(){
    	//return view(home);
    	return "Home From Basic controller";
    }

    public function aboutt(){
    	//return view(home);
    	return "About page from Basic contrller";
    }


    public function home(){
    	$myname="Easir Arafat";
    	$id="000088979874";
    	$phone="0284204820";
    	$address="Dinajpur";
    	return view('user',compact('myname','id','phone'))->with('address',$address);
    //	return "About page from Basic contrller";
    }
}
