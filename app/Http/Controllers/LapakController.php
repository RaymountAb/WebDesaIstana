<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lapak;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LapakController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Lapak',
        ];
        if ($request->ajax()){
            $q_lapak = Lapak::select('*')->orderBy('id');
            return DataTables::of($q_lapak)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '    <div class="btn-group " role="group" aria-label="Toolbar with button groups">
                        <div  data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-warning btn-sm edit editLapak" data-toggle="modal"><i class="fa fa-edit"></i> Edit</div> ';
                    $btn = $btn . '  <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-danger deleteLapak"><i class="fa fa-trash"></i> Delete</div> </div>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.content.lapak', $data);
    }

    public function store(Request $request)
    {
        $image_name = null;
        if ($request->hasFile('produkimg')) {
            $image = $request->file('produkimg');
            $image_name = time() . '_produkimg.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/produk');

            // Resize image using GD Library
            $resized_image = imagecreatefromjpeg($image->getRealPath());
            $new_width = 800;
            $new_height = 800;
            list($width, $height) = getimagesize($image->getRealPath());
            $resized_image_tmp = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($resized_image_tmp, $resized_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($resized_image_tmp, $destinationPath . '/' . $image_name, 100);
            imagedestroy($resized_image_tmp);
            imagedestroy($resized_image);
        }

        if ($request->lapak_id) {
            $lapak = Lapak::find($request->lapak_id);
        } else {
            $lapak = new Lapak();
        }

        $lapak->name = $request->editnama;
        $lapak->harga = $request->editharga;
        $lapak->description = $request->editdeskripsi;
        $lapak->link = $request->editlink;
        $lapak->map = $request->editmaps;
        if ($image_name != null || $request->produk_remove) {
            if ($lapak->image !== null && $lapak->image != '') {
                $image_path = public_path('/images/produk/' . $lapak->image);
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            $lapak->image = $image_name;
        }
        $lapak->save();

        return response()->json(['success' => 'Data berhasil disimpan.']);

    }

    public function edit($id)
    {
        $data = Lapak::find($id);
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Lapak::find($id);
        try{
            DB::transaction(function() use ($data){
                if($data != null){
                    if($data->image != null && $data->image != ''){
                        $image_path = public_path('images/lapak/'.$data->image);
                        if(File::exists($image_path)){
                            File::delete($image_path);
                        }
                    }
                    $data->delete();
                }
            });
            return response()->json(['success' => 'Data berhasil dihapus.']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
