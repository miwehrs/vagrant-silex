<?php
/**
 * Annotations:
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$title = $slots->get('title', 'Bootstrap')
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Bootstrap | <?= $title ?></title>
        <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/stylesheet_bootstrap.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <base href="http://localhost:8001/">
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
                        <li <?= $title == "Home" ? 'class="active"' : "" ?>>
                            <a href="/home">
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                Home
                                <span class="sr-only">(current)</span></a></li>
                        <li <?= $title == "Beiträge" ? 'class="active"' : "" ?>>
                            <a href="/beitraege">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                Beiträge
                            </a></li>
                        <li <?= $title == "Neuer Beitrag" ? 'class="active"' : "" ?>>
                            <a href="/form">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                Neuer Beitrag
                            </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>

    <div class="container">
        <?php
        $view['slots']->output('_content');
        ?>
    </div>
</html>