@extends('masteruser')

@section('content')

<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Rental App!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
    </div>
</header>
<!-- mobil -->
<section class="page-section" id="mobil">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Mobil Terupdate</h2>
        </div>
        <div class="row container">
            @foreach ($mobil as $m)
            <div class="col-3 mt-2">
                <div class="card h-100">
                    <div class="gambar w-100 container mt-5">
                        <img src="{{ $m->gambar_mobil }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="dt-mobil1">{{$m->nama_mobil}}</h2>
                        <p class="dt-mobil1 mt-3">{{$m->nopol_mobil}}</p>
                        <p class="dt-mobil1 mt--3">{{$m->warna_mobil}}</p>
                        <p class="dt-mobil1 mt--3">{{$m->hargasewa_mobil}}/hr</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- supir -->
<section class="page-section bg-light" id="supir">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">List Supir</h2>
        </div>
        <div class="row container">
            @foreach ($supir as $s)
            <div class="col-3 mt-2">
                <div class="card h-100">
                    <div class="gambar w-100 container mt-5">
                        <img src="{{ $s->foto }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="dt-mobil1">{{$s->nama}}</h2>
                        <p class="dt-mobil1 mt-3">{{$s->alamat}}</p>
                        <p class="dt-mobil1 mt--3">{{$s->umur}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- jadwal -->
<section id="jadwal">
    <div class="header-body container">
        <h1 class="text-center dt-mobil">Jadwal Peminjaman</h1>
        <div class="row align-items-center py-4"></div>
        <table class="table align-items-center table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">Nama Peminjam</th>
                    <th scope="col" class="sort" data-sort="budget">Nama Mobil</th>
                    <th scope="col" class="sort" data-sort="status">Tanggal Peminjaman</th>
                    <th scope="col" class="sort" data-sort="status">Tanggal Pengembalian</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($identitas as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->user->name}}</td>
                    <td>{{$i->datamobil->nama_mobil}}</td>
                    <td>{{$i->peminjaman}}</td>
                    <td>{{$i->pengembalian}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</section>
<!-- tagihan -->
<section id="tagihan" class="container">
    <h1 class="text-center dt-mobil">Tagihan Peminjaman Mobil</h1>
    <div class="row text-center">
        @foreach ($identitas as $i)
        <div class="col-3 mt-2">
            <div class="card h-100">
                <div class="gambar w-50 container mt-5">
                    <img src="{{ $i->foto_peminjam }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body text-center">
                    <h2 class="dt-mobil1">{{$i->user->name}}</h2>
                    <p class="dt-mobil1 mt-3">{{$i->datamobil->nama_mobil}}</p>
                    <p class="dt-mobil1 mt-3">{{$i->datamobil->nopol_mobil}}</p>
                    <p class="dt-mobil1 mt--3">{{ number_format((int)$i->datamobil->hargasewa_mobil * (int)$i->jumlah_hari)}},000</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- pembayaran -->
<section id="pembayaran">
    <h1 class="text-center dt-mobil">Metode Pembayaran</h1>
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class=" col-4">
                    <div class="card card-stats h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Tunai</h5>
                                    <span class="h2 font-weight-bold mb-0"></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="fas fa-hand-holding-usd"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2">Admin </span>
                                <span class="text-nowrap">Husain Rahmani</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-4">
                    <div class="card card-stats">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Dana</h5>
                                    <span class="h2 font-weight-bold mb-0">o85213221817</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="fas fa-wallet"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2">Dompet Digital</span>
                                <span class="text-nowrap">a.n Husain Rahmani</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-4">
                    <div class="card card-stats">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Bank</h5>
                                    <span class="h2 font-weight-bold mb-0">4153 xxx xxx xxx</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2">BSI</span>
                                <span class="text-nowrap">a.n Husain Rahmani</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- maps -->
<section id="maps">
    <h1 class="text-center dt-mobil">Maps</h1>
    <div class="maps text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.971488387!2d107.0359731143131!3d-6.525284665606235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69bc6e5be3d9bd%3A0x6b9881dabd801476!2sSMK%20IDN%20Boarding%20School!5e0!3m2!1sid!2sid!4v1639241391646!5m2!1sid!2sid" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
<!-- button wa -->
<div class="tmbl-wa">
    <a href="https://wa.me/6285213221817" position="fixed" float="bottom-right"><img src="admin/assets/img/brand/whatsapp.png" width="200px" alt=""></a>
</div>

@endsection