<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});

$app->get('/home', function () use($app) {
    return $app['templating']->render(
        'home.html.php',
        array()
    );
});

$app->get('/music', function() use($app) {
    return $app['templating']->render(
        'music.html.php',
        array()
    );
});

$app->get('/books', function() use($app) {
    return $app['templating']->render(
        'books.html.php',
        array()
    );
});

$app->get('/settings', function() use($app) {
    return $app['templating']->render(
        'settings.html.php',
        array()
    );
});