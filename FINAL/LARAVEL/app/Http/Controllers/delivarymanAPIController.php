<?php

namespace App\Http\Controllers;
use App\Models\delivaryman;
use Illuminate\Http\Request;

class delivarymanAPIController extends Controller
{
    public function list(){
        $delivaryman = delivaryman::all();
        return $delivaryman;
    }
    public function create(Request $req){
        $pr = new delivaryman();
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
