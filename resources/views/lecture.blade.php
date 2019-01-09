@extends ('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/lecture.css') }}">
    <div id="lecture">
        <p>{{$histoire->titre}}</p>
        <p>{{$histoire->pitch}}</p>
        <div><img src='{{$histoire->photo}}' width="300px" height="auto" alt=""/></div>
        <a href="{{route('lireChapitre',['id'=>$histoire->premierChapitre()->id])}}">{{$histoire->premierChapitre()->titrecourt}}</a>
    </div>
@endsection
