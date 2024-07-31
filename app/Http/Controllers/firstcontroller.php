<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstcontroller extends Controller
{
    //

    public function app(){
        return view("layout.app");
    }

    public function main(){
        return view("index");
    }


}
