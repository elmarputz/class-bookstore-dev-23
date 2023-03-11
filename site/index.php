<?php

use Bookshop\Book;

require_once('inc/bootstrap.php');
$view = $default_view;



if (isset($_REQUEST['view']) && 
    file_exists(__DIR__ . '/views/' . $_REQUEST['view'] . '.php')) {
        $view = $_REQUEST['view'];

        // index.php?view=../inc/boostrap.php
}

$c = new Bookshop\Category(1, 'Test');
var_dump($c);

$b = new Bookshop\Book(1, 1, "Testbuch", "Testautor", 23.33);
var_dump($b);

$user = null;

require_once('views/' . $view . '.php');