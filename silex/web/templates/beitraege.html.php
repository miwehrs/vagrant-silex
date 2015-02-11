<?php
/**
 * @var $view
 * @var $view \Symfony\Component\Templating\Helper\SlotsHelper
 * @var $title
 * @var $text
 */

$view->extend('layout.html.php');
$view['slots']->set('title', "Beiträge");
if ($title == '') {
    $title = 'Leider gibt es noch keine Beiträge';
}
$text = $text ? $text : 'Sende den ersten Beitrag';
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Beiträge</b></div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $title ?>
                        </div>
                        <div class="panel-body">
                            <?php echo $text?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>