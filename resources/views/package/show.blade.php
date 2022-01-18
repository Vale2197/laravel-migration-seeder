@extends('layout.app')

@section('title', 'package')
        
@section('content')
    
<div class="main_package">
    <div class="my_jumbo">
        <img src="{{$package->image_url}}" alt="#">
    </div>

    <div class="main p-3">
        
        <h1>
            {{ $package->title }}
        </h1>

        <p>
            {{$package->description}}
        </p>
        <p class="fs-2">
            {{$package->price}} &#8364;
        </p>
        <button class="btn">
            BUY
        </button>

    </div>
</div>

@endsection