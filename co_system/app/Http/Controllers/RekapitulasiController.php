<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use Storage;
use Url;
use Mail;

class RekapitulasiController extends Controller
{
    public function __construct()
    {
        error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');
        $this->request = $req;
        $this->middleware('auth');
    }

    public function overview(){
        return view('rekapitulasi.overview');
    }

    public function input_rekapitulasi_data(){
        return view('rekapitulasi.input_rekapitulasi_data');
    }
}
