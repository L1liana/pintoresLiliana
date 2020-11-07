<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    //
    public function adolf(){
    return view('adolf',[
        'title'=>'Adolf | Lily','pintor'=>'Adolf Wolfli']);
    }
    public function edvar(){
        return view('edvar',[
            'title'=>'Edvard | Lily','pintor'=>'Edvard Munch']);
    }
    public function t(){
        return view('t',[
            'title'=>'Théodor | Lily','pintor'=>'Theodore gericault']);
    }
    public function l(){
        return view('l',[
            'title'=>'Leonardo | Lily','pintor'=>'Leonardo Da Vinci']);
    }
    public function o(){
        return view('o',[
            'title'=>'Louis | Lily','pintor'=>'Louis Wain']);
    }
    public function v(){
        return view('v',[
            'title'=>'Vincent | Lily','pintor'=>'Vincent van Gogh']);
    }
    public function login(){
        return view('admon.login',['title'=>'Login | Lily']);
    }
    public function validarLogin(Request $request){
        return view('admon.dash',['title'=>'Exito | Lily']);
    }
}
