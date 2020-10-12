@extends('layout.index')

@section('content')
<div class="container-fluid">
    <div>
        <h3 class="mt-4">Tambah Pimpinan SKPD</h3>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Pimpinan SKPD</li>
            <li class="breadcrumb-item active">Tambah Pimpinan SKPD</li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="/pimpinan-skpd" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">NIP</label>
                    <input type="number" name="nip" placeholder="NIP"
                        class="form-control @error('nip') is-invalid @enderror">
                    @error('nip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="pimpinan" placeholder="Nama Lengkap"
                        class="form-control @error('pimpinan') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection