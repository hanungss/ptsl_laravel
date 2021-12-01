<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Validator;
use App\Models\Gambar;
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
    
    // public function editpengumuman($id)
    // {
    //     $gambar = DB::table('gambar')->where('id', $id)->get();
    //     return view('editpengumuman', ['id' => $id]);
    // }

    public function detail($no_reg)
    {
        $ptsl = DB::table('ptsl')->where('no_reg', $no_reg)->get();
        return view('detail', ['ptsl' => $ptsl]);
    }
    
      public function pengumuman_admin()
    {
        $gambar = DB::table('gambar')->get();
        return view('pengumuman_admin',['gambar' => $gambar]);
    }
    
     public function hapuspengumuman($id)
    {
        DB::table('gambar')->where('id', $id)->delete();
        return redirect('/pengumuman_admin');
    }

    public function cetak($no_reg)
    {
        $ptsl = DB::table('ptsl')->where('no_reg', $no_reg)->get();
        return view('cetak', ['ptsl' => $ptsl]);
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
    
    function validasi_upload(Request $req)
    {
        Validator::make($req->all(), [
            "file" => ['required', 'file', 'max:2048'],
            'judul' => ['required', 'string', 'max:255'],
            'isi' => ['required', 'string']
        ])->validate();

        $file = $req->file('file');
		$nama_file = time()."_".$file->getClientOriginalName();
        // $req->image->move(public_path('data_file'), $nama_file);
        $tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
        
        //Jika Validasi Berhasil Maka akan menampilkan data dengan menjalankan fungsi dd dibawah
        Gambar::create([
			'file' => $nama_file,
			'judul' => $req->judul,
            'isi' => $req->isi,
		]);
        return redirect('/pengumuman');
    }
    
    public function update_pengumuman(Request $request)
    {
        Validator::make($request->all(), [
            "file" => ['required', 'file', 'max:2048'],
            'judul' => ['required', 'string', 'max:255'],
            'isi' => ['required', 'string']
        ])->validate();

        $file = $request->file('file');
		$nama_file = time()."_".$file->getClientOriginalName();
        // $req->image->move(public_path('data_file'), $nama_file);
        $tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

       Gambar::where('id', $request->id)->update([
			'file' => $nama_file,
			'judul' => $request->judul,
            'isi' => $request->isi,
		]);
        return redirect('/pengumuman_admin');
    }
    
     public function editpengumuman($id)
    {
        $gambar = DB::table('gambar')->where('id', $id)->get();
        return view('editpengumuman', ['gambar' => $gambar]);
    }

}