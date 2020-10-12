@extends('layout.index')

@section('content')
<div class="container-fluid">
    <h3 class="mt-4">Tahun Anggaran</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tahun Anggaran</li>
    </ol>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <a href="{{ url('/tahun-anggaran/add') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tahuns as $tahun)
                            <tr>
                                <td></td>
                                <td>{{ $tahun['tahun'] }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection