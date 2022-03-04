<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Films</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href=" {{ asset('/css/app.css')}} ">
    </head>
    <body>

        <div class="grid">
            @foreach ($data as $id => $film)
                <div class="thumb">
                    <h2>{{ $film['title'] }}</h2>
                    <p>{{ $film['original_title'] }}</p>
                    <p>{{ $film['nationality'] }}</p>
                    <p>{{ $film['date'] }}</p>
                    <p>{{ $film['vote'] }}</p>
                </div>        
            @endforeach
        </div>

    </body>
</html>
