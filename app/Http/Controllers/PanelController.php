<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
     public function home(){
     	
        return view('site.admin.home');
    }

     public function archive(){
        return view('site.admin.archive');
    }

    public function importation(){
    	$insert_data[]=0;
        return view('site.admin.importation')->with('insert_data',$insert_data);
    }


}
