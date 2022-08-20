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
        return new CatatanResource(true, 'Data Catatan Berhasil Ditambahkan!', $catatan);
    }
    public function show(Catatan $catatan)
    {
        //return single post as a resource
        return new CatatanResource(true, 'Data catatan Ditemukan!', $catatan);
    }
    public function update(Request $request, catatan $catatan)
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

        //check if image is not empty
        if ($request->hasFile('image')) {

            //update post with new image
            $catatan->update([
                'tanggal'     => $request->tanggal,
                'waktu'   => $request->waktu,
                'lokasi'     => $request->lokasi,
                'suhutubuh'   => $request->suhutubuh,
            ]);
        } else {

            //update post without image
            $catatan->update([
                'tanggal'     => $request->tanggal,
                'waktu'   => $request->waktu,
                'lokasi'     => $request->lokasi,
                'suhutubuh'   => $request->suhutubuh,
            ]);
        }

        //return response
        return new CatatanResource(true, 'Data Post Berhasil Diubah!', $catatan);
    }
    public function destroy(Catatan $catatan)
    {

        //delete post
        $catatan->delete();

        //return response
        return new CatatanResource(true, 'Data Catatan Berhasil Dihapus!', null);
    }
}