<?php

namespace App\Http\Controllers;

use App\PPTK;
use Illuminate\Http\Request;

class PPTKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pptk = PPTK::all();
        return view('pptk.index', ['pptks' => $pptk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pptk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'nip' => 'required | numeric',
            'nama_pptk' => 'required'
        ]);

        PPTK::create($request->all());
        return redirect('/pptk')->with('status','PPTK berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PPTK  $pPTK
     * @return \Illuminate\Http\Response
     */
    public function show(PPTK $pPTK)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PPTK  $pPTK
     * @return \Illuminate\Http\Response
     */
    public function edit(PPTK $pPTK)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PPTK  $pPTK
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PPTK $pPTK)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PPTK  $pPTK
     * @return \Illuminate\Http\Response
     */
    public function destroy(PPTK $pPTK)
    {
        //
    }
}
