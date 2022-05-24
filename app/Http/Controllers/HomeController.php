<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Auth::logout();
        return view('teacher.adminlogin');
    }
    
    public function adminaddinfo(){
        return view('admin.admin_add_melon_info');
    }
    public function admindashboard(){
        return view('admin.admindashboard');
    }

}
