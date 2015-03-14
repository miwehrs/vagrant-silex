<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Login');
?>

<!DOCTYPE html>

<html>
<div class='container'>
    <div class='row'>
        <div class='panel panel-success'>
            <div class='panel-heading'>
                Login
            </div>
            <div class='panel-body'>
                Du hast dich erfolgreich angemeldet. Sieh dir an, was es Neues gibt oder verfasse einen eigenen Beitrag!
            </div>
        </div>
        <a class='btn btn-primary' href='/beitraege' role='button'>
            <span class='glyphicon glyphicon-th-list' aria-hidden='true'></span>
            Alle Beiträge
        </a>
        <a class='btn btn-success' href='/form' role='button'>
            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
            Neuen Beitrag verfassen
        </a>
    </div>
</div>
</html>