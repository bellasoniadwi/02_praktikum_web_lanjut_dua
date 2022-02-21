<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo 'Selamat Datang';
    }
    public function about(){
        echo 'Bella Sonia Dwi Angelina - 2041720063';
    }
    public function articles($id){
        echo 'Halaman Artikel dengan Id ' . $id;
    }
}
