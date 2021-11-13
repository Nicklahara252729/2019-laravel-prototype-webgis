<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use Storage;
use Url;
use Mail;

class PetaPersebaranLahanController extends Controller
{
    public function __construct()
    {
        error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');
        $this->request = $req;
        $this->middleware('auth');
    }

    public function overview_peta_lahan(){
        return view('peta-persebaran-lahan.overview_peta_lahan');
    }
    public function pemetaan_batas_blok_kebun(){
        return view('peta-persebaran-lahan.pemetaan_batas_blok_kebun');
    }
    public function pemetaan_pokok_sawit(){
        return view('peta-persebaran-lahan.pemetaan_pokok_sawit');
    }
    public function pemetaan_infrastruktur_kebun(){
        return view('peta-persebaran-lahan.pemetaan_infrastruktur_kebun');
    }
}
