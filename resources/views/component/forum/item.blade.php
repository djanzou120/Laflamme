{{--
<div class="flip-card -illustrated ">
    <div class="flip-card__content">
        <!-- CTA URL wrap -->

        <!-- Back -->
        <div class="flip-card__back -research">

            <div class="flip-card__main">

                <!-- Icon -->
                <div class="flip-card__icon">

                    <span class="icon | icon--arrow -sm mx-auto"><svg xmlns="http://www.w3.org/2000/svg"
                                                                      viewBox="0 0 13 39">
                        <polyline stroke="currentColor" class="stroke" points="0.9,38.5 11.9,19.5 0.9,0.5 " />
                      </svg></span>

                </div>

                <!-- Description -->
                <h3 class="flip-card--mobile-title">
                    {{$subject->title}}
                </h3>
                <div class="flip-card__descr | paragraphs -xs">
                    <p>{{ \Illuminate\Support\Str::limit($subject->content, 150, $end='...') }}</p>
                </div>

            </div>

            <div class="flip-card__action | text-sm">
                <a href="{{route('forum.detail',$subject->id)}}"
                   class="link -underline">Summary Report</a>
            </div>
        </div>

        <!-- Front -->
        <header class="flip-card__front">

            <!-- Image & Caption -->
            <div class="flip-card__illustration w-full mx-auto">
                <figure class="image -filled">
                    <img
                        src="https://images.ctfassets.net/x5sq5djrgbwu/6yNe8CQ5VsjOGYwS1s6Mb5/c5a9e96eeac64dfc5bc3e9d8db937fe4/england.jpg"
                        class="fit-cover"
                        alt="Advocating for impactful housing policy reforms to reduce housing costs and increase access to economic opportunity.">
                    <figcaption class="flip-card__illustration--caption">
                        <p class="flip-card__illustration--caption__text">{{$subject->title}}</p>
                    </figcaption>
                </figure>

                --}}
{{--<figure class="image -filled" style="background: #785540">
                    <div class="fit-cover"></div>
                    <figcaption class="flip-card__illustration--caption">
                        <p class="flip-card__illustration--caption__text">{{$subject->title}}</p>
                    </figcaption>
                </figure>--}}{{--


            </div>

            <!-- Icon -->
        </header>

        <!-- CTA URL wrap /close -->
    </div>
</div>
--}}


<div class="forum__subject_card">

    <div class="forum__subject_text">

        <div class="forum__subject_title">
           <h1> {{$subject->title}} </h1>
        </div>

        <div class="forum__subject_content">
            {{ Str::limit(strip_tags($subject->content), 250, $end='...') }}
        </div>
    </div>

    <div class="seperator">

    </div>
    <div class="forum__subject_details">
        <div class="forum__subject_image">
            <img src="{{asset($subject->user->image??'assets/user.png')}}" alt="">
            <div>
                <span>
                    Poste par :
                </span>
                {{ $subject->user->first_name . ' ' . $subject->user->last_name }}
            </div>
        </div>
        <a href="{{ route('forum.detail', $subject->id) }}" class="forum__action">
            Voir le sujet
            <img src="{{asset('./assets/arrow-right.svg')}}" alt="">


        </a>
    </div>
</div>
