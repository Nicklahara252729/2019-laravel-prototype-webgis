<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use Storage;
use Url;
use Mail;

class InfrastrukturController extends Controller
{
    public function __construct()
    {
        error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');
        $this->request = $req;
        $this->middleware('auth');
    }

    public function pemetaan_infrastruktur(){
        return view('data-infrastruktur.pemetaan_infrastruktur');
    }
    public function data_infrastruktur_jalan(){
        return view('data-infrastruktur.data_infrastruktur_jalan');
    }
    public function data_infrastruktur_jembatan(){
        return view('data-infrastruktur.data_infrastruktur_jembatan');
    }
    public function data_infrastruktur_bangunan(){
        return view('data-infrastruktur.data_infrastruktur_bangunan');
    }
    public function data_infrastruktur_air(){
        return view('data-infrastruktur.data_infrastruktur_air');
    }
    public function laporan_infrastruktur_jalan(){
        return view('data-infrastruktur.laporan_infrastruktur_jalan');
    }
    public function laporan_infrastruktur_jembatan(){
        return view('data-infrastruktur.laporan_infrastruktur_jembatan');
    }
    public function laporan_infrastruktur_bangunan(){
        return view('data-infrastruktur.laporan_infrastruktur_bangunan');
    }
    public function laporan_infrastruktur_air(){
        return view('data-infrastruktur.laporan_infrastruktur_air');
    }
    public function laporan_infrastruktur_perumahan_pemukiman(){
        return view('data-infrastruktur.laporan_infrastruktur_perumahan_pemukiman');
    }
    public function download_file_infrastruktur(){
        return view('data-infrastruktur.download_file_infrastruktur');
    }
    public function laporan_history_kegiatan(){
        return view('data-infrastruktur.laporan_history_kegiatan');
    }
    public function download_history(){
        return view('data-infrastruktur.download_history');
    }
    
}
