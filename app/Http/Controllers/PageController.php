<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\StatPen;

class PageController extends Controller
{
    public function index()
    {
        $dataPenduduk = StatPen::all();
        $posts = Post::latest()->take(6)->get();
        return view('content.home', ['dataPenduduk' => $dataPenduduk], ['posts' => $posts]);
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

    // public function prodhuk()
    // {
    //     return view('content.produk-hukum');
    // }

    // public function inpub()
    // {
    //     return view('content.informasi-publik');
    // }

    public function taruna()
    {
        return view('content.karangtaruna');
    }

    public function pkk()
    {
        return view('content.pkk');
    }

    public function posyandu()
    {
        return view('content.posyandu');
    }

    public function bpddesa()
    {
        return view('content.bpd');
    }

    public function bumdes()
    {
        return view('content.bumdes');
    }
}
