@extends('master')
@section('content')

<h1 class="text-center dt-mobil">Tagihan Peminjaman Mobil Anda</h1>
<div class="row container">
  @foreach ($identitas as $i)
  <div class="col-3 mt-2">
    <div class="card h-100">
      <div class="gambar w-50 container mt-5">
        <img src="{{url('storage/' .$i->foto_peminjam)}}" class="card-img-top" alt="...">
      </div>
      <div class="card-body text-center">
        <h2 class="dt-mobil1">{{$i->user->name}}</h2>
        <p class="dt-mobil1 mt-3">{{$i->datamobil->nama_mobil}}</p>
        <p class="dt-mobil1 mt--3">{{$i->datamobil->nopol_mobil}}</p>
        <p class="dt-mobil1 mt--3">{{ (int) number_format((int)$i->datamobil->hargasewa_mobil * (int)$i->jumlah_hari)}},000</p>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection