<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function simpan(Request $req){

        $pengguna = new Pengguna();
        $pengguna->  nama = $req->nama;
        $pengguna->  emel = $req->emel;
        $pengguna->  nokp = $req->nokp;
        $pengguna->  notel = $req->notel;

        $pengguna-> save();
        return redirect('/utama/borang')->with('msg','Rekod Berjaya di Simpan');


    }
}
