@extends('layouts.app')

@section('content')
    <header class="section-header | -top">
        <div class="section-header__content">
            <h2 class="header | header-lg"><p>S'inscrire sur Elat Bobegnan<span></span></p></h2>
        </div>
    </header>
    <section class="container--xs | gutter-lg space-b">

        <section class="space--t-lg space--b">
            <header class="sub-section-header ">
                <form id="new_user" action="{{route('register')}}" accept-charset="UTF-8" method="post"
                      class="standard-form-base | standard-form">
                    @csrf
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="form-group">
                        <div class="field-group"><label for="last_name" class="standard-label">Prenom</label> <input
                                autofocus="autofocus" type="text" value=""
                                name="last_name" id="last_name"></div>
                    </div>
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="form-group">
                        <div class="field-group"><label for="first_name" class="standard-label">Nom</label> <input
                                autofocus="autofocus" type="text" value=""
                                name="first_name" id="first_name"></div>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="form-group">
                        <div class="field-group"><label for="user_email" class="standard-label">Email
                            </label> <input autofocus="autofocus" type="email" value=""
                                            name="email" id="user_email"></div>
                    </div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="form-group">
                        <div class="field-group"><label for="user_password" class="standard-label">Mot de passe</label>
                            <input autocomplete="off" type="password" name="password" id="user_password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="field-group"><label for="user_password" class="standard-label">Confirmer mot de
                                passe</label>
                            <input autocomplete="off" type="password" name="password_confirmation" id="user_password">
                        </div>
                    </div>
                    <div class="form-block"><input type="submit" name="commit" value="S'inscrire"
                                                   data-disable-with="Connexion" class="btn -light -full -solid">
                    </div>
                </form>
            </header>
        </section>
    </section>
@endsection
