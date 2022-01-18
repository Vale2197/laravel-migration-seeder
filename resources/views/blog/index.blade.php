@extends('layout.app')

@section('title', 'blogs')
    

@section('content')

<div class="main_blogs">

     <div class="container py-5">
        <h1>
            NEWS:
        </h1>

        <div class="row">
            @foreach ($blogs as $blog)
            <div class="card col-12 my-3">
                <div class="card-body">
                    <h5 class="card-title">{{$blog->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$blog->description}}</h6>
                    <p class="card-text">{{$blog->text}}</p>
                </div>
              </div>
            @endforeach
        </div>

        <div class="my_pagination">
            {{$blogs->links()}}
        </div>
    </div>
    
</div>
   
@endsection