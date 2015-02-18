<?php
$view->extend('layout.html.php');
$view['slots']->set('title', "Neuer Beitrag");
?>

<!DOCTYPE html>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Beitrag wurde erfolgreich eingesendet!
                </div>
            </div>
            <a href="/beitraege">
                <button type="button" class="btn btn-success">Zu den Beiträgen</button>
            </a>
        </div>
    </div>
</div>