<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Registrierung');
?>

<!DOCTYPE html>

<!-- Wenn beide Felder ausgefüllt sind, wird der neue Benutzer in die Datenbank geladen -->
<html>
<div class='container'>
    <div class='row'>
        <div class='panel panel-success'>
            <div class='panel-heading'>
                Registrierung
            </div>
            <div class='panel-body'>
                <?php if ($error) : ?>
                    <div class='panel panel-danger'>
                        <div class='panel-heading'>
                            Bitte alle Felder ausfüllen!
                        </div>
                    </div>
                <?php endif ?>
                <div class='form-group'>
                    <form action='/registrierung' method='post'>
                        <label for='name'>Benutzername</label>
                        <input type='text' name='name' class='form-control' id='name' placeholder='Benutzername'><br/>
                        <label for='password'>Passwort</label>
                        <input type='password' name='password' class='form-control' id='password'
                               placeholder='Passwort'></textarea>
                        <br/>
                        <button type='submit' class='btn btn-primary'>Registrieren</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>