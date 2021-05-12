<div class="author-card | md:flex-grid">


    <div class="author-card__main">
        <img class="comment__image" src="{{asset($response->user->image??'assets/user.png')}}" alt="">
        <div>
            <div class="author-card__header | mb-5 pt-2">
                <h4 class="header-md">{{$response->name}}</h4>
                <h5 class="header-sm | pt-2 email">{{$response->email}}</h5>
            </div>
            <div class="author-card__descr | paragraphs -sm">
                <p> {{ $response->response  }} </p>
            </div>
        </div>
    </div>
</div>
<div class="pattern--green | absolute"></div>
