@extends('layouts.app')

@section('content')
    <header class="section-header | -top">
        <div class="section-header__content">
            <h2 class="header | header-lg"><p>Connexion <span></span></p></h2>
        </div>
    </header>
    <section class="container--xs | gutter-lg space-b">

        <section class="space--t-lg space--b">
            <header class="sub-section-header "> <div class="md:flex-grid">
                    <main class=" md:w-3/4 |  md:pr-20">
                        <form id="new_user" action="{{route('login')}}" accept-charset="UTF-8" method="post"
                              class="standard-form-base | standard-form">
                            @csrf
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
                            <div class="form-group">
                                <div class="field-group"><label for="user_password" class="standard-label">Password</label>
                                    <input autocomplete="off" type="password" name="password" id="user_password">
                                </div>
                            </div>
                            <div class="form-block"><input type="submit" name="commit" value="Connexion"
                                                           data-disable-with="Connexion" class="btn -light -full -solid">
                            </div>
                        </form>
                    </main>
                    <aside class="mr-auto | md:w-1/4 | md:pr-12 | mb-10"><h5 class="header-md mb-3">
                            Mot de passe oublie?
                        </h5>
                        <p><a href="{{ route('password.request') }}" class="link -green">Reinitialiser</a></p></aside>
                </div></header>
        </section>

    </section>
@endsection
