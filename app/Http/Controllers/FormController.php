<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    function validasi_form(Request $req)
    {
        Validator::make($req->all(), [
            "nama" => ['required', 'string', 'max:100'],
            'nik' => ['required', 'string', 'max:255'],
            'alamat' => ['string']
        ])->validate();
        
        //Jika Validasi Berhasil Maka akan menampilkan data dengan menjalankan fungsi dd dibawah
        DB::table('ptsl')->insert([
            'nama' => $req->nama,
            'nik' => $req->nik,
            'alamat' => $req->alamat
        ]);
        return redirect('/lihatdata');
    }
}