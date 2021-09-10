<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>Oggi al cinema</title>
</head>
<body>



    <div class="films">
        <div class='container'>
            <div class='row'>
                @foreach ($allMovies as $movie)
                    <div class="col-2 film">
                            <div class='titolo'>
                            <h3>{{ $movie["title"]}} </h3> 
                            </div>
                            <div class='titolo_originale'>{{ $movie["original_title"]}}</div>
                            <div class='nazionalita'>{{ $movie["nationality"]}}</div>
                            <div class='uscita'>{{ $movie["date"]}}</div>
                            <div class='vote'>{{ $movie["voto"]}}</div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</body>
</html>