<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use Storage;
use Url;
use Mail;

class TabularController extends Controller
{
    public function __construct()
    {
        error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');
        $this->request = $req;
        $this->middleware('auth');
    }

    public function data_jenis_infrastruktur(){
        return view('data-tabular.data_jenis_infrastruktur');
    }
    public function data_kecamatan(){
        return view('data-tabular.data_kecamatan');
    }
    public function data_jabatan(){
        return view('data-tabular.data_jabatan');
    }
    public function data_user(){
        return view('data-tabular.data_user');
    }
    public function data_sumber_dana(){
        return view('data-tabular.data_sumber_dana');
    }
    public function data_umum_infrastruktur(){
        return view('data-tabular.data_umum_infrastruktur');
    }
    public function data_tingkat_akses_jalan(){
        return view('data-tabular.data_tingkat_akses_jalan');
    }
    public function data_kondisi(){
        return view('data-tabular.data_kondisi');
    }
    public function data_kondisi_permukaan_jalan(){
        return view('data-tabular.data_kondisi_permukaan_jalan');
    }
    public function data_wewenang_penanganan_jalan(){
        return view('data-tabular.data_wewenang_penanganan_jalan');
    }
    public function data_jenis_jembatan(){
        return view('data-tabular.data_jenis_jembatan');
    }
    public function data_klasifikasi_fungsi_jalan(){
        return view('data-tabular.data_klasifikasi_fungsi_jalan');
    }
    public function data_beban_jalan(){
        return view('data-tabular.data_beban_jalan');
    }
    public function data_administrasi_jalan(){
        return view('data-tabular.data_administrasi_jalan');
    }
    public function data_klasifikasi_fungsi_jembatan(){
        return view('data-tabular.data_klasifikasi_fungsi_jembatan');
    }
}
