<?php

namespace App\Http\Controllers;

use App\Models\catatan;
use App\Http\Requests\StorecatatanRequest;
use App\Http\Requests\UpdatecatatanRequest;

class CatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        public function index(){
            return view ('catatan');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecatatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecatatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function show(catatan $catatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function edit(catatan $catatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecatatanRequest  $request
     * @param  \App\Models\catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecatatanRequest $request, catatan $catatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(catatan $catatan)
    {
        //
    }
}