<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Decker Photography</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        
        <!--styles-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}">

        <!-- Latest compiled and minified CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

    </head>
    <body>      
        <!-- Page Wrapper -->
        <div class="wrapper">
            <div class="container">
                <div class="row d-flex justify-content-end">
                    <div class="title mt-3">
                        Decker Photography
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-end">
                    <div>
                        <div class="links">
                            <a href="/chattanooga">Chattanooga</a>
                        </div>
                        <div class="links">
                            <a href="/wedding">Wedding</a>
                        </div>
                        <div class="links">
                            <a href="/winter">Winter 2019</a>
                        </div>
                        <div class="links">
                            <a href="/hilton">Hilton Head</a>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="https://www.instagram.com/zero_821/" target="_blank">
                                <img class="instLogo" src="/images/gram-logo.png">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--wrapper-->
    </body>
</html>
