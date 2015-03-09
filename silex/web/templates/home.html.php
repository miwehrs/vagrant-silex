<?php
$view->extend('layout.html.php');
$view['slots']->set('title', "Home");
?>

<!DOCTYPE html>

<html>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="jumbotron">
                <h1>Willkommen auf Michis Blog!</h1>
                <p>Schau dir die neuesten Beiträge an oder verfasse selbst einen Beitrag</p>
                    <a class="btn btn-primary" href="/beitraege" role="button">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                        Alle Beiträge
                    </a>
                    <a class="btn btn-success" href="/form" role="button">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        Neuen Beitrag verfassen
                    </a>
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
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim.</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Sag uns deine Meinung</p>
                </div>
            </div>
        </div>
    </div>
</div>
</html>