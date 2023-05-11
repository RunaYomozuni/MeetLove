@extends('layout')


@section('content')

    <div class="search-result-container">
        <!-- Résultats de la recherche -->
        @foreach($users as $user)
            <article class="card">
                @if($user->photo != null)
                    <img src="{{asset($user->photo)}}" alt="photo de profil" class="profil">
                @else
                    <img src="{{asset("img/default.png")}}" alt="photo de profil" class="profil">
                @endif
                <h2>Nom : {{ $user->name }}</h2> <a href="{{route('users.edit', $user)}}">modifier le profil</a>
                <p>Date de naissance : {{ $user->dateNaissance }}</p>
                <p>Localisation : {{ $user->localisation }}</p>
                <p>Sexe : {{ $user->sexe }}</p>
                <p>Orientation : {{ $user->orientation }}</p>
                <p>Biographie : {{ $user->biographie }}</p>
                <a href="{{route('user.amities', $user)}}">voir ses amis</a>

            </article>
        @endforeach
    </div>

@endsection
