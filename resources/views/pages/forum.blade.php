@extends('layouts.app')

@section('content')

    <header class="section-header | -top">
        <div class="section-header__content">
            <h4 class="header-sm">
                <p>Forum</p>
            </h4>
            <h2 class="header | header-lg">
                <p>Forum de discussion<span class=""></span></p>
            </h2>
        </div>
    </header>

    <section id="research" class="js-section | bg-oat-light | space-t space-b">
        <!-- Research reports - Section Header  -->
        <header class="section-header -basic  ">
            <div class="section-header__content">
                <div class="section-header__name">
                    <h2 class="header | header-lg">Categories</h2>
                </div>


            </div>
        </header>
        <div class="alert alert-danger" style="color:darkred; text-align: center">
            {{Session::get('message')}}
        </div>
        @auth()
            @include('component.forum.add')
        @endauth

    <!-- Research report cards -->
        <div class="flip-cards | md:flex-grid justify-between | container gutter-md">

            <!--
    #################
  -->

            @foreach($subjects as $subject)
                @include('component.forum.item')
            @endforeach


        </div>
    </section>

    <!-- Panel Hero -->
    <header class="panel-hero bg-green-darkest">

        <h2 class="header-lg | mb-4">Nous rejoindre</h2>

        <div class="panel-hero__descr | paragraphs  container--xs">
            <p>Pret a rejoindre l'Association des Elites du sud ?</p>
        </div>


        <div class="panel-hero__action | pt-8 ">
            <a href="start-your-journey.html" class="btn -wide" target="_self">
                Nous contacter
            </a>
        </div>

    </header>



@endsection
