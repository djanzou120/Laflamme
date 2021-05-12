@extends('layouts.app')

@section('content')
    <!-- Section Header -->
    <header class="section-header | -top">
        <div class="section-header__content">
            <h4 class="header-sm">
                <p>A propos</p>
            </h4>

            <h2 class="header | header-lg">
                <p>Une association pour une vision<span class=""></span></p>
            </h2>


        </div>
    </header>


    <!-- Page Menu-->
    <!-- Page Menu -->
    <nav class="page-menu | gutter | ">
        <ul class="page-menu__bar menu-bar">

            <li class="page-menu__item">
                <smooth_scroll class="link" :anchor="'#ethos'" :offset="120">Status</smooth_scroll>
            </li>
            <li class="page-menu__item">
                <smooth_scroll class="link" :anchor="'#members'" :offset="120">Membres</smooth_scroll>
            </li>
            <li class="page-menu__item">
                <smooth_scroll class="link" :anchor="'#impact-journeys'" :offset="120">Gallerie</smooth_scroll>
            </li>
            <li class="page-menu__item">
                <smooth_scroll class="link" :anchor="'#join'" :offset="120">Règlements</smooth_scroll>
            </li>
        </ul>
    </nav>


    <!-- Ethos -->
    <section id="ethos" class="js-section space-t--sm space-b">
        <!-- Media Article
Variations:

-reverse
-features

Content Types:
- Standard (link group or buttons)
- Gallery

-->
        <div class="media-article  | container gutter-l--md">
            <div class="media-article__main | sm:px-12 md:pb-12">
                <header class="media-article__header">

                    <h4 class="preheader | header-sm | pb-5">Vision</h4>

                    <h2 class="header">Notre vision</h2>


                </header>

                <article class="media-article__article | paragraphs">
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                        dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore
                        et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam
                        corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
                </article>


                <div class="media-article__actions | md:mt-12 mt-5">
                    <div class="link-group">
                        <!-- Gallery Modal -->

                        <smooth_scroll class="link" :anchor="'#impact-journeys'" :offset="120">Parcourir la gallerie
                        </smooth_scroll> <span class="icon | icon--arrow -xs -stroke-4"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                             viewBox="0 0 13 39">
                    <polyline stroke="currentColor" class="stroke" points="0.9,38.5 11.9,19.5 0.9,0.5 " /></svg></span>

                    </div>
                </div>
            </div>

            <aside class="media-article__aside">
                <figure class="image  -is12x16 | md:block hidden">
                    <img
                        src="https://images.ctfassets.net/x5sq5djrgbwu/M8KrhMWNgPgtOzQOQ17b9/ee54e6a74f9309c86169055adcfbffb2/antenna-502680-unsplash.jpg"
                        alt="" class="fit-cover" />
                </figure>
                <figure class="image -mobile -is2x1 | md:hidden block">
                    <img
                        src="https://images.ctfassets.net/x5sq5djrgbwu/1xpZdNkmNGR0zdZkjpPCFR/de3fcfdec2dec9e61af021dab17d4186/antenna-502680-unsplash.jpg"
                        alt="" class="fit-cover" />
                </figure>

            </aside>
        </div>



    </section>



    <!-- Impact Journeys -->
    <header class="text-center mb-6 space-t">
        <h4 class="header-sm">Explorer</h4>
    </header>

    <section id="impact-journeys" class="js-section | space-b--lg">
        <!-- Profile Slider -->
        <slider :opt="{
    items: 1,
    autoplay: false,
    mode: 'gallery',
    arrowKeys: true
}" class="profile-slider -hero slider-reset -no-gutters | clearfix">
            <template slot="slides">
                <div class="profile-slider__slide">
                    <div class="profile-slider__content">
                        <!-- Aside -->
                        <div class="profile-slider__aside">
                            <figure class="image -md:is2x1 -is16x9">
                                <img
                                    src="https://images.ctfassets.net/x5sq5djrgbwu/3nxTrLnbmp2LIY68hY3Lm5/ae850f9ae3305c4f7104f489ff7fb7b7/SF.jpg"
                                    data-src="https://images.ctfassets.net/x5sq5djrgbwu/3nxTrLnbmp2LIY68hY3Lm5/ae850f9ae3305c4f7104f489ff7fb7b7/SF.jpg"
                                    class="fit-cover" alt="" />
                            </figure>
                        </div>

                        <!-- Main -->
                        <div class="profile-slider__main">
                            <a href="stories/silicon-valley-solving-the-problems-that-matter-most.html">
                                <div class="profile-slider__card | bg-green-darkest text-white">
                                    <h3 class="header-md | text-green-light mb-1">Jeremy Le Van</h3>
                                    <h3 class="header-sm -light | mb-4">Co-founder, Sunrise</h3>

                                    <div class="paragraphs">
                                        <p>"I think we can get so narrowly absorbed with the next funding round or the latest investment
                                            trend that we lose sight of the bigger picture."</p>
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
                                    src="https://images.ctfassets.net/x5sq5djrgbwu/5xO5rHQnFxTxys9tBKCy9x/d9ff04647e1741d736f3366dfcae72ea/alex_depledge_5.png"
                                    data-src="https://images.ctfassets.net/x5sq5djrgbwu/5xO5rHQnFxTxys9tBKCy9x/d9ff04647e1741d736f3366dfcae72ea/alex_depledge_5.png"
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
                                    src="https://images.ctfassets.net/x5sq5djrgbwu/6fvMKkA74piwSd7pnGeHgF/edb857538b25329d0789fc9b350aedc4/Matt_Hunter_6.jpg"
                                    data-src="https://images.ctfassets.net/x5sq5djrgbwu/6fvMKkA74piwSd7pnGeHgF/edb857538b25329d0789fc9b350aedc4/Matt_Hunter_6.jpg"
                                    class="fit-cover" alt="" />
                            </figure>
                        </div>

                        <!-- Main -->
                        <div class="profile-slider__main">
                            <a href="stories/the-art-of-impactful-giving.html">
                                <div class="profile-slider__card | bg-green-darkest text-white">
                                    <h3 class="header-md | text-green-light mb-1">Matt Hunter</h3>
                                    <h3 class="header-sm -light | mb-4">Founder</h3>

                                    <div class="paragraphs">
                                        <p>"I no longer think about return on investment as something tied to the dollars in my bank
                                            account."</p>
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
                                    src="https://images.ctfassets.net/x5sq5djrgbwu/5QZ8MsKzoXjSyk8JxKDn6J/fbed598113749668d267434f44b8117a/Ben_Medlock_6.jpg"
                                    data-src="https://images.ctfassets.net/x5sq5djrgbwu/5QZ8MsKzoXjSyk8JxKDn6J/fbed598113749668d267434f44b8117a/Ben_Medlock_6.jpg"
                                    class="fit-cover" alt="" />
                            </figure>
                        </div>

                        <!-- Main -->
                        <div class="profile-slider__main">
                            <a href="stories/the-simple-path-to-impact.html">
                                <div class="profile-slider__card | bg-green-darkest text-white">
                                    <h3 class="header-md | text-green-light mb-1">Ben Medlock</h3>
                                    <h3 class="header-sm -light | mb-4">Co-founder, Swiftkey</h3>

                                    <div class="paragraphs">
                                        <p>"Quite a lot of philanthropy still relies on guesswork or gut feeling, and I didn’t want to
                                            perpetuate that."</p>
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
                                    src="https://images.ctfassets.net/x5sq5djrgbwu/2XrkwU9snEIeU1qHPVlHCX/b96ff8ed33ad4fb9765243bf4fce2342/Damien_Lane_6.jpg"
                                    data-src="https://images.ctfassets.net/x5sq5djrgbwu/2XrkwU9snEIeU1qHPVlHCX/b96ff8ed33ad4fb9765243bf4fce2342/Damien_Lane_6.jpg"
                                    class="fit-cover" alt="" />
                            </figure>
                        </div>

                        <!-- Main -->
                        <div class="profile-slider__main">
                            <a href="stories/transforming-through-philanthropy.html">
                                <div class="profile-slider__card | bg-green-darkest text-white">
                                    <h3 class="header-md | text-green-light mb-1">Damien Lane</h3>
                                    <h3 class="header-sm -light | mb-4">Founding Partner, Episode 1</h3>

                                    <div class="paragraphs">
                                        <p>"When you consider how much analysis and hard work goes into the creation of your wealth, it
                                            really doesn’t make sense to be reactive in how you give it away."</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </template>
        </slider>


        <!-- See More Link -->
        <aside class="container gutter-md | lg:mt-12">
            <a href="{{route('blog')}}#memberstories" class="link -icon -green | justify-end inline-block">
                <span class="text">See all stories</span>
                <span class="icon | icon--arrow -xs -stroke-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 39">
                <polyline stroke="currentColor" class="stroke" points="0.9,38.5 11.9,19.5 0.9,0.5 " /></svg></span>

            </a>
        </aside>
    </section>


    @include('component.contact.form')


@endsection
