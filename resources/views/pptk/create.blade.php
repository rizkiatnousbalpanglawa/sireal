@extends('layout.index')

@section('content')
<div class="container-fluid">
    <div>
        <h3 class="mt-4">Tambah Pejabat Pelaksana Teknis Kegiatan</h3>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">PPTK</li>
            <li class="breadcrumb-item active">Tambah PPTK</li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="/pptk" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">NIP</label>
                    <input type="text" name="nip" id="" class="form-control @error('nip') is-invalid @enderror"
                        placeholder="NIP" autocomplete="off">
                    @error('nip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama_pptk" id="" class="form-control @error('nama_pptk') is-invalid @enderror"
                        placeholder="Nama" autocomplete="off">
                    @error('nama_pptk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection