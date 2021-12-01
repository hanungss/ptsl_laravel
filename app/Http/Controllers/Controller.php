<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function lihatdata()
    {
        $ptsl = DB::table('ptsl')->get();
        return view('lihatdata',['ptsl' => $ptsl]);
    }

    public function pencarian()
    {
        $ptsl = DB::table('ptsl')->get();
        return view('welcome',['ptsl' => $ptsl]);
    }
    
       public function pengumuman()
    {
        $gambar = DB::table('gambar')->get();
        return view('lihatpengumuman',['gambar' => $gambar]);
    }
    
      public function pengumuman_admin()
    {
        $gambar = DB::table('gambar')->get();
        return view('pengumuman_admin',['gambar' => $gambar]);
    }
    
    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'judul' => 'required',
            'isi' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Gambar::create([
			'file' => $nama_file,
			'judul' => $request->judul,
            'isi' => $request->isi,
		]);
 
		return redirect()->back();
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



}