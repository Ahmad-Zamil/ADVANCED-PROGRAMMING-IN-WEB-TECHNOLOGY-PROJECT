<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function adminWelcome()
    {
        return view('pages.admin.adminWelcome');
    }
    public function delivarymanWelcome()
    {
        return view('pages.delivaryman.delivarymanWelcome');
    }
    public function sells_manWelcome()
    {
        return view('pages.sells_man.sells_manWelcome');
    }
}
