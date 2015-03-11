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
    $error = 0;
    if ($request->isMethod('post')) {
        $dbConnection = $app['db'];
        $title = $request->get('title', '');
        $text = $request->get('text', '');
        if (($text=='') || ($title=='')) {
            $error = 1;
            return $app['templating']->render(
                'form.html.php',
                array(
                    'error' => $error
                )
            );
        } else {
            $dbConnection->insert(
                'blog_post',
                array(
                    'title' => $title,
                    'text' => $text,
                    'created_at' => date('Y-m-d')
                )
            );
            return $app['templating']->render(
                'form_success.html.php',
                array()
            );
        }
    } else {
        return $app['templating']->render(
            'form.html.php',
            array(
                'error' => $error
            )
        );
    }
});

$app->get('/beitraege', function() use($app) {
    $dbConnection = $app['db'];
    $posts = $dbConnection->fetchAll('select * from blog_post ORDER BY id DESC');
    return $app['templating']->render(
        'beitraege.html.php',
        array(
            'posts' => $posts
        )
    );
});

$app->get('/beitrag/{id}', function($id) use($app) {
    $dbConnection = $app['db'];
    $post = $dbConnection->fetchAssoc('SELECT * FROM blog_post WHERE id = ?',
        array($id)
    );
    return $app['templating']->render(
        'beitrag.html.php',
        array(
            'post' => $post
        )
    );
});

$app->get('/login', function() use($app) {
    return $app['templating']->render(
        'login.html.php'
    );
});
