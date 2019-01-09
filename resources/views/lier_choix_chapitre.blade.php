@extends('layouts.app')

@section('content')

    <link href="{{ asset('css/addhist.css') }}" rel="stylesheet">
    @if(!(count($histoires) === 0))
        <form action="{{route('lier_chapitre')}}" method="get">
            {{csrf_field()}}
            <div class="text-center" style="margin-top: 2rem">
                <h3><i class="far fa-edit"></i>Choix de l'histoire</h3>
                <hr class="mt-2 mb-2">
            </div>
            <div class = "form-group">
                <label class = "col-md-3 form-control-label" for="histoire_id"><strong>Sélectionnez l'histoire à modifier</strong></label>
                <select name="histoire_id" id="histoire_id" class="form-control" value="{{old('histoire_id')}}">
                    @foreach($histoires as $histoire)
                        <option value="{{$histoire->id}}">{{$histoire->titre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <button class="btn btn-success" type="submit">Valider</button>
            </div>
        </form>

    @else
        <div class="alert alert-warning" role="alert">Aucune histoire pour l'utilisateur</div>
    @endif
@endsection