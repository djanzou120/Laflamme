@extends('layouts.app')

@section('content')

    <header class="section-header | -top">
        <div class="section-header__content">
            <h4 class="header-sm">
                <p>Blog</p>
            </h4>

            <h2 class="header | header-lg">
                <p>Nos derniers articles de Blog <span class=""></span></p>
            </h2>
        </div>
    </header>
    @if (isset($last_post))

    <section id="featured" class="js-section">
        <a href="{{route('blog.article.detail', $last_post)}}"
           class="featured-article-card | link-card -dark -lg--l | container -flush | block">
            <div class="featured-article-card__content flex">
                <div class="featured-article-card__main | link-card__content  md:w-3/5 pt-20">
                    <h2 class="header | header-md | mb-2">Derniers Articles : </h2>
                    <h2 class="preheader | header-sm | mb-3">Par {{$last_post->user->first_name .' '.$last_post->user->last_name}}</h2>
                    <h2 class="header | header-lg | mb-5">{{$last_post->title}}</h2>
                    <div class="paragraphs">
                        <p>
                            {{\Illuminate\Support\Str::limit(str_replace('&nbsp', '', strip_tags($last_post->content)), 500)}}
                        </p>
                    </div>
                </div>
                <figure class="featured-article-card__figure | image -background fit-cover md:w-2/5">
                    <div class="background" style="background-image: url('{{asset($last_post->image)}}');">
                    </div>
                </figure>


            </div>
        </a>

        <hr class="border-oat-light pb-8 mb-12">
    </section>
    @endif

    <section id="memberstories" class="js-section | container | gutter-lg">
        <header class="section-header -inline-actions -arrow -left">
            <div class="section-header__content">
                <div class="section-header__name">
                    <h2 class="header | header-lg">Articles</h2>
                </div>
                <!--  See all
                <div class="section-header__action">
                  <a href="stories/category/member-stories.html" class="link -icon">
                    <span class="text">See all</span>
                    <span class="icon | icon--arrow -sm -stroke-3"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 13 39">
                        <polyline stroke="currentColor" class="stroke" points="0.9,38.5 11.9,19.5 0.9,0.5 " /></svg></span>

                  </a>
                </div> -->
            </div>
        </header>
        <div class="article-cards | xs:flex-grid" style="margin-bottom: 3rem ;">
            @foreach($posts as $post)
                @include('component.blog.item',['post'=>$post])
            @endforeach
        </div>
    </section>




@endsection
