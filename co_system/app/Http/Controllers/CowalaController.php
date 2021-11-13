<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use Storage;
use Url;
use Mail;

class CowalaController extends Controller{
    public function __construct(){
        //--- domisili
        date_default_timezone_set('Medan');
    }
    //------- persyaratan minimal
    public function minimum_requirement(){
        $data_requirement = 'bisa_framework';
        return $data_requirement;
    }
    //------- persyaratan yang diutamakan                               //=         =         =  ===========  ===========
    public function main_requirement(){                                 //=         =         =  =            =           =
        $data_requirement = [                                           //=         =         =  =            =             =
            'larvel min v 5.7',                                         //=         =         =  =            =           =
            'paham konsep API',                                         //=         =         =  ===========  ===========
            'Ajax',                                                     //=         =         =  =            =           =
            'bisa vue.js lebih bagus'                                   //=         =         =  =            =             =
        ];                                                              //=         =         =  =            =           =    
        return $data_minimum_requirement;                               //=====================  ===========  ===========          
    }       
    //------ list framework yang diterima                               //===========        ==============  =                         =
    public function framework_accepted(){                               //=          =       =                =                       =
        $data_framework = [                                             //=           =      =                 =                     =
            'Laravel',                                                  //=            =     =                  =                   =
            'Codeigniter',                                              //=             =    =                   =                 =
            'YII 2',                                                    //=              =   ==============       =               =
            'Symfony 4',                                                //=              =   =                     =             =
            'CakePHP',                                                  //=             =    =                      =           =
            'Phalcon',                                                  //=            =     =                       =         =
            'ZendFramework'                                             //=           =      =                        =       =
        ];                                                              //===========        ==============            =======
        return $data_framework;
    }
    //------ pencarian web dev
    public function find_web_dev(){
        $minimum_requirement = $this->minimum_requirement();
        $main_requirement = $this->main_requirement();
        $framework_accepted = $this->framework_accepted();
        if($minimum_requirement == TRUE && $main_requirement == TRUE && $framework_accepted == TRUE){
            echo "Selamat Bergabung di Cowala.id";
        }else{
            return $this;
        }
    }
}
