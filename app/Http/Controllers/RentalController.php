<?php

namespace App\Http\Controllers;

use App\Models\Datamobil;
use App\Models\Identitas;
use App\Models\User;
use Illuminate\Http\Request;

//Tambahkan controller CloudinaryStorage
use App\Http\Controllers\CloudinaryStorage;

class RentalController extends Controller
{
    public function index()
    {
        $user = User::all();
        $datauser = User::where('role', 'User')->count();
        $datakasir = User::where('role', 'Kasir')->count();
        $dataadmin = User::where('role', 'Admin')->count();
        $role = [];
        $user = [];
        $kasir = [];
        $admin = [];

        foreach ($user as $u) {
            $role[] = $u->role;
        }

        $user[] = $datauser;
        $kasir[] = $datakasir;
        $admin[] = $dataadmin;

        return view('admin.index', compact('role', 'user', 'kasir', 'admin'));
    }

    public function datamobil()
    {
        $mobil = Datamobil::all();
        return view('admin.datamobil', compact('mobil'));
    }

    public function creategallery()
    {
        return view('admin.creategallery');
    }

    public function create()
    {
        return view('modal.create');
    }

    public function about()
    {
        return view('admin.about');
    }

    public function tagihan()
    {
        $identitas = Identitas::all();
        return view('admin.tagihan', compact('identitas'));
    }

    public function jadwal()
    {
        $identitas = Identitas::all();
        return view('admin.jadwal', compact('identitas'));
    }

    public function pembayaran()
    {
        return view('admin.pembayaran');
    }

    public function edit($id)
    {
        $mobil = Datamobil::find($id);
        return view('admin.edit', compact('mobil'));
    }


    public function store(Request $request)
    {
        $image  = $request->file('gambar_mobil');
        $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        // return dd($request);
        Datamobil::create([
            // 'id'            => $request->id,
            'nama_mobil'    => $request->nama_mobil,
            'nopol_mobil'   => $request->nopol_mobil,
            'warna_mobil'   => $request->warna_mobil,
            'hargasewa_mobil' => $request->harga_sewa,
            'gambar_mobil'  => $result,
        ]);
        return redirect()->route('datamobil');
    }

    public function update(Request $request, $id)
    {
        if (empty($request->file('gambar_mobil'))) {
            $mobil = Datamobil::where('id', $id)->first();
            $mobil->update([
                'nama_mobil'       => $request->nama_mobil,
                'nopol_mobil'      => $request->nopol_mobil,
                'warna_mobil'      => $request->warna_mobil,
                'hargasewa_mobil'  => $request->hargasewa_mobil,
            ]);
            return redirect()->back();
        } else {
            $mobil = Datamobil::where('id', $id)->first();
            $image  = $request->file('foto_peminjam');
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
            $mobil->update([
                'nama_mobil'      => $request->nama_mobil,
                'nopol_mobil'     => $request->nopol_mobil,
                'warna_mobil'     => $request->warna_mobil,
                'hargasewa_mobil' => $request->hargasewa_mobil,
                'warna_mobil'     => $request->warna_mobil,
                'gambar_mobil'    => $result,
            ]);
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $mobil = Datamobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('datamobil');
    }
}
