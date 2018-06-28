<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Organization;
use Illuminate\Http\Request;
use App\Apply;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
}
