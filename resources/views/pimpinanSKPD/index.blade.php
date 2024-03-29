@extends('layout.index')

@section('content')
<div class="container-fluid">
    <h3 class="mt-4">Pimpinan SKPD</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pimpinan SKPD</li>
    </ol>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <a href="{{ url('/pimpinan-skpd/add') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Lengkap</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pimpinans as $pimpinan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pimpinan->nip }}</td>
                            <td>{{ $pimpinan -> pimpinan }}</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ url('/pimpinan-skpd').'/'.$pimpinan->id }}" class="d-inline">
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