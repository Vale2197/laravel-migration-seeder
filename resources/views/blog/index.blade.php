@extends('layout.app')

@section('title', 'blogs')
    

@section('content')

<div class="main_blogs">
    <h2 class="p-5">
        News:
    </h2>

     <div class="container py-5">

        <div class="row">
            @foreach ($blogs as $blog)

            <a href="{{route('blog', ['id' => $blog->id])}}">

                <div class="card col-12 my-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$blog->description}}</h6>
                        <p class="card-text">{{$blog->text}}</p>
                    </div>
                  </div>

            </a>
            @endforeach
        </div>

        <div class="my_pagination ps-5">
            {{$blogs->links()}}
        </div>
    </div>
    
</div>
   
@endsection