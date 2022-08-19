<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\catatan;
use App\Http\Resources\CatatanResource;
use Illuminate\Support\Facades\Validator;

class CatatanController extends Controller
{
    public function index()
    {
        //get posts
        $catatan = Catatan::latest()->paginate(5);

        //return collection of posts as a resource
        return new CatatanResource(true, 'List Data Catatan', $catatan);
    }
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'tanggal'     => 'required',
            'waktu'     => 'required',
            'lokasi'   => 'required',
            'suhutubuh'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        //create post
        $catatan = Catatan::create([
            'tanggal'     => $request->tanggal,
            'waktu'   => $request->waktu,
            'lokasi'     => $request->lokasi,
            'suhutubuh'   => $request->suhutubuh,
        ]);

        //return response
        return new CatatanResource(true, 'Data Post Berhasil Ditambahkan!', $catatan);
    }
    public function show(Post $post)
    {
        //return single post as a resource
        return new CatatanResource(true, 'Data Post Ditemukan!', $catatan);
    }

    public function update(Request $request, Post $catatan)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'tanggal'     => 'required',
            'waktu'     => 'required',
            'lokasi'   => 'required',
            'suhutubuh'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //return response
        return new CatatanResource(true, 'Data Post Berhasil Diubah!', $catatan);
    }

    public function destroy(Post $post)
    {
        //delete image
        Storage::delete('public/catatans/'.$post->image);

        //delete post
        $catatan->delete();

        //return response
        return new CatatanResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}