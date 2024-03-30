<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class KontenController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Konten',
        ];
        if ($request->ajax()) {
            $q_konten = Post::select('*')->orderBy('id');
            return DataTables::of($q_konten)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '    <div class="btn-group " role="group" aria-label="Toolbar with button groups">
                        <div  data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="btn btn-warning btn-sm edit editKonten" data-toggle="modal"><i class="fa fa-edit"></i> Edit</div> ';
                    $btn = $btn . '  <div data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-sm btn-danger deleteKonten"><i class="fa fa-trash"></i> Delete</div> </div>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.content.konten', $data);
    }

    public function store(Request $request)
    {
        $image_name = null;
        if ($request->hasFile('kontenimg')) {
            $image = $request->file('kontenimg');
            $image_name = time() . '_kontenimg.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/konten');

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

        if ($request->konten_id) {
            $post = Post::find($request->konten_id);
        } else {
            $post = new Post();
        }

        $post->title = $request->editjudul;
        $post->content = $request->editdeskripsi;
        if ($image_name != null || $request->konten_remove) {
            if ($post->image !== null && $post->image != '') {
                $image_path = public_path('/images/konten/' . $post->image);
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            $post->image = $image_name;
        }
        $post->save();
        return response()->json(['status' => 'success', 'message' => 'Data berhasil disimpan']);
    }


    public function edit($id)
    {
        $data = Post::find($id);
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Post::find($id);
        try {
            DB::transaction(function () use ($data) {
                if ($data != null) {
                    if ($data->image != null && $data->image != '') {
                        $image_path = public_path('images/konten/' . $data->image);
                        if (File::exists($image_path)) {
                            File::delete($image_path);
                        }
                    }
                }
                $data->delete();
            });
            return response()->json(['status' => 'success', 'message' => 'Data berhasil dihapus']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
