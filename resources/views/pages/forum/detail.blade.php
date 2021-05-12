@extends('layouts.app')

@section('content')


    <main role="main">
        <!-- Section Header -->

        <!-- Stories Article Layout -->
        <section class="longform-article | bg-oat-lightest">
            <div class="longform-article__figure -mb-10 pb-20">
                <figure
                    class="featured-article-card__figure | imasge -backgeround -is3x2 pb-10 | bg-oat-light">
                    <div
                        class="background"

                    ><header class="section-header | ">
                            <div class="section-header__content">
                                <h4 class="header-sm"><p>Forum</p></h4>

                                <h2 class="header | header-lg"><p>{{ $subject->title }}</p></h2>


                            </div>
                        </header>
                    </div>
                </figure>
            </div>

            <!-- Content -->
            <div class="longform-article__content | space-b--lg | container">
                <!-- Aside -->
                <div class="longform-article__aside">
                    <!-- Definition List  -->
                    <dl class="definition-list">
                        <dt>Published on</dt>
                        <dd>{{ $subject->created_at }}</dd>

                        <dt>Written by</dt>
                        <dd>
                            {{ $subject->user->first_name . ' '.  $subject->user->last_name  }}
                        </dd>

                    </dl>
                </div>

                <!-- Main   -->
                <div class="longform-article__main | relative">

                    <article class="article-copy">
                        <p> {!!  $subject->content !!} </p>
                    </article>


                    @include('component.forum.add_comment')

                    @foreach($responses as $response)
                        @include('component.forum.comment')
                    @endforeach

                </div>
            </div>
        </section>



    </main>

@endsection
