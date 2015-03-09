<?php
$view->extend('layout.html.php');
$view['slots']->set('title', $post['title']);
?>

<!DOCTYPE html>
<html>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo $post['title'] ?>
                    <br/>
                    <?php echo $post['created_at'] ?>
                </div>
                <div class="panel-body">
                    <?php echo $post['text'] ?>
                </div>
                <div class="panel-footer">
                    <a href="/beitraege">
                        zurück
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</html>