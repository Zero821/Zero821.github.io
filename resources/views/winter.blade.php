<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Decker Photography</title>

        <!-- Fonts -->
        
        <!--styles-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/winter.css') }}">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>

    <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Decker Photography</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Galleries
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/chattanooga">Chattanooga</a>
                        <a class="dropdown-item" href="/hilton">Hilton Head</a>
                        <a class="dropdown-item disabled" href="/wedding">Wedding</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">Winter 2019</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <div id="carouselControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 vertiImg" src="/images/winter/1.jpeg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 vertiImg" src="/images/winter/2.jpeg">            
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 vertiImg" src="/images/winter/3.jpeg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 vertiImg" src="/images/winter/4.jpeg">            
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 vertiImg" src="/images/winter/5.jpeg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 vertiImg" src="/images/winter/6.jpeg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 vertiImg" src="/images/winter/7.jpeg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 vertiImg" src="/images/winter/8.jpeg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 horiImg" src="/images/winter/9.jpeg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 horiImg" src="/images/winter/10.jpeg">
                            </div>
                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    </body>


</html>