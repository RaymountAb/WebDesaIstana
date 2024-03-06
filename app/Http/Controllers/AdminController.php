<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.content.dashboard');
    }
    public function konten()
    {
        return view('admin.content.konten');
    }
}
