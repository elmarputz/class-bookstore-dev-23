<?php 

require_once('inc/bootstrap.php');
$view = $default_view;



if (isset($_REQUEST['view']) && 
    file_exists(__DIR__ . '/views/' . $_REQUEST['view'] . '.php')) {
        $view = $_REQUEST['view'];

        // index.php?view=../inc/boostrap.php
}

$c = new Bookshop\Category(1, 'Test');
var_dump($c);

$user = null;

require_once('views/' . $view . '.php');