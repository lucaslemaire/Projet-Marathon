<?php

namespace App\Http\Controllers;

use App\Histoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Chapitre;


class ControleurVisualisation extends Controller
{
    public function index() {
        $histoires = Histoire::all()->where('active','1');
        return view('index' , ['histoires' => $histoires]);
    }


    public function lireHistoire($id) {
        $histoire = Histoire::find($id);
        return view('lecture' , ['histoire' => $histoire]);
    }

    public function lireChapitre($id){
        $chapitre= chapitre::find($id);
        return view('lireChapitre',['chapitres'=>$chapitre]);
    }

}
