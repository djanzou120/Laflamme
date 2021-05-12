<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Create the editor container -->
<div id="editor">

</div>



@extends('layouts.app')

@section('content')
    <header class="section-header | -top">
        <div class="forum__header">
            <h4 class="forum__header_title">
                <p>Forum</p>
            </h4>
            @auth()
                <a href="{{ route('addSubject')  }}" class="btn -light"> Ajouter un sujet </a>
            @else
                <a href="{{ route('login')  }}" class="btn -light"> Ajouter un sujet </a>
            @endauth

        </div>
    </header>
    <section id="research" class="js-section | bg-oat-light ">
        <div class="flip-cards | md:flex-grid justify-between | container gutter-md p-b-10">
            @foreach($subjects as $subject)
                @include('component.forum.item')
            @endforeach
        </div>
    </section>

@endsection
