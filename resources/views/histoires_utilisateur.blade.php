@extends('layouts.app')

@section('content')

    @if(!(count($histoires) === 0))
        <section class="histoires">
            @foreach ($histoires as $histoire)
                <div>
                    <p>{{$histoire -> titre}}</p>
                    @if($histoire->premierChapitre() == true)
                        <a href="{{route('lireHistoire',['id'=>$histoire->id])}}"><img src='{{$histoire -> photo}}' width="50" height="50" /></a>
                    @else
                        <img src='{{$histoire -> photo}}' width="50" height="50" />
                    @endif
                    <p>Etat de l'histoire :
                        @if($histoire->premierChapitre() == false)
                            L'histoire n'a pas de chapitre
                        @else
                            @if (($histoire->active == 1))
                                    <a href="{{route('modifierEtatHistoire',['id'=>$histoire->id])}}" class="btn-success" role="button">Desactiver</a>
                            @else
                                    <a href="{{route('modifierEtatHistoire',['id'=>$histoire->id])}}" class="btn-success" role="button">Activer</a>
                            @endif
                        @endif
                    </p>
                </div>
            @endforeach
        </section>
    @else
        <div class="alert alert-warning" role="alert">Aucune histoire pour l'utilisateur</div>
    @endif

@endsection