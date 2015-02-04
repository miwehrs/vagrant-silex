<?php
$view->extend('layout.html.php');
$view['slots']->set('title', "Books");
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="jumbotron">
                <h1>Books</h1>
                <p>Lorem ipsum dolor...</p>
                        <span class="label-primary">
                            <p><a class="btn btn-primary btn-lg" href="#" role="button">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    Search Books
                                </a></p>
                        </span>
            </div>
        </div>
    </div>
</div>