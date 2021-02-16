<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Sela Aulia Siswanto - 1941720196';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID ' .$id;
    }
}
