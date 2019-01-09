@extends('layouts.app')

@section('content')

    <link href="{{ asset('css/addhist.css') }}" rel="stylesheet">
    <form action="{{route('enregistrer_histoire')}}" method="POST">
         {{csrf_field()}}
        <div class="text-center">
            <h3><i class="far fa-edit"></i> Création d'une histoire</h3>
        </div>
        <div class="form-group row">
            <div class="col-md-3">
                <textarea name="titre" id="description" rows="1" class="form-control"
                          value="{{ old('titre') }}" placeholder="Titre..."></textarea>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4">
                <textarea name="pitch" id="pitch" rows="6" class="form-control"
                          value="{{ old('pitch') }}" placeholder="Pitch..."></textarea>
            </div>
            <div class="col-md-4">
                <textarea name="photo" id="photo" rows="1" class="form-control"
                      value="{{ old('photo') }}" placeholder="Lien de la photo..."></textarea>
            </div>
            <div>
                <label for="filephoto">ou vous pouvez l'upload ici</label>
                    <br>
                <input type="file" class="form-control-file" id="filephoto">
            </div>
            <br>
        </div>

        <div class="text-center">
            <button class="btn btn-success" type="submit">Valide</button>
        </div>
    </form>

@endsection