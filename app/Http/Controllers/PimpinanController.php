<?php

namespace App\Http\Controllers;

use App\Pimpinan;
use Illuminate\Http\Request;

class PimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pimpinan = Pimpinan::all() ;
        return view('pimpinanSKPD.index',['pimpinans' => $pimpinan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pimpinanSKPD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function show(Pimpinan $pimpinan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pimpinan $pimpinan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pimpinan $pimpinan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pimpinan $pimpinan)
    {
        //
    }
}
