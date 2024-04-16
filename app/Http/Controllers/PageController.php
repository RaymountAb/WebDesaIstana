<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
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
        $dataTaruna = Organisasi::where('nama', 'Karang Taruna')->get(); 
        return view('content.karangtaruna', ['dataTaruna' => $dataTaruna]);
    }

    public function pkk()
    {
        $dataPkk = Organisasi::where('nama', 'PKK Desa')->get();
        return view('content.pkk', ['dataPkk' => $dataPkk]);
    }

    public function posyandu()
    {
        $dataPosyandu = Organisasi::where('nama', 'Posyandu Permata Bunda')->get();
        return view('content.posyandu', ['dataPosyandu' => $dataPosyandu]);
    }

    public function bpddesa()
    {
        $dataBpd = Organisasi::where('nama', 'BPD Desa')->get();
        return view('content.bpd', ['dataBpd' => $dataBpd]);
    }

    public function bumdes()
    {
        $dataBumdes = Organisasi::where('nama', 'BumDes')->get();
        return view('content.bumdes', ['dataBumdes' => $dataBumdes]);
    }
}
