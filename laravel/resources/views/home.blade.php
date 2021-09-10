<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Oggi al cinema</title>
</head>
<body>



<div class="comics">
    <div class='container'>
        <div class='row'>
            @foreach($fumetti as $fumetto)
                
            @endforeach

    @foreach ($allMovies as $movie)
        <div class="col-2">
                <div class='fumetto'>
                    <img src=" {{ $fumetto['thumb']}}" alt="logo">
                <h7>{{ $fumetto["title"]}} </h7> 
                </div>
            </a>
        </div>
    {{$movie}}
        <br>
    @endforeach
    </div>
    </div>
</div>
    <br>
</body>
</html>