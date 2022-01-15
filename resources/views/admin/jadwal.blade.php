@extends('master')
@section('content')

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
                            <td>{{$i->datamobil?->nama_mobil}}</td>
                            <td>{{$i->peminjaman}}</td>
                            <td>{{$i->pengembalian}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>

@endsection