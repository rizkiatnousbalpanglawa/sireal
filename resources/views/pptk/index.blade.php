@extends('layout.index')

@section('content')
<div class="container-fluid">
    <h3 class="mt-4">Pejabat Pelaksana Teknis Kegiatan</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">PPK / PPTK</li>
    </ol>

    <div class="card">
        <div class="card-body">
            <a href="{{ url('/pptk/add') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pptks as $pptk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pptk->nip }}</td>
                            <td>{{ $pptk->nama_pptk }}</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ url('/pptk').'/'.$pptk->id }}" class="d-inline">
                                    <button href="" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
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