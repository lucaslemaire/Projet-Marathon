<?php
/**
 * Created by PhpStorm.
 * User: florian.bouchez
 * Date: 20/12/18
 * Time: 00:37
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ControleurUtilisateur extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function afficherHistoires(){
        $id = Auth::user()->id;
        $histoires = User::find($id)->histoires;
        return view('histoires_utilisateur',['histoires'=>$histoires]);
    }

    public function modifierEtat($id){
        DB::update('UPDATE histoire set active = 1 -active where id=? ', [$id]);
        return back();
    }

    public function sauvegardeProgression(){
        $id = Auth::user()->id;
        $histoire_id = DB::table('histoire')->get();


    }



}