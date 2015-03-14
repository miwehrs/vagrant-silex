<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Registrierung');
?>

<!DOCTYPE html>

<html>
<div class='container'>
    <div class='row'>
        <div class='panel panel-success'>
            <div class='panel-heading'>
                Registrierung erfolgreich abgeschlossen
            </div>
            <div class='panel-body'>
                Du hast dich erfolgreich registriert. Melde dich gleich an!
                <br/>
            </div>
        </div>
        <a class='btn btn-primary' href='/login' role='button'>
            Zum Login
        </a>
    </div>
</div>
</html>