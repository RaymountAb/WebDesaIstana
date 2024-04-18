<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatPen;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalLelaki = StatPen::sum('lelaki');
        $totalPerempuan = StatPen::sum('perempuan');
        
        return view('admin.content.dashboard', compact('totalLelaki', 'totalPerempuan'));
    }
}
