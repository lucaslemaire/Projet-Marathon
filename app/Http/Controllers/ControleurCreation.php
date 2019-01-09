<?php

namespace App\Http\Controllers;

use App\Histoire;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ControleurCreation extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    //---------------------------------------------------------
    public function creerHistoire() {
        return view('creer_histoire');
    }

    public function enregistrerHistoire(Request $request) {
         $this->validate(
             $request,
             [
                 'titre' => 'required',
                 'pitch' => 'required',
                 'photo' => 'required',

             ]

         );
         $input = $request->only(['titre','pitch','photo','user_id','active']);
         DB::table('histoire')->insert(
             [
                 'titre' => $input['titre'],
                 'pitch' => $input['pitch'],
                 'photo' => $input['photo'],
                 'user_id' => Auth::user()->id,
                 'active' => '0',
             ]
         );

         return redirect('/');
    }


    //---------------------------------------------------------

    public function creerChapitre() {
        $id = Auth::user()->id;
        $histoires = User::find($id)->histoires;
        return view('creer_chapitre' , ['histoires' => $histoires]);
    }

    public function enregistrerChapitre(Request $request) {
      $this->validate(
            $request,
            [
                'histoire_id' => 'required',
                'titre' => 'nullable',
                'titrecourt' => 'required',
                'texte' => 'required',
                'photo' => 'nullable',
                'question' => 'nullable',

            ]
        );

        $req = $request->input('histoire_id');
        if(Histoire::find($req)->premierChapitre() == null){
            $premier = 1;
        }
        else{$premier=0;}

        $input = $request->only(['histoire_id','titre','titrecourt','texte','photo','question']);

        DB::table('chapitre')->insert(
            [
                'titre' => $input['titre'],
                'titrecourt' => $input['titrecourt'],
                'texte' => $input['texte'],
                'photo' => $input['photo'],
                'question' => $input['question'],
                'histoire_id' => $input['histoire_id'],
                'premier' => $premier,
            ]
        );

        return $this->creerChapitre();
    }


    //---------------------------------------------------------

    public function choixChapitre(){
        $id = Auth::user()->id;
        $histoires = User::find($id)->histoires;
        return view('lier_choix_chapitre', ['histoires' => $histoires]);

    }
    public function lierChapitre(Request $request) {
        $input = $request->input('histoire_id');
        $chapitres = Histoire::find($input)->chapitres;
       // echo count($chapitres);
        //return redirect() ->route('lier_chapitre',['chapitres' => $chapitres]);
        return view('lier_chapitre',['chapitres' => $chapitres]);
    }

    public function enregistrerLiaison(Request $request) {
        $this->validate(
            $request,
            [
                'reponse' => 'required',
                'chapitre_source_id' => 'required',
                'chapitre_destination_id' => 'required',
            ]
        );
        $input = $request->only(['reponse','chapitre_source_id','chapitre_destination_id']);

        DB::table('suite')->insert(
          [
              'reponse' => $input['reponse'],
              'chapitre_source_id' => $input['chapitre_source_id'],
              'chapitre_destination_id' => $input['chapitre_destination_id'],
          ]
        );

        return $this->choixChapitre();
    }
}
