@extends('layouts.app')

@section('content')


    <link href="{{ asset('css/addhist.css') }}" rel="stylesheet">
    @if(!(count($histoires) === 0))
    <form action="{{route('enregistrer_chapitre')}}" method="post">
        {{csrf_field()}}
        <div class="text-center" style="margin-top: 2rem">
            <h3><i class="far fa-edit"></i> Création d'un chapitre</h3>
            <hr class="mt-2 mb-2">
        </div>
        <div class = "form-group">
            <label class = "col-md-3 form-control-label" for="histoire_id"><strong>Histoire concernée</strong></label>
            <select name="histoire_id" id="histoire_id" class="form-control" value="{{old('histoire_id')}}">
                @foreach($histoires as $histoire)
                    <option value="{{$histoire->id}}">{{$histoire->titre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="col-md-3 form-control-label" for="texte"><strong>Texte du chapitre</strong></label>
            <textarea class="form-control" name="texte" id="texte" rows="10" placeholder="Texte du chapitre.." value="{{old('texte')}}"></textarea>
        </div>
        <div class="form-group">
            <label class="col-md-3 form-control-label" for="titre"><strong>Titre du chapitre</strong></label>
            <textarea class="form-control" name="titre" id="titre" rows="1" placeholder="Titre" value="{{old('titre')}}"></textarea>
        </div>
        <div class="form-group">
            <label class="col-md-3 form-control-label" for="titrecourt"><strong>Titre court du chapitre</strong></label>
            <textarea class="form-control" name="titrecourt" id="titrecourt" rows="1" placeholder="Texte court du chapitre.." value="{{old('titrecourt')}}"></textarea>
        </div>
        <div class="form-group">
            <label class="col-md-3 form-control-label" for="photo"><strong>Votre image :</strong></label>
            <textarea type="texte" class="form-control" id="photo" name="photo" value="{{old('photo')}}"></textarea>
        </div>
        <div class="form-group">
            <label class="col-md-3 form-control-label" for="question"><strong>Question du chapitre</strong></label>
            <textarea class="form-control" name= "question" id="question" rows="1" placeholder="Votre question.." value="{{old('question')}}"></textarea>
        </div>
        <div class="text-center">
            <button class="btn btn-success" type="submit">Valide</button>
        </div>
    </form>

    @else
        <div class="alert alert-warning" role="alert">Aucune histoire pour l'utilisateur</div>
    @endif

@endsection
