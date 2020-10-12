<?php

namespace App\Http\Controllers;

use App\TahunAnggaran;
use Illuminate\Http\Request;

class TahunAnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TahunAnggaran::all();
        return view('tahunAnggaran.index',['tahuns' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tahunAnggaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required'
        ]);

        TahunAnggaran::create($request->all());

        return redirect('/tahun-anggaran')->with('status','Tahun Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TahunAnggaran  $tahunAnggaran
     * @return \Illuminate\Http\Response
     */
    public function show(TahunAnggaran $tahunAnggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TahunAnggaran  $tahunAnggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(TahunAnggaran $tahunAnggaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TahunAnggaran  $tahunAnggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahunAnggaran $tahunAnggaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TahunAnggaran  $tahunAnggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahunAnggaran $tahunAnggaran)
    {
        //
    }
}
