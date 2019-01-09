@extends('layouts.app')

@section('content')

    <link href="{{ asset('css/addhist.css') }}" rel="stylesheet">
    @if(!(count($chapitres) === 0))
        <form action="{{route('enregistrer_liaison')}}" method="POST">
            {{csrf_field()}}
            <div class="text-center" style="margin-top: 2rem">
                <h3><i class="far fa-edit"></i>Liaison d'un chapitre</h3>
                <hr class="mt-2 mb-2">
            </div>
            <div class="form-group">
                <label class="col-md-3 form-control-label" for="chapitre_source_id"><strong>Sélectionnez le chapitre
                        source</strong></label>
                <select name="chapitre_source_id" id="chapitre_source_id" class="form-control"
                        value="{{old('chapitre_source_id')}}">
                    @foreach($chapitres as $chapitre)
                        <option value="{{$chapitre->id}}">{{$chapitre->titrecourt}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="col-md-3 form-control-label" for="chapitre_destination_id"><strong>Sélectionnez le
                        chapitre destination</strong></label>
                <select name="chapitre_destination_id" id="chapitre_destination_id" class="form-control"
                        value="{{old('chapitre_destination_id')}}">
                    @foreach($chapitres as $chapitre)
                        <option value="{{$chapitre->id}}">{{$chapitre->titrecourt}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="col-md-3 form-control-label" for="reponse"><strong>Réponse</strong></label>
                <textarea class="form-control" name="reponse" id="reponse" rows="10" placeholder="Texte du chapitre.."
                          value="{{old('reponse')}}"></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-success" type="submit">Valider</button>
            </div>
        </form>

    @else
        <div class="alert alert-warning" role="alert">Aucune histoire pour l'utilisateur</div>
    @endif

@endsection
