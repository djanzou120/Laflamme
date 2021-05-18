@extends('layouts.app')

@section('content')
    <style>
        .paragraphs p {
            font-weight: 700 !important;
        }
    </style>

    <section class=" py-0 " id="covid-resources">


    </section>

    <section class="space-t--sm">
        <!-- Media Article
Variations:

-reverse
-features

Content Types:
- Standard (link group or buttons)
- Gallery

-->
        <div class="media-article -highlight -top -illustration | container ">
            <div class="media-article__main | xl:pr-12 md:pb-12">
                <header class="media-article__header">


                    <h2 class="header">Bienvenue
                    </h2>

                    <h4 class="subheader | header-sm | pb-5">Association de l’élite de la vallée du ntem</h4>

                </header>

                <article class="media-article__article | paragraphs">
                    <p>Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                        tempora
                        incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                        quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut ali </p>
                </article>
            </div>

            <aside class="media-article__aside">
                <figure class="image -auto-height -is1x1 | md:block hidden">
                    <img
                        src="{{asset('assets/burgundy-49.png')}}"
                        alt="" class="fit-cover"/>
                </figure>
                <figure class="image -mobile -is12x16 | md:hidden block">
                    <img
                        src="https://images.ctfassets.net/x5sq5djrgbwu/2RwXRlX3zHVjJcoUNNcFmK/e9881e02a0f6790894ec42b39b230a20/finding_solutions-cropped.png"
                        alt="" class="fit-cover"/>
                </figure>

            </aside>
        </div>


    </section>

    <!-- Why FP? -->
    <section class="bg-oat-light" id="why-fp">
        <!-- Section Header -->
        <header class="section-header | ">
            <div class="section-header__content">
                <h4 class="header-sm">
                    <p>Pourquoi La Flamme de l'espoir ?</p>
                </h4>

                <h2 class="header | header-lg">
                    <p>Cela commence par l'idee d'un regroupement <br>mais c'est bien plus. <span class=""></span></p>
                </h2>

                <div class="section-header__descr  | paragraphs">
                    <p>Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                        tempora
                        incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>

            </div>
        </header>


        <!-- Highlight Cards -->
        <div class="highlight-cards | md:flex-grid container lg:gutter | md:pb-0 pb-4">
            <div class="highlight-card">
                <div class="highlight-card__content">
                    <div class="highlight-card__icon | text-green">
                <span class="icon | icon--arrow -lg">
                  <img src="{{asset('assets/asset_19.svg')}}"  class="tortoise">
                </span>
                    </div>

                    <div class="highlight-card__main">
                        <h4 class="header-md">Vision</h4>
                        <div class="paragraphs -xs">
                            <p>
                            <p>Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                                modi
                                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-card__content">
                    <div class="highlight-card__icon | text-green">
                <span class="icon | icon--arrow -lg">
                  <img src="{{asset('assets/asset_17.svg')}}"/>
                </span>
                    </div>

                    <div class="highlight-card__main">
                        <h4 class="header-md">Objectifs</h4>
                        <div class="paragraphs -xs">
                            <p>
                            <p>Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                                modi
                                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem..</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-card__content">
                    <div class="highlight-card__icon | text-green">
                <span class="icon | icon--arrow -lg">
                  <img src="{{asset('assets/asset_18.svg')}}"  style="transform:rotate(90)">
                </span>
                    </div>

                    <div class="highlight-card__main">
                        <h4 class="header-md">Réalisations</h4>
                        <div class="paragraphs -xs">
                            <p>
                            <p>Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                                modi
                                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Why Now? -->
    <section class="bg-green-darkest text-white" id="why-now">
        <!-- Media Article
Variations:

-reverse
-features

Content Types:
- Standard (link group or buttons)
- Gallery

-->
        <div class="media-article -features | container">

            <div class="media-article__main | gutter-l--lg | sm:pr-12 md:pb-12">

                <!-- Header -->
                <header class="media-article__header | md:pt-24 pt-12">
                    <h4 class="header-sm -light | pb-4">Why now?</h4>
                    <h2 class="header-lg | pb-12">Solidarités locales ou régionales du sud nous sommes le fruit de
                        l’activité
                        des personnes consacrées aux culture du Sud et à la solidarité.</h2>
                </header>

                <!-- Groups -->
                <div class="lg:flex md:pb-8">

                    <!-- Group -->
                    <div class="lg:w-1/2">

                        <article class="media-article__article">

                            <!-- Features -->
                            <div class="media-article__feature">
                                <h5 class="header-md | text-green-light | mb-3">Un espace de retrouvaille</h5>
                                <div class="paragraphs -xs">
                                    <p>Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                        numquam eius modi
                                        tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                </div>
                            </div>
                            <div class="media-article__feature">
                                <h5 class="header-md | text-green-light | mb-3">Un espace de discussion</h5>
                                <div class="paragraphs -xs">
                                    <p>Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                        numquam eius modi
                                        tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                </div>
                            </div>

                        </article>
                    </div>

                    <!-- Group -->
                    <div class="lg:w-1/2 lg:flex lg:items-end lg:justify-end lg:pl-10">
                        <div class="media-article__actions">
                            <a href="{{route('forum')}}" class="btn -light">Explorer notre forum</a>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="media-article__aside  | md:pb-0 pb-4">


                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('assets/IMG_7026.JPG')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('assets/IMG_7026.JPG')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('assets/IMG_7026.JPG')}}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

{{--                <figure class="image -is8x20 | md:block hidden">--}}
{{--                    <img--}}
{{--                        src="{{asset('assets/IMG_7026.JPG')}}"--}}
{{--                        alt="" class="fit-cover">--}}
{{--                </figure>--}}
{{--                <figure class="image -is2x1 | md:hidden block">--}}
{{--                    <img--}}
{{--                        src="https://images.ctfassets.net/x5sq5djrgbwu/3p7W87W50wwOI7Yc31YXd9/41bc3e6600cd02de047511f49a9af9f6/priscilla-du-preez-234138-unsplash.jpg"--}}
{{--                        alt="" class="fit-cover">--}}
{{--                </figure>--}}
            </aside>

        </div>
    </section>

    <!-- Profile Grid -->
    <section id="members"
             class="js-section | profile-cards flex-grid flex-wrap  | container gutter-md  space-b mt-5 pt-5">
        <!-- Section Header - Basic -->

        <header class="section-header -basic mt-5 pt-5 ">
            <div class="section-header__content mt-5 pt-5">
                <div class="section-header__name">
                    <h2 class="header | header-lg">Membres du Bureau</h2>
                </div>
            </div>
        </header>

        <!--   Profile Card  - Modal  -->
        <div class="row">
            <div class="col-4">
                <div>
                    <img src="https://dwv100zweqd2m.cloudfront.net/uploads/user/avatar/26/Jose_Neves_Avatar_good.jpg" alt="">
                </div>
            </div>
            <div class="col-6">
                askjdnaskd aks dkas dksakd
            </div>
        </div>


    </section>

    <!-- Logo List -->

    <!-- Panel Hero -->
    @include('component.contact.form')
@endsection
