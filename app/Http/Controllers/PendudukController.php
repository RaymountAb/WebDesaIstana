<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatPen;
use Yajra\DataTables\DataTables;


class PendudukController extends Controller
{
    
    public function index(Request $request)
    {
        $data = [
            'title' => 'Statistik Penduduk Desa',
        ];
        if ($request->ajax()) {
            $q_statpen = StatPen::select('*')->orderBy('id');
            return DataTables::of($q_statpen)
                ->addIndexColumn()
                ->addColumn('action', function($q_statpen){
                    $btn = '<button data-toggle="tooltip" data-id="' . $q_statpen->id . '" data-original-title="Edit" class="btn btn-sm btn-primary editStatPen"> Edit </button>';
                    return $btn;
                })
                ->make(true);
        }
        return view('admin.content.statpenduduk', $data);
    }

    public function ubahStatPen(Request $request)
    {
        $id = $request->id;
        $statpen = StatPen::find($id);
        
        $statpen->update([
            'lelaki'=> $request->lelaki,
            'perempuan'=> $request->perempuan,
        ]);

        return response()->json(['success' => 'Data berhasil diambil.']);
    }

    public function edit($id)
    {
        $data = StatPen::find($id);
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $statPenduduk = StatPen::find($request->daerah_id);
        $statPenduduk->update([
            'lelaki' => $request->lelaki,
            'perempuan' => $request->perempuan,
        ]);

        return response()->json(['success' => 'Data berhasil diubah.']);
    }

}
