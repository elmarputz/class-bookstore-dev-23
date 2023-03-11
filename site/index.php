<?php 

require_once('inc/bootstrap.php');
$view = $default_view;



if (isset($_REQUEST['view']) && 
    file_exists(__DIR__ . '/views/' . $_REQUEST['view'] . '.php')) {
        $view = $_REQUEST['view'];

        // index.php?view=../inc/boostrap.php
}


require_once('views/' . $view . '.php');