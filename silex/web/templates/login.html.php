<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Login');
?>

<!DOCTYPE html>
<html>
<div class='container'>
    <div class='row'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                Login
            </div>
            <div class='panel-body'>
                <div class='form-group'>
                    <label for='name'>Benutzername</label>
                    <form action='/login' method='post'>
                        <input type='text' name='name' class='form-control' id='name' placeholder='Benutzername'><br/>
                        <label for='password'>Passwort</label>
                        <input type="text" name='password' class='form-control' id='password' placeholder='Passwort'></textarea>
                        <br/>
                        <button type='submit' class="btn btn-primary">Anmelden</button>
                    </form>
                </div>
            </div>
            <div class='panel-footer'>
                Noch kein Konto? Jetzt registrieren!
                <a class='btn btn-success' href='/registrierung' role='button'>
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    Registrieren
                </a>
            </div>
        </div>
    </div>
</div>
</html>