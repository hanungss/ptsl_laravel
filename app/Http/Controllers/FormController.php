<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Validator;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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

    public function editdata($no_reg)
    {
        $ptsl = DB::table('ptsl')->where('no_reg', $no_reg)->get();
        return view('editdata', ['ptsl' => $ptsl]);
    }

    public function update(Request $request)
    {
        DB::table('ptsl')->where('no_reg', $request->no_reg)->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'alamat' => $request->alamat
        ]);
        return redirect('/lihatdata');
    }

    public function hapus($no_reg)
    {
        DB::table('ptsl')->where('no_reg', $no_reg)->delete();
        return redirect('/lihatdata');
    }

    function validasi_update(Request $req)
    {
        Validator::make($req->all(), [
            "nama" => ['required', 'string', 'max:100'],
            'nik' => ['required', 'string', 'max:255'],
            'alamat' => ['string']
        ])->validate();
        
        //Jika Validasi Berhasil Maka akan menampilkan data dengan menjalankan fungsi dd dibawah
        DB::table('ptsl')->where('no_reg', $req->no_reg)->update([
            'nama' => $req->nama,
            'nik' => $req->nik,
            'alamat' => $req->alamat
        ]);
        return redirect('/lihatdata');
    }

}