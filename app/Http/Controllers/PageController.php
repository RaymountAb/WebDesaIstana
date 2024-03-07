<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('content.home');
    }

    public function lapak()
    {
        return view('content.lapak');
    }

    public function peta()
    {
        return view('content.peta');
    }

    public function struktur()
    {
        return view('content.struktur');
    }

    public function visimisi()
    {
        return view('content.visimisi');
    }

    public function profil()
    {
        return view('content.profil');
    }

    public function sejarah()
    {
        return view('content.sejarah');
    }

    public function status()
    {
        $data = [
            'IKS' => 0.806,
            'IKE' => 0.8,
            'IKL' => 0.867
        ];
        return view('content.status-idm', compact('data'));
    }

    public function prodhuk()
    {
        return view('content.produk-hukum');
    }

    public function inpub()
    {
        return view('content.informasi-publik');
    }
}
