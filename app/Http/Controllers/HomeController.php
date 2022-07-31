<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $dataTrain = Train::all();
        return view("home", [
            "trains" =>$dataTrain
        ]);
    }
}
