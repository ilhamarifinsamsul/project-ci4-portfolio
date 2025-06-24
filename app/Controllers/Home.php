<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        // $config = config('MySite');
        // echo "Selamat Datang di {$config->siteName}. Kirim kritik dan saran ke email {$config->siteEmail}."; 
    }
}
