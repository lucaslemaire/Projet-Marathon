@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/lirechap.css') }}">
    <div id="lirechap">
        <h5 class="chapitre_tirecourt">{{$chapitres->titrecourt}}</h5>

        <div class="cadre_capitre">
            <img class="cadre_image_chapitre" src="{{$chapitres->photo}}" width="300px" height="auto">
        </div>

        <h6 class="chapitre_texte">{{$chapitres->texte}}</h6>

        <h7 class="chapitre_question">{{$chapitres->question}}</h7>

        <ul>
            @foreach($chapitres->suites as $suite)
                <li>
                    <a href="{{route('lireChapitre',['id'=>$suite->id])}}">{{$suite->pivot->reponse}}</a>
                </li>
            @endforeach
        </ul>
    </div>


@endsection