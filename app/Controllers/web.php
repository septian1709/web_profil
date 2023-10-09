<?php

namespace App\Controllers;

class Web extends BaseController
{
    public function beranda()
    {
        //return view('header');
        return view('home');
    }

    public function sejarah()
    {
        return view('profil/sejarah');
    }

    public function visi()
    {
        return view('profil/visi');
    }

    public function struktur()
    {
        return view('profil/struktur.php');
    }

    public function layanan(){
        return view('layanan/standar.php');
    }
    public function tugas(){
        return view('profil/tugas.php');
    }
}
