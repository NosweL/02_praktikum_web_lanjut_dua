<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo 'Selamat Datang';
    }

    public function about() {
        return "Welson Mario Naibaho <br> 2041720253";
    }

    public function articles($id){
        return "Halaman Article dengan id ".$id;
    }
}
