<a href="{{route('blog.article.detail', $post)}}" class="article-card md:w-1/3 pr-6 md:mb-6 xs:mb-10">
    <div class="article-card__content h-full p-3 bg-oat-lighter">
        <figure class="article-card__figure | image -is3x2 -m-3 mb-3 ">
            <img src="{{asset($post->image)}}" alt="" class="fit-cover">
        </figure>
        <div class="mt-2 ">
            <div class="clearfix mb-5 ">
                <h2 class=" | header-xs float-left -grey text-xs">{{$post->title}}</h2>
            </div>
            <h2 class="header | header-md">{{$post->category->name}}</h2>
            <h2 class=" | header-xs text-xs text-green mb-2 mt-2">Par {{$post->user->first_name .' '.$post->user->last_name}}
            </h2>
        </div>
        <div class="paragraphs -sm">
            <p>
                {{\Illuminate\Support\Str::limit(str_replace('&nbsp', '', strip_tags($last_post->content)), 150)}}
            </p>
        </div>
    </div>
</a>
