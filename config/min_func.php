<?php
error_reporting(0);
if($_POST['serviceType'] ==  "Service-Orders")
{
    $rp = $_POST['oldbal'] - $_POST['recv_amt'];
}
else {
    $rp = $_POST['bill_amt'] - $_POST['recv_amt'];
}
echo $rp;
?>