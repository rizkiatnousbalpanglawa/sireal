<?php

namespace App\Http\Controllers;

use App\DataRealisasi;
use App\Metode;
use App\Pimpinan;
use App\PPTK;
use App\SKPD;
use App\TahunAnggaran;
use Illuminate\Http\Request;

class DataRealisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatans = DataRealisasi::all();
        return view('dataRealisasi.index', ['kegiatans' => $kegiatans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skpd = SKPD::all();
        $pimpinan = Pimpinan::all();
        $tahun = TahunAnggaran::all()->sortByDesc('tahun');
        $pptks = PPTK::all();
        $metodes = Metode::all();

        return view('dataRealisasi.create', ['dataskpds' => $skpd, 'datapimpinans' => $pimpinan, 'tahun' => $tahun, 'pptks' => $pptks, 'metodes' => $metodes]);
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
            'skpd_id' => 'required',
            'pimpinanSkpd_id' => 'required',
            'pptk_id' => 'required',
            'tahun_anggaran_id' => 'required',
            'kegiatan' => 'required',
            'nilai_pagu' => 'required',
            'nilai_hps' => 'required',
            'nilai_kontrak' => 'required',
            'metode_id' => 'required',
            'jumlah_realisasi_keuangan' => 'required',
            'jumlah_realisasi_fisik' => 'required',
            'perusahaan_penyedia' => 'required',
            'pimpinan_penyedia' => 'required',
            'keterangan' => 'required',
        ]);

        DataRealisasi::create($request->all());
        return redirect('/data-realisasi')->with('status', 'Data Realisasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataRealisasi  $dataRealisasi
     * @return \Illuminate\Http\Response
     */
    public function show(DataRealisasi $dataRealisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataRealisasi  $dataRealisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(DataRealisasi $dataRealisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataRealisasi  $dataRealisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataRealisasi $dataRealisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataRealisasi  $dataRealisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataRealisasi $dataRealisasi)
    {
        //
    }
}
