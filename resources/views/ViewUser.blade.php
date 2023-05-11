@extends('layout')
    <!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="{{ url('../css/profil.css')}}">
</head>

@section('content')

    <div class="search-result-container">

        <article class="card">
            @if($user->photo != null)
                <img src="{{asset($user->photo)}}" alt="photo de profil" class="profil">
            @else
                <img src="{{asset("img/default.png")}}" alt="photo de profil" class="profil">
            @endif
            <h2 class="title">Information Personnel</h2>
            <p>Nom : {{ $user->name }}</p>
{{--            @if(Auth::$user()->id ==! $user->id)--}}
                <a href="{{route('users.edit', $user)}}">modifier le profil</a>
{{--            @endif--}}
            <p>Date de naissance : {{ $user->dateNaissance }}</p>
            <p>Sexe : {{ $user->sexe }}</p>
            <p>Orientation : {{ $user->orientation }}</p>
            <p>Localisation : {{ $user->localisation }}</p>
            <p>Biographie : {{ $user->biographie }}</p>
            <a href="{{route('user.amities', $user)}}">amis</a>


            <br><br><br>

            <h2 class="title">Centres d'intérêts : </h2>
            <div id="interets">
                <ul>
                    @foreach($user->interets as $interet)
                        <li class="interet">{{ $interet->nomInteret }}</li>
                    @endforeach
                </ul>
            </div>
{{--            @if(Auth::$user()->id ==! $user->id)--}}
                <br><br><br>
                <h2 class="title">Authentification : </h2>
                <p>Email : {{$user->email}}</p>
                <a href="/"><button>Modifier le mot de passe</button></a>
        </article>
{{--        @endif--}}
    </div>

@endsection
