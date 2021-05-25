<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function homeView(){
        $title="App Home";
        return view('home',compact('title'));
    }

    public function priceView(){
        $title="Price";
        return view('price',compact('title'));
    }
}
