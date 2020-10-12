<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataRealisasi extends Model
{
    protected $fillable = ['skpd_id', 'pimpinanSkpd_id', 'pptk_id', 'tahun_anggaran_id', 'kegiatan', 'nilai_pagu', 'nilai_hps', 'nilai_kontrak', 'metode_id', 'jumlah_realisasi_keuangan', 'jumlah_realisasi_fisik', 'perusahaan_penyedia', 'pimpinan_penyedia', 'keterangan'];
}
