<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use DB;
use Storage;
use Url;
use Mail;   
use Hash;

class DefController extends Controller
{
    public function __construct(Request $req){
        error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');
        $this->request = $req;
    }

    public function index(){
        return view('default.index');
    }

    public function maps(){
        return view('default.maps');
    }

    public function tentang(){
        return view('default.tentang');
    }

    public function kontak(){
        return view('default.kontak');
    }
}
