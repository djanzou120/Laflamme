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


                    <h2 class="header">Bienvenue sur
                        La flamme de l'espoir
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
                <figure class="image -is8x20 | md:block hidden">
                    <img
                        src="{{asset('assets/IMG_7026.JPG')}}"
                        alt="" class="fit-cover">
                </figure>
                <figure class="image -is2x1 | md:hidden block">
                    <img
                        src="https://images.ctfassets.net/x5sq5djrgbwu/3p7W87W50wwOI7Yc31YXd9/41bc3e6600cd02de047511f49a9af9f6/priscilla-du-preez-234138-unsplash.jpg"
                        alt="" class="fit-cover">
                </figure>
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
        <profile_modal>

            <template slot="trigger">

                <figure class="profile-card__figure | image -is1x1">
                    <img src="https://dwv100zweqd2m.cloudfront.net/uploads/user/avatar/26/Jose_Neves_Avatar_good.jpg"
                         alt="">
                </figure>

                <div class="profile-card__main -with-logo">
                    <div class="profile-card__info">
                        <div class="profile-card__text">
                            <h4 class="header-md | visibility-shift delay-3 property-all duration-5 timing-1 ">José
                                Neves</h4>
                            <h5
                                class="header-sm -white | mt-1 | visibility-shift delay-4 property-all duration-5 timing-1 | profile-card__clearance">
                                Founder &amp; CEO of Farfetch</h5>
                        </div>
                        <figure class="profile-card--logo">
                            <img
                                src="https://dwv100zweqd2m.cloudfront.net/uploads/user/company_logo_reverse/26/farfetch-white.png"
                                class="fit-contain">
                        </figure>
                    </div>
                    <div class="pattern--green | visibility-shift delay-3 property-all duration-5 timing-1"></div>
                </div>

            </template>

            <template slot="image">
                <div class="profile-card__modal-figures">
                    <figure class="profile-card__figure profile-card--company_logo_container">
                        <img class=""
                             src="https://dwv100zweqd2m.cloudfront.net/uploads/user/company_logo_reverse/26/farfetch-white.png"
                             alt="">
                    </figure>
                    <figure class="profile-card__figure">
                        <a href="community.html">/members/26</a></figure>
                </div>
            </template>

            <header slot="header">
                <h4 class="header-xl">José Neves</h4>
                <h5 class="header-sm -light"> Founder &amp; CEO</h5>
            </header>

            <article slot="article">
                <article class="article-copy">
                    <blockquote>
                        &quot;Founders Pledge is a revolutionary approach to early stage philanthropy that allows
                        founders of
                        tech companies to “give back” at a point where they may be worth a lot on paper but very little
                        (if
                        anything!) in cash. Hopefully, the pledge will send a message to the global tech community that
                        tech
                        businesses may not be the biggest contributors to not-for-profit organisations and NGOs today,
                        but they
                        will be in the future and that we are materially committed to the values of corporate social
                        responsibility.&quot;
                    </blockquote>
                    <p>José Neves is founder and CEO of Farfetch, a global community of over 300 fashion boutiques
                        offering an
                        inspirational shopping experience to fashion-forward consumers. </p>
                    <p>In creating Farfetch, José brought together his interests and experience in fashion, technology,
                        design, wholesale and retail to create a business that gives boutiques the opportunity to
                        compete with
                        the leaders of fashion e-commerce. Farfetch now features more that 300 boutiques, has customers
                        in over
                        180 countries and receives an average of 9 million hits monthly.</p>
                    <p>José has received numerous accolades, including The Business of Fashion’s 500 People Shaping the
                        Fashion Industry in 2013, Ernst & Young’s 2013 Entrepreneur of the Year and Vogue’s
                        DirectorsOf.COM Top
                        Entrepreneur in 2011.</p>
                </article>
            </article>

            <template slot="aside">

                <!--       <dl class="definition-list">
          <dt></dt>
          <dd></dd>

          <dt></dt>
          <dd></dd>

          <dt></dt>
          <dd>
            <ul class="social-list -white | mt-3" role="menubar">
              <li><a href="" aria-label="Facebook"></a></li>
              <li><a href="" aria-label="Linked In"></a></li>
              <li><a href="" aria-label="Linked In"></a></li>
            </ul>
          </dd>
        </dl> -->

            </template>

        </profile_modal>
        <!--   Profile Card  - Modal  -->
        <profile_modal>

            <template slot="trigger">

                <figure class="profile-card__figure | image -is1x1">
                    <img
                        src="https://dwv100zweqd2m.cloudfront.net/uploads/user/avatar/1462/1BB333F8-5056-B731-4C0CC130A2DC5F52-profileimg.jpg"
                        alt="">
                </figure>

                <div class="profile-card__main -with-logo">
                    <div class="profile-card__info">
                        <div class="profile-card__text">
                            <h4 class="header-md | visibility-shift delay-3 property-all duration-5 timing-1 ">Mada
                                Seghete</h4>
                            <h5
                                class="header-sm -white | mt-1 | visibility-shift delay-4 property-all duration-5 timing-1 | profile-card__clearance">
                                Co-Founder of Branch Metrics</h5>
                        </div>
                        <figure class="profile-card--logo">
                            <img
                                src="https://dwv100zweqd2m.cloudfront.net/uploads/user/company_logo_reverse/1462/output-onlinepngtools__2_.png"
                                class="fit-contain">
                        </figure>
                    </div>
                    <div class="pattern--green | visibility-shift delay-3 property-all duration-5 timing-1"></div>
                </div>

            </template>

            <template slot="image">
                <div class="profile-card__modal-figures">
                    <figure class="profile-card__figure profile-card--company_logo_container">
                        <img class=""
                             src="https://dwv100zweqd2m.cloudfront.net/uploads/user/company_logo_reverse/1462/output-onlinepngtools__2_.png"
                             alt="">
                    </figure>
                    <figure class="profile-card__figure">
                        <a href="community.html">/members/1462</a></figure>
                </div>
            </template>

            <header slot="header">
                <h4 class="header-xl">Mada Seghete</h4>
                <h5 class="header-sm -light"> Co-Founder</h5>
            </header>

            <article slot="article">
                <article class="article-copy">
                    <p>Mada is Co-Founder and Head of Marketing at Branch Metrics, an award winning innovative mobile
                        linking
                        platform which is dramatically changing how content is discovered and delivered on the Internet.
                        Branch
                        powers deep linking and mobile attribution for some of the most advanced apps in the world,
                        including
                        names like Airbnb, Pinterest, Slack, Ticketmaster, Tinder, Starbucks, and Yelp.</p>
                    <p>Mada has a BS in Computer Engineering from Cornell and a masters in design from Stanford before
                        jumping
                        straight to the forefront of competitive startups in Silicon Valley. When she's not working on
                        the
                        Branch dashboard or partner products, Mada likes to go to growth hacking meet ups, play with
                        dogs, and
                        play the latest addictive mobile game. </p>
                </article>
            </article>

            <template slot="aside">

                <!--       <dl class="definition-list">
          <dt></dt>
          <dd></dd>

          <dt></dt>
          <dd></dd>

          <dt></dt>
          <dd>
            <ul class="social-list -white | mt-3" role="menubar">
              <li><a href="" aria-label="Facebook"></a></li>
              <li><a href="" aria-label="Linked In"></a></li>
              <li><a href="" aria-label="Linked In"></a></li>
            </ul>
          </dd>
        </dl> -->

            </template>

        </profile_modal>
        <!--   Profile Card  - Modal  -->
        <profile_modal>

            <template slot="trigger">

                <figure class="profile-card__figure | image -is1x1">
                    <img
                        src="https://dwv100zweqd2m.cloudfront.net/uploads/user/avatar/1461/718aaa48-10df-11e8-8cb6-b9ccc4c4dbbb.jpeg"
                        alt="">
                </figure>

                <div class="profile-card__main -with-logo">
                    <div class="profile-card__info">
                        <div class="profile-card__text">
                            <h4 class="header-md | visibility-shift delay-3 property-all duration-5 timing-1 ">Robbie
                                Schingler
                            </h4>
                            <h5
                                class="header-sm -white | mt-1 | visibility-shift delay-4 property-all duration-5 timing-1 | profile-card__clearance">
                                Co-founder and CSO of Planet Labs Inc.</h5>
                        </div>
                        <figure class="profile-card--logo">
                            <img
                                src="https://dwv100zweqd2m.cloudfront.net/uploads/user/company_logo_reverse/1461/output-onlinepngtools__7_.png"
                                class="fit-contain">
                        </figure>
                    </div>
                    <div class="pattern--green | visibility-shift delay-3 property-all duration-5 timing-1"></div>
                </div>

            </template>

            <template slot="image">
                <div class="profile-card__modal-figures">
                    <figure class="profile-card__figure profile-card--company_logo_container">
                        <img class=""
                             src="https://dwv100zweqd2m.cloudfront.net/uploads/user/company_logo_reverse/1461/output-onlinepngtools__7_.png"
                             alt="">
                    </figure>
                    <figure class="profile-card__figure">
                        <a href="community.html">/members/1461</a></figure>
                </div>
            </template>

            <header slot="header">
                <h4 class="header-xl">Robbie Schingler</h4>
                <h5 class="header-sm -light"> Co-founder and CSO</h5>
            </header>

            <article slot="article">
                <article class="article-copy">
                    <p>Robbie Schingler is the Co-Founder and Chief Strategy Officer (CSO) of Planet. As CSO of Planet,
                        Robbie
                        leads the company’s long-term strategic trajectory and manages Planet’s Product, Impact,
                        Corporate
                        Development and financing activities. He spearheaded Planet’s acquisition of BlackBridge in 2015
                        and
                        Boundless in 2019, was Managing Director of Planet Europe from 2016-2017 and recently acting as
                        Chairman
                        of the board for Planet Federal. Prior to Planet, Robbie spent 9 years at NASA, where he helped
                        build
                        the Small Spacecraft Office at NASA Ames and Chief of Staff for the Office of the Chief
                        Technologies at
                        NASA Headquarters. He received a MBA from Georgetown University, a MS in Space Studies.</p>
                </article>
            </article>

            <template slot="aside">


            </template>

        </profile_modal>

    </section>

    <!-- Logo List -->

    <!-- Panel Hero -->
    @include('component.contact.form')
@endsection
