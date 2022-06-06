<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;


class LoginController extends Controller
{
    public function destroy(Login $login)
    {
        //
    }

    public function Login(){
        return view('pages.login.list');
    }
    public function loginCheck(Request $request){
        $this->validate(
            $request,
            [
                
                'name'=> 'required',
                'password'=>'required'
            ],
            [
                'name.required'=> 'Please Enter your name',

                'password.required'=> 'Please Enter your password',
                
            ]
           
        );
    }

    public function handle(Request $request, Closure $next)
    {
        if(session()->has('user') || isset($_COOKIE['remember'])){
            return $next($request);
        }
        return redirect()->route('login');
        
    }


    public function loginSubmit(Request $request){
        $admin = Admin::where('name',$request->name)
                            ->where('password',$request->password)
                            ->first();
        //dd($admin);

        //return $admin;
        if($admin){
            $request->session()->put('user',$admin->name);
            //dd(session()->get('user'));
            // return redirect()->route('adminWelcome');
        }
        return 'successfull';
        // return back();
        //return "muta";
    }

    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
    
}
