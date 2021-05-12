<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Create the editor container -->
<div id="editor">

</div>



@extends('layouts.app')

@section('content')
    <header class="section-header">
        <div class="forum__header">
            <h4 class="forum__header_title">
                <p>Ajouter un sujet au forum</p>
            </h4>
        </div>
        <div class="forum__addsubject_title">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aperiam aspernatur, beatae debitis doloribus ducimus eos, exercitationem fugiat in minima quam qui quo repellat rerum soluta vero? Rerum, tempore.</p>

        </div>
    </header>
    @include('component.forum.add')



@endsection


@section('javascript')
    <input type="hidden" id="assetUrl" value="{{asset('')}}"/>
    <script src="{{asset('assets/notifier.js')}}"></script>
    <script src="{{asset('assets/main.js')}}"></script>


    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

@endsection
