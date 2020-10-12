@extends('layout.index')

@section('content')
<div class="container-fluid">
    <div>
        <h3 class="mt-4">Tambah Tahun Anggaran</h3>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Tahun Anggaran</li>
            <li class="breadcrumb-item active">Tambah Tahun Anggaran</li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="/tahun-anggaran" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="number" name="tahun" value="2020"
                        class="form-control @error('tahun') is-invalid @enderror">
                    @error('tahun')
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