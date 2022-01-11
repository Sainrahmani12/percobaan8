<?php

namespace App\Http\Controllers;

use App\Models\Datamobil;
use App\Models\User;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function allGrafik(){

        $datamobil = Datamobil::count();
        $nama_mobil = Datamobil::all();

        $name =[];
        $total=[];

        foreach($nama_mobil as $row){
            $name[] = $row->mobil;
            $total[] = User::where('mobil_id', $row->id)->count();
        }

        return view('admin.dashboard', compact('mobil','name','total'));

    }


}
