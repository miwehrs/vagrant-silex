<?php
$view->extend('layout.html.php');
$view['slots']->set('title', 'Beiträge');
?>

<!DOCTYPE html>

<!-- Ansicht mit allen vorhandenen Blogeinträgen (mit Datum und Autor) -->
<html>
<div class='container'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='panel panel-default'>
                <div class='panel-heading'><b>Beiträge</b></div>
                <div class='panel-body'>
                    <?php foreach ($posts as $post) { ?>
                        <div class='panel panel-default'>
                            <div class='panel-heading'>
                                <?php echo $post['title'] . ' vom ' . $post['created_at'] ?>
                            </div>
                            <div class='panel-body'>
                                <?php echo substr($post['text'], 0, 200); ?>
                                <?php if (strlen($post['text']) > 200) { ?>
                                    [...]
                                    <br/>
                                    <b>-<?php echo $post['author'] ?></b>
                                    <br/><br/>
                                    <a href='/beitrag/<?php echo $post['id'] ?>'>
                                        Weiterlesen
                                    </a>
                                <?php } else { ?>
                                <br/>
                                <b>-<?php echo $post['author'] ?></b>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</html>