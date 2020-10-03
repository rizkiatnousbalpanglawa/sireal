@extends('layout.index')

@section('content')
<div class="container-fluid">
    <div>
        <h3 class="mt-4">Tambah SKPD</h3>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Satuan Kerja Perangkat Daerah</li>
            <li class="breadcrumb-item active">Tambah SKPD</li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="/skpd" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" id="" class="form-control @error('nama') is-invalid @enderror"
                        placeholder="Nama" autocomplete="off">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="uname" id="" class="form-control @error('uname') is invalid @enderror"
                        placeholder="Username" autocomplete="off">
                    @error('uname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="pword" id="" class="form-control @error('pword') is invalid @enderror"
                        placeholder="Password" autocomplete="off">
                    @error('pword')
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