<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Login');
?>

<!DOCTYPE html>

<html>
<div class='container'>
    <div class='row'>
        <div class='panel panel-danger'>
            <div class='panel-heading'>
                Pech gehabt! Dein Passwort kann leider nicht zurückgesetzt werden.
            </div>
        </div>
    </div>
</div>
</html>