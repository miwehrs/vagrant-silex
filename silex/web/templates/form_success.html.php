<?php
$view->extend('layout.html.php');
$view['slots']->set('title', "Neuer Beitrag");
?>

<!DOCTYPE html>

<html>
<div class='container'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='panel panel-success'>
                <div class='panel-heading'>
                    Gespeichert
                </div>
                <div class='panel-body'>
                    Beitrag wurde erfolgreich eingesendet!
                </div>
            </div>
            <a href='/beitraege'>
                <button type='button' class='btn btn-success'>Zu den Beiträgen</button>
            </a>
        </div>
    </div>
</div>
</html>