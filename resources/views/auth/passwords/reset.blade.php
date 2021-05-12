@extends('layouts.app')

@section('content')
    <header class="section-header | -top">
        <div class="section-header__content">
            <h4 class="header-sm"><p>Mot de passe oublie</p></h4>
            <h2 class="header | header-lg"><p>Reinitialiser <span></span></p></h2>
        </div>
    </header>
    <section class="container--xs | gutter-lg space-b">

        <section class="space--t-lg space--b">
            <header class="sub-section-header ">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form id="new_user" action="{{ route('password.update') }}" accept-charset="UTF-8" method="post"
                      class="standard-form-base | standard-form">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="form-group">
                        <div class="field-group"><label for="user_email" class="standard-label">Email
                                address</label> <input autofocus="autofocus" type="email" value=""
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

                    <div class="form-block"><input type="submit" name="commit" value="Connexion"
                                                   data-disable-with="Connexion" class="btn -light -full -solid">
                    </div>
                </form>
            </header>
        </section>

    </section>
@endsection

