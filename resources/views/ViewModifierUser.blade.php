@extends('layout')
@section('content')

    <section>
        @if(isset($_SESSION['nouveauUser']))
            <h2>{{$user->name }} Complétez votre profil</h2>
        @else
            <h2>Modification du profil de {{$user->name }}</h2>
        @endif


        <form action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('put')

            <img src="{{asset($user->photo)}}" alt="photo de profil" class="profil" id="profilChangement">

            <div class="infoBlock"><br>
                <label for="photo">Changer la photo de profil</label>
                <input type="hidden" name="photo" value="{{asset($user->photo)}}">
                <input type="file" name="newPhoto" value="">
            </div>
            <div class="infoBlock">
                <label for="name">Nom (pseudo)</label>
                <input type="text" name="name" value="{{ $user->name }}" required id="name">
            </div>
            <div class="infoBlock">
                <label for="dateNaissance">Date de naissance</label>
                <input type="text" name="dateNaissance" value='{{ $user->dateNaissance }}' id="dateNaissance">
            </div>
            <div class="infoBlock">
                <label for="localisation">Localisation</label>
                <input type="text" name="localisation" value='{{ $user->localisation }}' id="localisation">
            </div>
            <div class="infoBlock">
                <label for="sexe">Sexe</label>
                <select name='sexe' id='sexe'>
                    <option value='{{ $user->sexe }}'>{{ $user->sexe }}</option>
                    <option value='femme'>Femme</option>
                    <option value='homme'>Homme</option>
                    <option value='autre'>Autre</option>
                </select>
            </div>
            <div class="infoBlock">
                <label for="orientation">Orientation</label>
                <select name='orientation' id='orientation'>
                    <option value='{{ $user->orientation }}'>{{ $user->orientation }}</option>
                    <option value='femme'>femme</option>
                    <option value='homme'>homme</option>
                    <option value='autre'>autre</option>
                </select>
            </div>
            <br>
            <div class="infoBlock">
                <label>Biographie</label>
                <textarea rows="5" cols="40" class="textarea" name="biographie">{{  $user->biographie }}</textarea>
            </div>
            <div class="field send-form-infos">
                <button id="connect" type="submit" class="btnConfirm">
                    <p>Valider</p>
                    <img src="http://localhost:8000/img/arrow-right.png" alt="arrow" id="arrowRight">
                </button>
            </div>
        </form>
    </section>

@endsection
