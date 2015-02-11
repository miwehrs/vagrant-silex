<?php
$view->extend('layout.html.php');
$view['slots']->set('title', "Form");
?>

<!DOCTYPE html>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Neuer Beitrag</div>
                <div class="panel-body">
                    <div class="form-group">
                    <label for="title">Titel</label>
                        <form action="/form" method="post">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Titel"><br/>
                            <label for="text">Dein Text</label>
                            <textarea name="text" id="text" class="form-control" rows="5" cols="30" placeholder="Neuer Beitrag"></textarea>
                            <!--Subscribe Newsletter
                            input type="checkbox" name="subscribe"><-->
                            <br/>
                            <button type="submit" class="btn btn-primary">Absenden</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Beiträge</b></div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div>