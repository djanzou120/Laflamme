@extends('layouts.app')

@section('content')

    <section class="longform-article | bg-oat-lightest">
        <div class="longform-article__figure -mb-10 pb-20">
            <figure class="featured-article-card__figure | imasge -backgeround -is3x2 pb-10 | bg-oat-light">
                <div class="background">
                    <header class="section-header | ">
                        <div class="section-header__content">
                            <h4 class="header-sm"><p>Blog</p></h4>
                            <h2 class="header | header-lg"><p>{{$post->title}}<span></span>
                                </p></h2>
                        </div>
                    </header>
                </div>
            </figure>
        </div>
        <div class="longform-article__content | space-b--lg | container">
            <div class="longform-article__aside">
                <dl class="definition-list">
                    <dt>Published on</dt>
                    <dd>{{$post->created_at}}</dd>
                    <dt>Written by</dt>
                    <dd>
                        {{$post->user->first_name .' '.$post->user->last_name}}
                    </dd>
                    <dt>Share this story</dt>
                    <dd>
                        <ul role="menubar" class="social-list | mt-3">
                            <li><a target="_blank"
                                   href="http://www.facebook.com/sharer.php?u=https://founderspledge.com/stories/the-simple-path-to-impact"
                                   aria-label="Facebook"><span class="icon | icon--fb "><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path
                                                fill="currentColor" d="M12.46218,31V18H8v-6h4.46218V7.80998C12.46218,3.24577,15.35166,1,19.42325,1
c1.95033,0,3.62655,0.1452,4.11504,0.21011v4.76987l-2.82387,0.00128C18.50007,5.98127,18,7.0335,18,8.57757V12h6l-2,6h-4v13
H12.46218z"></path></svg></span></a></li>
                            <li><a target="_blank"
                                   href="http://www.linkedin.com/shareArticle?url=https://founderspledge.com/stories/the-simple-path-to-impact&amp;title=The%20simple%20approach%20to%20impact"
                                   aria-label="Linked In"><span class="icon | icon--linkedin "><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path
                                                fill="currentColor" d="M30.66667,0H1.33333C0.59695,0,0,0.59695,0,1.33333v29.33333C0,31.40305,0.59695,32,1.33333,32h29.33333
C31.40305,32,32,31.40305,32,30.66667V1.33333C32,0.59695,31.40305,0,30.66667,0z M9.49262,27.26738H4.74176V11.99653h4.75086
V27.26738z M7.1185,9.91013c-1.5243,0-2.75347-1.23305-2.75347-2.75258c0-1.5191,1.22916-2.75218,2.75347-2.75218
c1.51823,0,2.75084,1.23308,2.75084,2.75218C9.86933,8.67708,8.63673,9.91013,7.1185,9.91013z M27.26871,27.26738h-4.74569v-7.42622
c0-1.77085-0.0304-4.04907-2.46613-4.04907c-2.4696,0-2.8464,1.93013-2.8464,3.92231v7.55298h-4.74045V11.99653h4.54951v2.08764
h0.06507c0.6328-1.20053,2.18142-2.46658,4.49049-2.46658c4.80551,0,5.6936,3.16196,5.6936,7.27476V27.26738z"></path></svg></span></a>
                            </li>
                            <li><a target="_blank"
                                   href="https://twitter.com/share?url=https://founderspledge.com/stories/the-simple-path-to-impact&amp;text=The%20simple%20approach%20to%20impact&amp;via=FoundersPledge&amp;hashtags=FoundersPledge"
                                   aria-label="Twitter"><span class="icon | icon--linkedin "><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path
                                                fill="currentColor" d="M32,6.07561c-1.17735,0.52214-2.44259,0.87512-3.77071,1.03378
c1.35555-0.81248,2.39653-2.09911,2.88667-3.63218c-1.26845,0.75237-2.67349,1.29874-4.16896,1.5932
c-1.19757-1.276-2.90382-2.07328-4.79203-2.07328c-3.6259,0-6.56538,2.93949-6.56538,6.56504
c0,0.51461,0.05807,1.0156,0.16997,1.49615C10.30329,10.78454,5.46576,8.17083,2.2277,4.19882
C1.66258,5.16848,1.33887,6.29621,1.33887,7.49939c0,2.27766,1.15906,4.28716,2.92062,5.46451
C3.1833,12.92984,2.171,12.63447,1.28582,12.14272c-0.00046,0.02744-0.00056,0.05487-0.00056,0.08253
c0,3.18096,2.26302,5.83445,5.2664,6.43754C6.00071,18.81275,5.42072,18.893,4.82199,18.893
c-0.42305,0-0.83433-0.04115-1.2352-0.11774c0.83546,2.60823,3.26,4.50639,6.13286,4.55943
c-2.24691,1.76077-5.07769,2.81032-8.15355,2.81032c-0.52993,0-1.05253-0.03109-1.5661-0.09167
c2.90543,1.86272,6.35632,2.94954,10.06382,2.94954c12.07582,0,18.67926-10.00381,18.67926-18.67944
c0-0.28463-0.00639-0.56776-0.01897-0.8493C30.00674,8.54849,31.11985,7.39218,32,6.07561z"></path></svg></span></a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class="longform-article__main | relative">
                <figure class="image -is2x1 mb-5"><img src="{{asset($post->image)}}" class="fit-cover"></figure>
                <article class="article-copy"><h2>"{{$post->category->name}}"</h2>
                    <p>{!!$post->content!!}</p>
                    <p>Par {{$post->user->first_name .' '.$post->user->last_name}}</p></article>
                <div class="pattern--green | absolute"></div>
            </div>
        </div>
    </section>

@endsection
