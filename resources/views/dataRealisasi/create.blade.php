@extends('layout.index')

@section('content')
<div class="container-fluid">
    <div>
        <h3 class="mt-4">Tambah Data Realisasi</h3>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Data Realisasi</li>
            <li class="breadcrumb-item active">Tambah Data Realisasi</li>
        </ol>
    </div>


    <form method="POST" action="/data-realisasi" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="card rounded-2 shadow-sm mb-4">
                    <div class="card-header bg-blue text-white rounded-top-2">
                        Data Umum
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">SKPD</label>
                                    <select name="skpd_id" id="" class="custom-select">
                                        @foreach ($dataskpds as $data)
                                        <option value="{{$data['id']}}">{{ $data['nama'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Pimpinan SKPD</label>
                                    <select name="pimpinanSkpd_id" id="" class="custom-select">
                                        @foreach ($datapimpinans as $datapimpinan)
                                        <option value="{{$datapimpinan['id']}}" selected>{{ $datapimpinan['nip'] . " - ". $datapimpinan['pimpinan']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Tahun Anggaran</label>
                                    <select name="tahun_anggaran_id" class="custom-select">
                                        @foreach ($tahun as $data)
                                        <option value="{{ $data['id'] }}">{{ $data['tahun'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">PPK / PPTK</label>
                                    <select name="pptk_id" class="custom-select">
                                        @foreach ($pptks as $pptk)
                                        <option value="{{ $pptk['id'] }}">{{ $pptk['nip'] . " - " .$pptk['nama_pptk'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kegiatan</label>
                            <textarea name="kegiatan" id="" cols="30" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Metode Pengadaan</label>
                            <select name="metode_id" id="" class="custom-select">
                                @foreach ($metodes as $metode)
                            <option value="{{ $metode['id'] }}">{{ $metode['metode'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <h4 class="font-weight-bold">Penyedia</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">PT / CV</label>
                                    <input type="text" name="perusahaan_penyedia" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Pimpinan</label>
                                    <input type="text" name="pimpinan_penyedia" id="" class="form-control">
                                </div>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label for="">Keterangan Tambahan</label>
                            <input type="text" name="keterangan" id="" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card rounded-2 shadow-sm">
                    <div class="card-header bg-blue text-white rounded-top-2">
                        Data Nilai
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nilai Pagu (Rp)</label>
                                    <input type="number" name="nilai_pagu" id="nilaiPagu" class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nilai HPS</label>
                                    <input type="number" name="nilai_hps" id="" class="form-control">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nilai Kontrak (Rp)</label>
                                    <input type="number" name="nilai_kontrak" id="" class="form-control">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-2 shadow-sm mt-4">
                    <div class="card-header bg-blue text-white rounded-top-2">
                        Data Realisasi
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="">Realisasi Keuangan</label>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control rounded-0" aria-label="Username"
                                            aria-describedby="basic-addon1" id="persenRealisasiKeuangan">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" name="jumlah_realisasi_keuangan" id="totalRealisasiKeuangan" class="form-control rounded-0" readonly>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="">Realisasi Fisik</label>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control rounded-0" aria-label="Username"
                                            aria-describedby="basic-addon1"
                                            id="persenRealisasiFisik">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" name="jumlah_realisasi_fisik" id="totalRealisasiFisik" class="form-control rounded-0" readonly>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="form-group mt-4 text-right">
                    <button class="btn" type="submit"><i class="fas fa-arrow-left"></i> Kembali</button>
                    <button class="btn btn-primary rounded-0 shadow" type="submit"><i class="fas fa-save"></i> Simpan</button>
                </div>
              
            </div>
        </div>

    </form>

</div>
@endsection

@section('script')
<script>
    $('#persenRealisasiKeuangan').on('input',function () {
        var nilaipagu = parseFloat(document.getElementById('nilaiPagu').value);
        $('#persenRealisasiKeuangan').each(function () {
            var input = $(this).val();
            if($.isNumeric(input)){
              var persentase = nilaipagu * parseFloat(input) / 100;
              nilaipagu = nilaipagu - persentase;
            }
        });
        document.getElementById('totalRealisasiKeuangan').value = nilaipagu;
    });
    $('#persenRealisasiFisik').on('input',function () {
        var nilaiPagu = parseFloat(document.getElementById('nilaiPagu').value);
        $('#persenRealisasiFisik').each(function () {
            var input = $(this).val();
            if($.isNumeric(input)){
              var persentase = nilaiPagu * parseFloat(input) / 100;
              nilaiPagu = nilaiPagu - persentase;
            }
        });
        document.getElementById('totalRealisasiFisik').value = nilaiPagu;
    })
</script>
@endsection