<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <h1>
            i nostri pacchetti viaggio:
        </h1>

        @foreach ($packages as $package)
            <p>
                {{$package->id}} - <strong>{{$package->title}}</strong>: <br>
                <span>{{$package->description}}</span> <span> <strong>price:</strong> {{$package->price}} &#8364; </span>
            </p>
        @endforeach
    </body>
</html>
