<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class UriServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $uri = '';
        if(Request::segment(1)=='register'){
            $uri = 'register';
        }else if(Request::segment(1)=='complete'){
            $uri = 'complete';
        }else if(Request::segment(1)=='password'){
            $uri = 'password';
        }else if(Request::segment(1)=='finished'){
            $uri = 'finished';
        }else if(Request::segment(1)=='login'){
            $uri = 'login';
        }else if(Request::segment(1)=='maps'){
            $uri = 'maps';
        }else if(Request::segment(1)==''){
            $uri = 'home';
        }else if(Request::segment(1)=='tentang'){
            $uri = 'tentang';
        }else if(Request::segment(1)=='kontak'){
            $uri = 'kontak';
        }
        view()->share('uri',$uri);
    }
}
