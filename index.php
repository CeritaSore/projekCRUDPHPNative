<?php 
session_start();
include_once 'header.php'; ?>
<?php 
    $hal = isset($_REQUEST['hal']) ? $_REQUEST['hal'] : 'login';
    if (file_exists($hal . '.php')) {
        include_once $hal . '.php';
    } else {
        include_once 'login.php';
    } ?>

    
<?php include_once 'footer.php'; ?>