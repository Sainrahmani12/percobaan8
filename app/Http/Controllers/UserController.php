<?php

namespace App\Http\Controllers;

use App\Models\Datamobil;
use App\Models\Identitas;
use App\Models\Supir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $supir = Supir::all();
        $mobil = Datamobil::all();
        $identitas = Identitas::all();
        return view('user.isiuser', compact('mobil', 'supir', 'identitas'));
    }

    public function pesan()
    {
        $identitas = Identitas::all();
        $supir = Supir::all();
        $mobil = Datamobil::all();
        return view('user.pemesanan', compact('mobil', 'supir', 'identitas'));
    }

    public function store(Request $request)
    {
        $image  = $request->file('foto_peminjam');
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        Identitas::create([
            'nik'    =>$request->nik,
            'user_id'          =>Auth::user()->id,
            'datamobil_id'    =>$request->datamobil_id,
            'jaminan'       =>$request->jaminan,
            'supir_id'         =>$request->supir_id,
            'peminjaman'    =>$request->peminjaman,
            'pengembalian'  =>$request->pengembalian,
            'jumlah_hari'  =>$request->jumlah_hari,
            'foto_peminjam' =>$result,
        ]);
        return redirect()->route('user');
    }

}
