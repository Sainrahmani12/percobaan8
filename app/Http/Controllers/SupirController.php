<?php

namespace App\Http\Controllers;

use App\Models\datasupir;
use App\Models\Supir;
use Illuminate\Http\Request;

//Tambahkan controller CloudinaryStorage
use App\Http\Controllers\CloudinaryStorage;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supir = Supir::all();
        return view('admin.datasupir', compact('supir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image  = $request->file('foto');
        $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName()); 
        Supir::create([
            'nama'   =>$request->nama,
            'alamat' =>$request->alamat,
            'umur'   =>$request->umur,
            'foto'   =>$result,
        ]);
        return redirect()->route('datasupir');
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
        if (empty ($request->file('foto')))
        {
            $supir = Supir::where('id', $id)->first();
            $supir->update([
                'nama'      => $request->nama,
                'alamat'    => $request->alamat,
                'umur'      => $request->umur,
            ]);
            return redirect()->back();
        }else{
            $supir = Supir::where('id', $id)->first();
            $image  = $request->file('foto');
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName()); 
            $supir->update([
                'nama'     => $request->nama,
                'alamat'     => $request->alamat,
                'umur'     => $request->umur,
                'foto'     => $result,
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
        $supir=Supir::findOrFail($id);
        $supir->delete();
        return redirect()->route('datasupir');
    }
}
