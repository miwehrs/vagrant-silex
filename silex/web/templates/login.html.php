<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Login');
$error = (isset($error)) ? $error : 0;
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
                <?php if ($error) : ?>
                    <div class='panel panel-danger'>
                        <div class='panel-heading'>
                            Bitte alle Felder ausfüllen!
                            <br/>
                            Benutzername oder Passwort sind nicht korrekt!
                        </div>
                    </div>
                <?php endif ?>
                <div class='form-group'>
                    <form action='/login' method='post'>
                        <label for='name'>Benutzername</label>
                        <input type='text' name='name' class='form-control' id='name' placeholder='Benutzername'><br/>
                        <label for='password'>Passwort</label>
                        <input type='password' name='password' class='form-control' id='password'
                               placeholder='Passwort'></textarea>
                        <br/>
                        <button type='submit' class='btn btn-primary'>Anmelden</button>
                    </form>
                </div>
            </div>
            <div class='panel-footer'>
                Noch kein Konto? Jetzt registrieren!
                <a class='btn btn-success' href='/registrierung' role='button'>
                    <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
                    Registrieren
                </a>
            </div>
        </div>
    </div>
</div>
</html>