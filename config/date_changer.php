<?php
error_reporting(0);
$ndate = explode("/", $_POST['dated']);
$rp = $ndate[2]."-".$ndate[0]."-".$ndate[1];
echo $rp;
?>