@extends('layout.index')

@section('content')
<div class="container-fluid">
    <h3 class="mt-4">Data Realisasi Kegiatan</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data Realisasi</li>
    </ol>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <a href="{{ url('/data-realisasi/add') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="float-right">
                        <form action="" method="post" class="form-inline">
                            <select name="" class="custom-select mr-2">
                                <option value="">--SKPD--</option>
                            </select>
                            <select name="" class="custom-select">
                                <option value="">2020</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered dataTable-nosearch">
                    <thead>
                        <tr>
                            <th>SKPD</th>
                            <th>Kegiatan</th>
                            <th>Nilai Pagu (Rp)</th>
                            <th>Metode</th>
                            <th>PT/CV</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kegiatans as $kegiatan)
                            <tr>
                                <td>{{ $kegiatan['skpd_id'] }}</td>
                                <td>{{ $kegiatan['kegiatan'] }}</td>
                                <td>{{ number_format($kegiatan['nilai_pagu']) }}</td>
                                <td>{{ $kegiatan['metode_id'] }}</td>
                                <td>{{ $kegiatan['perusahaan_penyedia'] }}</td>
                                <td>
                                    <a href="" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

