@extends('layout.app')

@section('title', 'welcome')
    
@section('content')

    <h1>
        i nostri pacchetti viaggio:
    </h1>

    @foreach ($packages as $package)
        <p>
            {{$package->id}} - <strong>{{$package->title}}</strong>: <br>
            <span>{{$package->description}}</span> <span> <strong>price:</strong> {{$package->price}} &#8364; </span>
        </p>
    @endforeach
    
@endsection
