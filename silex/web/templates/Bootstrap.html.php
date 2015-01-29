<?php $view->extend('layout.html.php') ?>

<?php $view['slots']->set('title','Default title') ?>

<!DOCTYPE html>

<html>
<head>
    <title>Bootstrap Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                Bootstrap-Site
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        Home
                        <span class="sr-only">(current)</span></a></li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-music" aria-hidden="true"></span>
                        Page 1
                    </a></li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                        Page 2
                    </a></li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        Page 3
                    </a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="jumbotron">
                <h1>My first Bootstrap Website!</h1>
                <p>Lorem ipsum dolor...</p>
                        <span class="label-primary">
                            <p><a class="btn btn-primary btn-lg" href="#" role="button">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    Search
                                </a></p>
                        </span>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-4">
            <ul class="list-group">
                <li class="list-group-item list-group-item-success">Cras justo odio</li>
                <li class="list-group-item list-group-item-info">Dapibus ac facilisis in</li>
                <li class="list-group-item list-group-item-warning">Morbi leo risis</li>
                <li class="list-group-item list-group-item-danger">Porta ac consectetur ac</li>
            </ul>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>