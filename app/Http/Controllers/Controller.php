<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use App\Gambar;
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
        $pengumuman = DB::table('pengumuman')->get();
        return view('lihatpengumuman',['pengumuman' => $pengumuman]);
    }

    public function upload(){
		return view('upload');
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
        // $nama_file = time()."_".$file->image->extension();
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
        // $request->image->move(public_path(‘images’), $imageName);
 
		Gambar::create([
			'file' => $nama_file,
			'judul' => $request->judul,
            'isi' => $request->isi,
		]);
 
		return redirect()->back()->with(‘success’)->with(‘file’,$nama_file);
	}


}