<?php

namespace App\Http\Controllers;
use App\Models\sellsman;

use Illuminate\Http\Request;

class sells_manAPIController extends Controller
{
    public function list(){
        $sellsman = sellsman::all();
        return $sellsman;
    }
    public function create(Request $req){
        $pr = new sellsman();
        $pr->id = $req->id;
        $pr->name = $req->name;
        $pr->dob = $req->dob;
        $pr->address = $req->address;
        $pr->phone = $req->phone;
        $pr->salary = $req->salary;
        $pr->password = $req->password;
        if($pr->save()) return "Successful";
    }
}
