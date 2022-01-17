@extends('layout.app')

@section('title', 'welcome')
    
@section('content')

<h1 class="p-5">
    i nostri pacchetti viaggio:
</h1>

<div class="container">
    <div class="row justify-content-center">

        @foreach ($packages as $package)
          <div class="col-4 py-5">
        
              <div class="card" style="width: 18rem;">
                @if($package->title == 'esperienza esotica')
                  <img src="https://www.my-personaltrainer.it/2020/10/30/papaya-orig.jpeg" class="card-img-top" alt="...">
                @else 
                    <img src="{{$package->image_url}}" class="card-img-top" alt="...">
                @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$package->title}}</h5>
                        <p class="card-text">{{$package->description}}</p>
                        <a href="{{ route('package', $package->id) }}" class="btn btn-primary"> {{$package->price}} &#8364; </a>
                    </div>
              </div>
        
          </div>
        @endforeach
         
        <div class="my_pagination">
            {{ $packages->links() }}
        </div>
    </div>
</div>


    
@endsection
