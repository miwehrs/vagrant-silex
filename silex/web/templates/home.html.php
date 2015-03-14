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
        <div class="col-xs-12 col-md-6">
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    Login
                </div>
                <div class='panel-body'>
                    <div class='form-group'>
                        <?php if ($error) : ?>
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    Bitte alle Felder ausfüllen!
                                    <br/>
                                    Benutzername oder Passwort sind nicht korrekt!
                                </div>
                            </div>
                        <?php endif ?>
                        <form action='/home' method='post'>
                            <label for='name'>Benutzername</label>
                            <input type='text' name='name' class='form-control' id='name' placeholder='Benutzername'><br/>
                            <label for='password'>Passwort</label>
                            <input type="text" name='password' class='form-control' id='password' placeholder='Passwort'></textarea>
                            <br/>
                            <button type='submit' class="btn btn-primary">Anmelden</button>
                        </form>
                    </div>
                </div>
                <div class='panel-footer'>
                    <p>Noch kein Konto? Jetzt registrieren!</p>
                    <br/>
                    <a class='btn btn-success' href='/registrierung' role='button'>
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        Registrieren
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p><h4>Hier könnte Ihre Werbung stehen!</h4></p>
                </div>
            </div>
        </div>
    </div>
</div>
</html>