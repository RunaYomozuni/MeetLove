@extends('layout')
@section('content')

    <div class="search-result-container">

        <h2>Liste d'amis de : {{$user->name }}</h2>

        <!-- Résultats de la recherche -->
        @foreach($lesAmities as $amities)

            <article class="card">
                @if($user->photo != null)
                    <img src="{{asset($user->photo)}}" alt="photo de profil" class="profil">
                @else
                    <img src="{{asset("img/default.png")}}" alt="photo de profil" class="profil">
                @endif
                <div>
                    <h4>Prénom : {{$amities[0]->name}} <a href="{{route('users.show', $amities[0])}}">voir profil </a></h4>
                    <p>Sexe : {{ $amities[0]->sexe}}</p>
                    @if( $amities[1]->accepter == 0)
                        Demande en attente
                        @if($amities[2] == "receveur")
                            <form action="{{route('amities.destroy', $amities[1]->id)}}" method="post">
                                @csrf
                                @method('destroy')
                                <button type="submit" title="supprimer la demande">
                                    <div class="trash-can">
                                        <div class="trash-canPart1"></div>
                                        <div class="trash-canPart2"></div>
                                        <div class="trash-canPart3">
                                            <div class="trash-canPart4"></div>
                                            <div class="trash-canPart5"></div>
                                            <div class="trash-canPart6"></div>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        <form action="{{route('amities.update', $amities[1]->id)}}" method="post">
                                @csrf
                                @method('put')
                            <button type="submit" title="accepter la demande">
                                <div class="check">
                                    <div class="chechPart1"></div>
                                    <div class="chechPart2"></div>
                                </div>
                            </button>
                        </form>
                        @endif

                    @else
                        Demande acceptée <form action="{{route('amities.destroy', $amities[1]->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button title="supprimer de la liste d'amis">
                                <div class="trash-can">
                                    <div class="trash-canPart1"></div>
                                    <div class="trash-canPart2"></div>
                                    <div class="trash-canPart3">
                                        <div class="trash-canPart4"></div>
                                        <div class="trash-canPart5"></div>
                                        <div class="trash-canPart6"></div>
                                    </div>
                                </div>
                            </button>
                        </form>

                        @endif
                        </p>
                </div>
            </article>

    @endforeach
@endsection




