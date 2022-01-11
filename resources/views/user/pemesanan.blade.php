@extends('masteruser')
@section('content')
<form class="container mt-5 w-50" action="{{route('pesanid')}}" enctype="multipart/form-data" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIK/KK</label>
    <input type="text" name="nik" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Mobil</label>
    <select class="@error('datamobil_id') is-invalid @enderror form-select input-fixed" name="datamobil_id" required>
      <option value selected="">--Pilih Mobil--</option>
      @foreach($mobil as $m)
      <option value="{{$m->id}}">{{$m->nama_mobil}}</option>
      @endforeach
    </select>
    @error('mobil_id')
    <div class="invalid-feedback" style="width: 300px !important;" role="alert">
      <strong>{{$message}}</strong>
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jaminan</label>
    <input type="text" name="jaminan" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Supir</label>
    <select class="form-select input-fixed" name="supir_id" required>
      <option value selected="">--Pilih Supir--</option>
      @foreach($supir as $s)
      <option value="{{$s->id}}">{{$s->nama}}</option>
      @endforeach
    </select>
    @error('supir_id')
    <div class="invalid-feedback" style="width: 300px !important;" role="alert">
      <strong>{{$message}}</strong>
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Peminjaman</label>
    <input type="date" name="peminjaman" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pengembalian</label>
    <input type="date" name="pengembalian" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jumlah Hari</label>
    <input type="number" name="jumlah_hari" class="form-control">
  </div>

  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Supir</label>
    <select class=" form-select input-fixed" name="jumlah_hari" required>
      <option value selected="">--Pilih Jumlah Hari--</option>
      @foreach($supir as $s)
      <option value="{{$s->id}}">{{$s->nama}}</option>
      @endforeach
    </select>
    @error('supir_id')
    <div class="invalid-feedback" style="width: 300px !important;" role="alert">
      <strong>{{$message}}</strong>
    </div>
    @enderror
  </div> -->
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Foto Peminjam</label>
    <input type="file" name="foto_peminjam" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection