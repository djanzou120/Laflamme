@extends('layouts.app')

@section('content')

    <main role="main">
        <!-- Section Header -->
        <header class="section-header | -top">
            <div class="section-header__content">
                <h2 class="header | header-lg">
                    <p>Rejoindre La Flamme de l'Espoir <span class=""></span></p>
                </h2>
            </div>
        </header>


        <!-- Page Menu-->
        <!-- Page Menu -->
        <nav class="page-menu | gutter | ">
            <ul class="page-menu__bar menu-bar">

                <li class="page-menu__item">
                    <smooth_scroll class="link" :anchor="'#who'" :offset="120">Nous rejoindre</smooth_scroll>
                </li>
                <li class="page-menu__item">
                    <smooth_scroll class="link" :anchor="'#pledge'" :offset="120">Contacter La Flamme de l'Espoir</smooth_scroll>
                </li>
            </ul>
        </nav>


        <!-- Who We Are -->
        <section id="who">
            <!-- Media Article
    Variations:

    -reverse
    -features

    Content Types:
    - Standard (link group or buttons)
    - Gallery

    -->
            <div class="media-article -article-indent -illustration | container ">
                <div class="media-article__main | xl:pr-12 md:pb-12">
                    <header class="media-article__header">
                        <h2 class="header">Prêt à soutenir notre action ?</h2>
                    </header>

                    <article class="media-article__article | paragraphs">
                        <p>
                            Pour faire partir de l’association, il faut au préalable
                            envoyer une demande motivée au bureau de l’association, qui la valide après
                            étude.
                        </p>
                    </article>

                    <div class="media-article__actions | md:mt-6 mt-8">
                        <div class="link-group">
                            <smooth_scroll class="link -underline" :anchor="'#pledge'" :offset="120">Plus d'information

                            </smooth_scroll>
                        </div>
                    </div>

                </div>

                <aside class="media-article__aside">
                    <figure class="image  -is12x16 | md:block hidden">
                        <img
                            src="https://images.ctfassets.net/x5sq5djrgbwu/3I4ZBAxtwkiRqN78sL7OFi/219bdb9929d1a079671c94a4411c41dc/who_can_join_final_may20.jpg"
                            alt="" class="fit-cover" />
                    </figure>
                    <figure class="image -mobile -is2x1 | md:hidden block">
                        <img
                            src="https://images.ctfassets.net/x5sq5djrgbwu/291WHiTyom5E6DcMGwSvNQ/091105577ddc93e6d9940267106ad9f4/who_can_join_final_thea_edits4_who_can_join.png"
                            alt="" class="fit-cover" />
                    </figure>

                </aside>
            </div>
        </section>

     @include('component.contact.form')
        <!-- Media Article  -stats -->

@endsection
