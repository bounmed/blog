<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index() {
        return view('admin.login');
    }
    
    public function dashboard() {
        return view('admin.dashboard');
    }
}
