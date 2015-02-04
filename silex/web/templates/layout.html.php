<!DOCTYPE html>

<?php $title = $view['slots']->get('title', 'Bootstrap') ?>

<html>
<head>
    <title>Bootstrap | <?= $title ?></title>
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
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
                    <li <?= $title == "Home" ? 'class="active"' : "" ?>>
                        <a href="/home">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                            Home
                            <span class="sr-only">(current)</span></a></li>
                    <li <?= $title == "Music" ? 'class="active"' : "" ?>>
                        <a href="/music">
                            <span class="glyphicon glyphicon-music" aria-hidden="true"></span>
                            Music
                        </a></li>
                    <li <?= $title == "Books" ? 'class="active"' : "" ?>>
                        <a href="/books">
                            <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                            Books
                        </a></li>
                    <li <?= $title == "Settings" ? 'class="active"' : "" ?>>
                        <a href="/settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            Settings
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