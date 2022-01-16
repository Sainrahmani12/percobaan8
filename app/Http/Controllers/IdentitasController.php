<?php

namespace App\Http\Controllers;

use App\Models\Datamobil;
use App\Models\Identitas;
use App\Models\Supir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//Tambahkan controller CloudinaryStorage
use App\Http\Controllers\CloudinaryStorage;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Datamobil::all();
        $supir = Supir::all();
        $identitas = Identitas::all();
        return view('admin.identitas', compact('identitas', 'supir', 'mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createidentitas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image  = $request->file('foto_peminjam');
        $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());

        Identitas::create([
            'id'            => $request->id,
            'user_id'          => Auth::user()->id,
            'mobil_id'    => $request->id,
            'jaminan'       => $request->jaminan,
            'supir_id'         => $request->id,
            'peminjaman'    => $request->peminjaman,
            'pengembalian'  => $request->pengembalian,
            'foto_peminjam' => $result,
        ]);
        return redirect()->route('identitas');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (empty($request->file('foto_peminjam'))) {
            $identitas = Identitas::where('id', $id)->first();
            $identitas->update([
                'id'            => $request->id,
                'user_id'       => $request->id,
                'datamobil_id'    => $request->id,
            ]);
            return redirect()->back();
        } else {
            $identitas = Identitas::where('id', $id)->first();
            $image  = $request->file('foto_peminjam');
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
            $identitas->update([
                'id'            => $request->id,
                'user_id'          => $request->id,
                'datamobil_id'    => $request->id,
                'jaminan'       => $request->jaminan,
                'supir_id'         => $request->id,
                'peminjaman'    => $request->peminjaman,
                'pengembalian'  => $request->pengembalian,
                'foto_peminjam' => $result,
            ]);
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $identitas = Identitas::findOrFail($id);
        $identitas->delete();
        return redirect()->route('identitas');
    }
}
