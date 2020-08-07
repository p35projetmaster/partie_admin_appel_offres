<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('site.pages.index');
    }
    public function abonnement(){
        return view('site.pages.abonner');
    }
    public function contact(){
        return view('site.pages.contact');
    }
    public function points_de_ventes(){
        return view('site.pages.points_de_vente');
    }
}
