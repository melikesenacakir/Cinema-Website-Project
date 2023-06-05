<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageHomeController extends Controller
{
 public function index(){
    return view('project.index');
 }
 public function login(){
     return view('project.login');
 }
    public function kayit(){
        return view('project.kayit');
    }
    public function admin(){
        return view('project.adminlogin');
    }
    public function aksiyon(){
        return view('project.aksiyon');
    }
    public function animasyon(){
        return view('project.animasyon');
    }
    public function biyografi(){
        return view('project.biyografi');
    }
    public function dram(){
        return view('project.dram');
    }
    public function korku(){
        return view('project.korku');
    }
    public function kvk(){
        return view('project.kvkaydınlatma');
    }
    public function kvkpol(){
        return view('project.kvkpolitika');
    }
    public function romantik(){
        return view('project.romantik-komedi');
    }
    public function araf(){
        return view('project.filmler.araf-6-olum');
    }
    public function askin(){
        return view('project.filmler.askin-bununla-ne-ilgisi-var');
    }
    public function dali(){
        return view('project.filmler.dali-diyari');
    }
    public function galaksi(){
        return view('project.filmler.galaksininkoruyuculari3');
    }
    public function hizliof(){
        return view('project.filmler.hizliveofkeli10');
    }
    public function karanlik(){
        return view('project.filmler.karanlikgece');
    }
    public function korsaj(){
        return view('project.filmler.korsaj');
    }
    public function kotu(){
        return view('project.filmler.kotu-ruh-uyanis');
    }
    public function kurak(){
        return view('project.filmler.kurak-gunler');
    }
    public function mannu(){
        return view('project.filmler.mannucanakkalede');
    }
    public function neseli(){
        return view('project.filmler.neseliciftliktrenkalkiyor');
    }
    public function resmiyaris(){
        return view('project.filmler.resmi-yarisma');
    }
    public function iletisim(){
     return view('project.iletisim');
    }
    public function biletal(){
     return view('project.biletal');
    }
    public function biletsatinal(){
     return view('project.bilet_satin_al');
    }
    public function odemeyap(){
     return view('project.ödemeyap');
    }
    public function oneri(){
     return view('project.önerişikayet');
    }
}
