@extends('layout')

@section('content')
    <section id="sectionRegister">
        <h2 id="h2Register">S'inscrire :</h2>
        <form method="POST" action="{{ route('register') }}" id="formRegister">
            @csrf
            <h3 id="remplir" class="red none"> Remplissez les champs !</h3>
            <label for="name"></label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Je m'appelle :" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="email"></label>
            <input type="email" class="inputRegister form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Mon email :" autocomplete="off">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <fieldset id="selectFieldset">
                <div class="div-error-flex">
                    <label for="sexe" id="labelSexe"></label>
                    <select id="sexe" name="sexe">
                        <option value="">Mon sexe est</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="autre">Autre</option>
                    </select>
                    @error('sexe')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="div-error-flex">
                    <label for="orientation" id="labelOrientation"></label>
                    <select id="orientation" name="orientation">
                        <option value="">Mon orientation</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="autre">Autre</option>
                    </select>
                    @error('orientation')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
            </fieldset>

            <label for="password"></label>
            <input type="password" class="inputRegister form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Mon mot de passe :" autocomplete="off">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="confirm"></label>
            <input type="password" class="inputRegister" id="confirm" name="password_confirmation"
                   placeholder="Confirmer le mot de passe :">


            <label for="dateNaissance"></label>
            <div id="divNaissance">
                <input type="date" class="inputRegister form-control @error('dateNaissance') is-invalid @enderror"
                         id="dateNaissance" name="dateNaissance">
            </div>
            @error('dateNaissance')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button id="connect" type="submit" class="btnConfirm">{{ __("S'enregistrer") }}<img src="{{asset("img/arrow-right.png")}}" alt="arrow" id="arrowRight"></button>
            <h3 id="samePassword" class="red none"> Les mots de passe doivent être identiques !</h3>
            <!--<div id="suivant" class="btnConfirm"><p>Suivant</p><img src="{{asset("img/arrow-right.png")}}" alt="arrow" id="arrowRight"></div> -->
            <p id="loginP">J'ai un compte, <span><a href="#">je me connecte.</a></span>
            </p>
        </form>
    </section>
    <!--Modal-->

    <script type="text/javascript" src="{{ asset('js/register.js') }}"></script>
@endsection
