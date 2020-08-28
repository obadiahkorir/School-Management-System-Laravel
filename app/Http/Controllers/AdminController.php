<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;

class AdminController extends Controller
{
    
    public function AdminView()
    {   
        return view('admindashboard');
    }

}
