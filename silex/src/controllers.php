<?php
session_start();
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app->match('/home', function(Request $request) use($app) {
    $error = 0;
    if ($request->isMethod('post')) {
        $dbConnection = $app['db'];
        $name = $request->get('name', '');
        $password = $request->get('password', '');
        // Überprüfung, ob ein Feld nicht ausgefüllt wurde
        if (($name=='') || ($password=='')) {
            $error = 1;
            return $app['templating']->render(
                'home.html.php',
                array(
                    'error' => $error
                )
            );
        } else {
            // Überprüfung, ob Benutzer in der Datenbank "user" vorhanden ist
            $users = $dbConnection->fetchAll('SELECT * FROM user');
            foreach ($users as $user) {
                if (($user['name'] == $name) && ($user['password'] == $password)) {
                    $_SESSION['username'] = $name;
                    return $app['templating']->render(
                        'login_success.html.php',
                        array()
                    );
                }
            }
            return $app['templating']->render(
                'home.html.php',
                array(
                    'error' => 1
                )
            );
        }
    } else {
        return $app['templating']->render(
            'home.html.php',
            array(
                'error' => $error
            )
        );
    }
});

$app->match('/form', function(Request $request) use($app) {
    $error = 0;
    if ($request->isMethod('post')) {
        $dbConnection = $app['db'];
        $title = $request->get('title', '');
        $text = $request->get('text', '');
        $user = isset($_SESSION['username']) ? $_SESSION['username'] : null;
        if (($text=='') || ($title=='')) {
            $error = 1;
            return $app['templating']->render(
                'form.html.php',
                array(
                    'error' => $error
                )
            );
        } elseif (!$user) {
            // Wenn kein User angemeldet ist, wird der User zum Login weitergeleitet
            return $app['templating']->render(
                'login.html.php',
                array()
            );
        } else {
            $dbConnection->insert(
                'blog_post',
                array(
                    'title' => $title,
                    'text' => $text,
                    'created_at' => date('Y-m-d'),
                    'author' => $_SESSION['username']
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
    $posts = $dbConnection->fetchAll('SELECT * FROM blog_post ORDER BY id DESC');
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

$app->match('/login', function(Request $request) use($app) {
    // Funktion analog zum Login-Feld der Home-Site
    $error = 0;
    if ($request->isMethod('post')) {
        $dbConnection = $app['db'];
        $name = $request->get('name', '');
        $password = $request->get('password', '');
        if (($name=='') || ($password=='')) {
            $error = 1;
            return $app['templating']->render(
                'login.html.php',
                array(
                    'error' => $error
                )
            );
        } else {
            $users = $dbConnection->fetchAll('SELECT * FROM user');
            foreach ($users as $user) {
                if (($user['name'] == $name) && ($user['password'] == $password)) {
                    $_SESSION['username'] = $name;
                    return $app['templating']->render(
                        'login_success.html.php',
                        array()
                    );
                }
            }
            return $app['templating']->render(
                'login.html.php',
                array(
                    'error' => 1
                )
            );
        }
    } else {
        return $app['templating']->render(
            'login.html.php',
            array(
                'error' => $error
            )
        );
    }
});

$app->match('/registrierung', function(Request $request) use($app) {
    $error = 0;
    if ($request->isMethod('post')) {
        $dbConnection = $app['db'];
        $name = $request->get('name', '');
        $password = $request->get('password', '');
        if (($name=='') || ($password=='')) {
            $error = 1;
            return $app['templating']->render(
                'registrierung.html.php',
                array(
                    'error' => $error
                )
            );
        } else {
            $dbConnection->insert(
                'user',
                array(
                    'name' => $name,
                    'password' => $password
                )
            );
            return $app['templating']->render(
                'reg_success.html.php',
                array()
            );
        }
    } else {
        return $app['templating']->render(
            'registrierung.html.php',
            array(
                'error' => $error
            )
        );
    }
});

$app->get('/logout', function() use($app) {
    session_destroy();
    $_SESSION['username'] = null;
    return $app['templating']->render(
        'login.html.php',
        array()
    );
});