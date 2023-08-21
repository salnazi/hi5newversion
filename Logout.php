<?php
    include ('config/define_menu.php');
    $index = _URL_BASE;
    session_start();
    session_destroy();
    header("Location: $index");
?>