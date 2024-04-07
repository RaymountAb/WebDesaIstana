<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisasi;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;

class OrganisasiController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Organisasi',
        ];
        if ($request->ajax()) {
            $q_organisasi = Organisasi::select('*')->orderBy('id');
            return DataTables::of($q_organisasi)
                ->addIndexColumn()
                ->addColumn('action', function ($q_organisasi) {
                    $btn = '<button data-toggle="tooltip" data-id="' . $q_organisasi->id . '" data-original-title="Edit" class="btn btn-sm btn-primary editOrganisasi"> Edit </button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.content.organisasi', $data);
    }

    public function store(Request $request)
    {
        $image_sotk = null;
        if ($request->hasFile('sotkimg')) {
            $image = $request->file('sotkimg');
            $image_sotk = time() . '_sotkimg.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/organisasi');

            // Resize image using GD Library
            $resized_image = imagecreatefromjpeg($image->getRealPath());
            $new_width = 800;
            $new_height = 800;
            list($width, $height) = getimagesize($image->getRealPath());
            $resized_image_tmp = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($resized_image_tmp, $resized_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($resized_image_tmp, $destinationPath . '/' . $image_sotk, 100);
            imagedestroy($resized_image_tmp);
            imagedestroy($resized_image);
        }

        $image_anggota = null;
        if ($request->hasFile('anggotaimg')) {
            $image = $request->file('anggotaimg');
            $image_anggota = time() . '_anggotaimg.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/organisasi');

            // Simpan gambar tanpa perubahan ukuran
            $image->move($destinationPath, $image_anggota);
        }

        $organisasi = Organisasi::find($request->organisasi_id);
        if ($image_sotk != null || $request->sotk_remove) {
            if ($organisasi->sotk !== null && $organisasi->sotk != '') {
                $image_path = public_path('/images/organisasi/' . $organisasi->sotk);
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            $organisasi->sotk = $image_sotk;
        }
        if ($image_anggota != null || $request->anggota_remove) {
            if ($organisasi->anggota !== null && $organisasi->anggota != '') {
                $image_path = public_path('/images/organisasi/' . $organisasi->anggota);
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            $organisasi->anggota = $image_anggota;
        }

        $organisasi->save();

        return response()->json(['success' => 'Data berhasil diambil.']);
    }

    public function edit($id)
    {
        $organisasi = Organisasi::find($id);
        return response()->json($organisasi);
    }
}
