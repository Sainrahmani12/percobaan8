@extends('master')
@section('content')
<div class="header-body container">
    <h1 class="text-center dt-mobil">Edit Data Mobil</h1>
        <form class="container mb-3 w-50" action="{{route('edit', $mobil->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="sewa">
        <div class="mb-3">
            <label class="form-label">Nama Mobil</label>
            <input type="text" name="nama_mobil" value="{{ $mobil->nama_mobil }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nopol Mobil</label>
            <input type="text" name="nopol_mobil" value="{{ $mobil->nopol_mobil }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Warna Mobil</label>
            <input type="text" name="warna_mobil" value="{{ $mobil->warna_mobil }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga Sewa</label>
        <input type="text" name="harga_sewa" value="{{ $mobil->hargasewa_mobil }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar Mobil</label>
            <input type="file" name="gambar_mobil" value="{{ $mobil->gambar_mobil }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>

    </div>
</div>

@endsection