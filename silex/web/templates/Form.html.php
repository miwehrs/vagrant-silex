<?php
$view->extend('layout.html.php');
$view['slots']->set('title', "Neuer Beitrag");
?>

<!DOCTYPE html>

<!-- Formular zur Eingabe eines neuen Beitrags -->
<html>
<div class='container'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='panel panel-default'>
                <div class='panel-heading'><b>Neuer Beitrag</b></div>
                <div class='panel-body'>
                    <!-- Check, ob alle Felder ausgefüllt sind, wenn nicht ist $error=1 -->
                    <?php if ($error) : ?>
                        <div class='panel panel-danger'>
                            <div class='panel-heading'>
                                Bitte alle Felder ausfüllen!
                            </div>
                        </div>
                    <?php endif ?>
                    <div class='form-group'>
                        <form action='/form' method='post'>
                            <label for='title'>Titel</label>
                            <input type='text' name='title' class='form-control' id='title' placeholder='Titel'><br/>
                            <label for='text'>Dein Text</label>
                            <textarea name='text' id='text' class='form-control' rows='5' cols='30'
                                      placeholder='Neuer Beitrag'></textarea>
                            <br/>
                            <button type='submit' class='btn btn-primary'>Absenden</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>