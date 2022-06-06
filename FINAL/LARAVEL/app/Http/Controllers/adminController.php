<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function adminCreate(){
        return view('pages.admin.adminCreate');
    }
    public function adminCreateSubmitted(Request $request){
        $admin = new admin();
        $admin->name = $request->name;
        $admin->phone = $request->phone;
        $admin->password = $request->password;
        $admin->save();
        return redirect()->route('adminList');

    }
    public function adminList(){
        $admins = admin::all();
        return view('pages.admin.adminList')->with('admins', $admins);
    }
    public function adminCourses(Request $request){

        $t = admin::where('id',$request->id)->first();
        // return $t->id;
        //hasmany
        // return $t->courses;

        //eloquent
        return $t->assignedCourses();
    }
    public function signout()
    {
        //return 'dip';
        session()->flush();
        return redirect('home');
    }
}
