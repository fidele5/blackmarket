<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->take(8)->get();
        return view('welcome')->with('articles', $articles);
    }

    public function login()
    {
        return view("auth");
    }

    public function contact()
    {
        return view('admin.contact');
    }

    public function calendar(){
        return view('admin.calendar');
    }
}
