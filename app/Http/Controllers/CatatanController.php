<?php

namespace App\Http\Controllers;

use App\Models\catatan;

use Illuminate\Http\Request;

class CatatanController extends Controller{
    public function index(){

        $data = Catatan::all();
        return view('datacatatan' ,compact('data'));
        
    }
    public function tambahcatatan(){
        return view('tambahcatatan');
    }

    public function insertdata(Request $request){
    
        Catatan::create([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'suhutubuh' => $request->suhutubuh,
        ]);

    return redirect()->route('catatan');    
    }
   }
 