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

// match -> get und post in einem
$app->match('/form', function(Request $request) use($app) {
    if ($request->isMethod('post')) {
        $title = $request->get('title');
        $text = $request->get('text');

        if (($text=='') || ($title=='')) {
            return $app['templating']->render(
                'form_error.html.php',
                array()
            );
        }
        else {
            return $app['templating']->render(
                'form_success.html.php',
                array()
            );
        }

        /*Werte werden an Beiträge-Site übergeben
        return $app['templating']->render(
            'beitraege.html.php',
            array(
                'title' => $title,
                'text' => $text
            )
        );*/
    }
    else {
        return $app['templating']->render(
            'form.html.php',
            array()
        );
    }
});

$app->get('/beitraege', function() use($app) {
    return $app['templating']->render(
        'beitraege.html.php',
        array()
    );
});