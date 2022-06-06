<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\contuctus;

class contuctus extends Controller
{
    public function delivarymanCreate(){
        return view('pages.delivaryman.delivarymanCreate');
    }
}
