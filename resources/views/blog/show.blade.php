@extends('layout.app')

@section('content')

    <div class="main_blog">

        <h1 class="ps-5">
            {{$blog->title}}
        </h1>

        <div class="container">
            <p class="description fs-3">
                {{$blog->description}}
            </p>
            <p class="fs-5">
                {{$blog->text}}
            </p>
        </div>
        
    </div>

@endsection