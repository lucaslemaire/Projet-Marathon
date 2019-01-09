@extends('layouts.app')

@section('header')
<header class="v-header container">
    <div class="fullscreen-video-wrap">
        <video autoplay muted id="videoheader">
            <source src="{{ asset('images/videoheader.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="header-overlay"></div>
    <div class="header-content">
        <h1>ecrivez l'histoire</h1>
        <p>DigiTale</p>
        <a href="#nav" class="js-scrollTo btn"><span class="icon-chevron-down"></span></a>
    </div>
</header>
@endsection
@section('content')

    @if(!(count($histoires) === 0))

        <section class="histoires">
            @foreach ($histoires as $histoire)
                <div>
                    <p>{{$histoire -> titre}}</p>
                    <a href="{{route('lireHistoire',['id'=>$histoire->id])}}" class="btn-success" role="button"><img src='{{$histoire -> photo}}' /></a>
                </div>
            @endforeach
       </section>
      @else
        <div class="alert alert-warning" role="alert">Aucune histoire dans la base</div>
    @endif

@endsection