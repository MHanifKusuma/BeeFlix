<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>BeeFlix Movies</title>
    </head>
    <body class="bg-dark">
    <div class="container-fluid" style="margin-top: 30px; margin-bottom: 20px">
            <div class="row">
                <div class=col-md-4>
                    <a href="\"><h1 class="text-light">BeeFlix</h1></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <nav class="nav">
                        <a href="{{url()->previous()}}" type="button" class="btn btn-secondary">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                            </svg>
                            Go back
                        </a>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Genres
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="drama-genre">Dramas</a>
                                <a class="dropdown-item" href="kids-genre">Kids</a>
                                <a class="dropdown-item" href="tvshow-genre">Tv Shows</a>
                            </div>
                        </div>
                        <a href="all-movies" type="button" class="btn btn-light" >
                            See all movies
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-film" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0h8v6H4V1zm8 8H4v6h8V9zM1 1h2v2H1V1zm2 3H1v2h2V4zM1 7h2v2H1V7zm2 3H1v2h2v-2zm-2 3h2v2H1v-2zM15 1h-2v2h2V1zm-2 3h2v2h-2V4zm2 3h-2v2h2V7zm-2 3h2v2h-2v-2zm2 3h-2v2h2v-2z"/>
                            </svg>
                        </a>
                    </nav>
                </div>
                <div class="col-md-4 ml-auto text-right">
                    <p class="text-light">
                        Muhammad Hanif Kusuma
                        <span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="margin-bottom: 20px">
            <div class="row">
                <h3 class="text-light text-center" style="padding-left: 10px">{{$movies[0]->genre->name}}</h3>
            </div>
            <div class="row">
                @foreach($movies as $m)
                <div class="col-md-auto" style="margin-bottom: 30px">
                    <div class="card" style="width: 215px; heigth: 435px">
                        <img src="{{ $m->photo }}" class="card-img-top" alt="movie_image">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 50px">{{$m->title}}</h5>
                            <a href="/movies/{{$m->id}}" class="btn btn-info">See detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <footer class="small text-center text-light">
            <p class="copyright">Copyright © 2020 | MHanifKusuma</p>
        </footer>

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>