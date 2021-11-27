<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Validator;
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


}