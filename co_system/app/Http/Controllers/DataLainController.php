<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use Storage;
use Url;
use Mail;

class DataLainController extends Controller
{
    public function __construct()
    {
        error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');
        $this->request = $req;
        $this->middleware('auth');
    }

    public function index(){
        return view('data-lain.index');
    }
}
