@extends('layout.index')

@section('content')
<div class="container-fluid">
    <div>
        <h3 class="mt-4">Tambah Metode Penunjukan</h3>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Metode Penunjukan</li>
            <li class="breadcrumb-item active">Tambah Metode Penunjukan</li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="/metode" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Metode Penunjukan</label>
                    <input type="text" name="metode" id="" class="form-control @error('metode') is-invalid @enderror"
                        placeholder="Metode Penunjukan">
                    @error('metode')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection