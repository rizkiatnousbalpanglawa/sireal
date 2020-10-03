@extends('layout.index')

@section('content')
<div class="container-fluid">
    <h3 class="mt-4">SKPD</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Satuan Kerja Perangkat Daerah</li>
    </ol>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <a href="{{ url('/skpd/add') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>username</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skpds as $skpd)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $skpd-> nama }}</td>
                            <td>{{ $skpd->uname }}</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ url('/skpd').'/'.$skpd->id }}" class="d-inline">
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