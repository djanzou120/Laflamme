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

                    <h4 class="subheader | header-sm | pb-5">La FLAMME DE L’ESPOIR,</h4>

                </header>

                <article class="media-article__article | paragraphs">
                    <p>
                        Présidée par Samba Saphir, est une association à but non lucratif ayant pour but d’aider la femme, la jeune fille-mère et les enfants, vise entre autres à assurer l’épanouissement de l’Homme, la promotion des échanges culturels tant au niveau national qu’international, l’accès aux infrastructures de base au niveau sanitaire et alimentaire.
                    </p>
                </article>
            </div>

            <aside class="media-article__aside">
                <figure class="image -auto-height -is1x1 | md:block hidden">
                    <img
                        src="{{asset('assets/IMG_7026.JPG')}}"
                        alt="" class="fit-cover"/>
                </figure>
                <figure class="image -mobile -is12x16 | md:hidden block">
                    <img
                        src="{{asset('assets/IMG_7026.JPG')}}"
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
                <h2 class="header | header-lg">
                    <p>Aimer c’est bien, aider c’est encore mieux.<span class=""></span></p>
                </h2>
            </div>
        </header>

    </section>

    <!-- Why Now? -->
    <section id="impact" class="js-section | space-b--lg">
        <!-- Profile Slider -->
        <slider :opt="{
    items: 1,
    autoplay: true,
    mode: 'gallery',
    arrowKeys: false
}" class="profile-slider -hero slider-reset -no-gutters | clearfix">
            <template slot="slides">
                <div class="profile-slider__slide">
                    <div class="profile-slider__content">
                        <!-- Aside -->
                        <div class="profile-slider__aside">
                            <figure class="image -md:is2x1 -is16x9">
                                <img
                                    src="{{asset('assets/IMG_7026.JPG')}}"
                                    data-src="{{asset('assets/IMG_7026.JPG')}}"
                                    class="fit-cover" alt="" />
                            </figure>
                        </div>

                        <!-- Main -->
                        <div class="profile-slider__main">
                            <a href="stories/alex-depledge-never-thought-i-would-exit.html">
                                <div class="profile-slider__card | bg-green-darkest text-white">
                                    <h3 class="header-md | text-green-light mb-1">Alex Depledge</h3>
                                    <h3 class="header-sm -light | mb-4">Founder, Hassle.com</h3>

                                    <div class="paragraphs">
                                        <p>"Hand on heart, I had never thought about exiting Hassle.com... So when I did, I actually
                                            found it quite traumatic. Founders Pledge was a balm to that. A strange kind of therapy."</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-slider__slide">
                    <div class="profile-slider__content">
                        <!-- Aside -->
                        <div class="profile-slider__aside">
                            <figure class="image -md:is2x1 -is16x9">
                                <img
                                    src="{{asset('assets/IMG_6994.JPG')}}"
                                    data-src="{{asset('assets/IMG_6994.JPG')}}"
                                    class="fit-cover" alt="" />
                            </figure>
                        </div>

                        <!-- Main -->
                        <div class="profile-slider__main">
                            <a href="stories/alex-depledge-never-thought-i-would-exit.html">
                                <div class="profile-slider__card | bg-green-darkest text-white">
                                    <h3 class="header-md | text-green-light mb-1">Alex Depledge</h3>
                                    <h3 class="header-sm -light | mb-4">Founder, Hassle.com</h3>

                                    <div class="paragraphs">
                                        <p>"Hand on heart, I had never thought about exiting Hassle.com... So when I did, I actually
                                            found it quite traumatic. Founders Pledge was a balm to that. A strange kind of therapy."</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-slider__slide">
                    <div class="profile-slider__content">
                        <!-- Aside -->
                        <div class="profile-slider__aside">
                            <figure class="image -md:is2x1 -is16x9">
                                <img
                                    src="{{asset('assets/IMG_6997.JPG')}}"
                                    data-src="{{asset('assets/IMG_6997.JPG')}}"
                                    class="fit-cover" alt="" />
                            </figure>
                        </div>

                        <!-- Main -->
                        <div class="profile-slider__main">
                            <a href="stories/alex-depledge-never-thought-i-would-exit.html">
                                <div class="profile-slider__card | bg-green-darkest text-white">
                                    <h3 class="header-md | text-green-light mb-1">Alex Depledge</h3>
                                    <h3 class="header-sm -light | mb-4">Founder, Hassle.com</h3>

                                    <div class="paragraphs">
                                        <p>"Hand on heart, I had never thought about exiting Hassle.com... So when I did, I actually
                                            found it quite traumatic. Founders Pledge was a balm to that. A strange kind of therapy."</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-slider__slide">
                    <div class="profile-slider__content">
                        <!-- Aside -->
                        <div class="profile-slider__aside">
                            <figure class="image -md:is2x1 -is16x9">
                                <img
                                    src="{{asset('assets/IMG_6993.JPG')}}"
                                    data-src="{{asset('assets/IMG_6993.JPG')}}"
                                    class="fit-cover" alt="" />
                            </figure>
                        </div>

                        <!-- Main -->
                        <div class="profile-slider__main">
                            <a href="stories/alex-depledge-never-thought-i-would-exit.html">
                                <div class="profile-slider__card | bg-green-darkest text-white">
                                    <h3 class="header-md | text-green-light mb-1">Alex Depledge</h3>
                                    <h3 class="header-sm -light | mb-4">Founder, Hassle.com</h3>

                                    <div class="paragraphs">
                                        <p>"Hand on heart, I had never thought about exiting Hassle.com... So when I did, I actually
                                            found it quite traumatic. Founders Pledge was a balm to that. A strange kind of therapy."</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-slider__slide">
                    <div class="profile-slider__content">
                        <!-- Aside -->
                        <div class="profile-slider__aside">
                            <figure class="image -md:is2x1 -is16x9">
                                <img
                                    src="{{asset('assets/IMG_7026.JPG')}}"
                                    data-src="{{asset('assets/IMG_7026.JPG')}}"
                                    class="fit-cover" alt="" />
                            </figure>
                        </div>

                        <!-- Main -->
                        <div class="profile-slider__main">
                            <a href="stories/alex-depledge-never-thought-i-would-exit.html">
                                <div class="profile-slider__card | bg-green-darkest text-white">
                                    <h3 class="header-md | text-green-light mb-1">Alex Depledge</h3>
                                    <h3 class="header-sm -light | mb-4">Founder, Hassle.com</h3>

                                    <div class="paragraphs">
                                        <p>"Hand on heart, I had never thought about exiting Hassle.com... So when I did, I actually
                                            found it quite traumatic. Founders Pledge was a balm to that. A strange kind of therapy."</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </template>
        </slider>
    </section>

    <!-- Profile Grid -->
    <section id="members"
             class="js-section | profile-cards flex-grid flex-wrap  | container gutter-md  space-b mt-5 pt-5">
        <!-- Section Header - Basic -->

        <header class="section-header -basic mt-5 pt-5 ">
            <div class="section-header__content mt-5 pt-5">
                <div class="section-header__name">
                    <h2 class="header | header-lg">Mot de la Fondatrice</h2>
                </div>
            </div>
        </header>

        <!--   Profile Card  - Modal  -->
        <div class="director">
            <div class="col- img-profile">
                <div>
                    <img src="{{asset('assets/samba.jpeg')}}" alt="">
                </div>
            </div>
            <div class="col-6 content-description">
                <h1 class="name">SAMBA Saphir</h1>
{{--                <h3 class="poste">Fondatrice</h3>--}}
                <p class="description-poste">
                    Native du département Nyong et Mfoumou et d’Emini, je suis amoureuse d’Akonolinga La Belle, la ville ayant pour mascotte, le poisson appelé « Kanga » ; c’est un poisson qui n’est pêché que dans le « Nyong ».
                </p>
                <p class="description-poste">
                    Après mon baccalauréat, j’ai décidé de poursuivre mes études à l’étranger, où je réside pour l’instant. Après un cycle de chimie, j’ai décidé de compléter mon cursus universitaire avec un cycle dans le domaine du Développement Durable, un crochet dans le domaine HQSE et je termine aujourd’hui, des études de Responsable de Projets.
                </p>
                <p class="description-poste">
                    Comme la plupart des écrivains, je suis une férue de lecture ; je lis depuis mon enfance. J’ai commencé à écrire à l’âge de 12 ans, par un journal intime. J’ai dû y faire une pause pour me consacrer à mes études et ai repris des décennies plus tard.
                </p>
                <p class="description-poste">
                    En plus de mes études et autres activités, j’ai un goût prononcé pour tout ce qui a trait à l’Humanitaire, raison pour laquelle, je suis présidente d’une association à but non lucratif, travaille en partenariat avec une association basée à Ayos au Cameroun et administratrice d’une autre association en France.
                </p>
                <p class="description-poste">
                    En tant que personne, l’on me dit assez simple, méfiante, réservée et loyale.
                </p>
                <ul class="social-list social-profile -flush-l" role="menubar">

                    <li>
                        <a href="#" target="_blank" aria-label="Facebook"><span
                                class="icon | icon--fb "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M12.46218,31V18H8v-6h4.46218V7.80998C12.46218,3.24577,15.35166,1,19.42325,1
      c1.95033,0,3.62655,0.1452,4.11504,0.21011v4.76987l-2.82387,0.00128C18.50007,5.98127,18,7.0335,18,8.57757V12h6l-2,6h-4v13
      H12.46218z" />
                      </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" aria-label="Linked In"><span
                                class="icon | icon--linkedin "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M30.66667,0H1.33333C0.59695,0,0,0.59695,0,1.33333v29.33333C0,31.40305,0.59695,32,1.33333,32h29.33333
      C31.40305,32,32,31.40305,32,30.66667V1.33333C32,0.59695,31.40305,0,30.66667,0z M9.49262,27.26738H4.74176V11.99653h4.75086
      V27.26738z M7.1185,9.91013c-1.5243,0-2.75347-1.23305-2.75347-2.75258c0-1.5191,1.22916-2.75218,2.75347-2.75218
      c1.51823,0,2.75084,1.23308,2.75084,2.75218C9.86933,8.67708,8.63673,9.91013,7.1185,9.91013z M27.26871,27.26738h-4.74569v-7.42622
      c0-1.77085-0.0304-4.04907-2.46613-4.04907c-2.4696,0-2.8464,1.93013-2.8464,3.92231v7.55298h-4.74045V11.99653h4.54951v2.08764
      h0.06507c0.6328-1.20053,2.18142-2.46658,4.49049-2.46658c4.80551,0,5.6936,3.16196,5.6936,7.27476V27.26738z" />
                      </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" aria-label="Linked In"><span
                                class="icon | icon--linkedin "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M32,6.07561c-1.17735,0.52214-2.44259,0.87512-3.77071,1.03378
      c1.35555-0.81248,2.39653-2.09911,2.88667-3.63218c-1.26845,0.75237-2.67349,1.29874-4.16896,1.5932
      c-1.19757-1.276-2.90382-2.07328-4.79203-2.07328c-3.6259,0-6.56538,2.93949-6.56538,6.56504
      c0,0.51461,0.05807,1.0156,0.16997,1.49615C10.30329,10.78454,5.46576,8.17083,2.2277,4.19882
      C1.66258,5.16848,1.33887,6.29621,1.33887,7.49939c0,2.27766,1.15906,4.28716,2.92062,5.46451
      C3.1833,12.92984,2.171,12.63447,1.28582,12.14272c-0.00046,0.02744-0.00056,0.05487-0.00056,0.08253
      c0,3.18096,2.26302,5.83445,5.2664,6.43754C6.00071,18.81275,5.42072,18.893,4.82199,18.893
      c-0.42305,0-0.83433-0.04115-1.2352-0.11774c0.83546,2.60823,3.26,4.50639,6.13286,4.55943
      c-2.24691,1.76077-5.07769,2.81032-8.15355,2.81032c-0.52993,0-1.05253-0.03109-1.5661-0.09167
      c2.90543,1.86272,6.35632,2.94954,10.06382,2.94954c12.07582,0,18.67926-10.00381,18.67926-18.67944
      c0-0.28463-0.00639-0.56776-0.01897-0.8493C30.00674,8.54849,31.11985,7.39218,32,6.07561z" /></svg>

                        </a>
                    </li>
            </div>
        </div>


    </section>

    <!-- Logo List -->

    <!-- Panel Hero -->
    @include('component.contact.form')
@endsection
