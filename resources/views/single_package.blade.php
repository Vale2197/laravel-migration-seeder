@extends('layout.app')

@section('custom_css')

    <link rel="stylesheet" href="{{asset('css/package.css')}}">
    
@endsection
    
@section('content')
    
    <div class="my_jumbo">
        <img src="{{$package->image_url}}" alt="#">
    </div>

@endsection