<?php
error_reporting(0);

$host = "localhost";
$userid = "root";
$passwd = "";
$db_name = "hi5accounts";

global $_Conn;
$_Conn = mysqli_connect($host,$userid,$passwd, $db_name) ;

global $randid;
$randid = rand(2000,56565689);

$sc_users = "hi5sc_users";
$sc_sales = "hi5sc_sales";
$sc_credit_sales = "hi5sc_credit_sales";
$sc_agents = "hi5sc_agents";
$sc_expenses = "hi5sc_expenses";
$sc_service_orders = "hi5sc_service_orders";
$sc_purchase = "hi5sc_purchase";


$sc_stock_value = "hi5sc_stock_value";
$sc_general_expenses = "hi5sc_general_expenses";
$sc_expenditure = "hi5sc_expenditure";
$sc_expenditure_expenses = "hi5sc_expenditure_expenses";
$sc_initial_capital = "hi5sc_initial_capital";
$sc_money_trans = "hi5sc_money_trans";
$sc_account_no = "hi5sc_account_no";
$sc_other_income = "hi5sc_other_income";
$sc_aca_year = "hi5sc_aca_year";
$sc_cash_hand = "hi5sc_cash_hand";
$sc_comp_name = "hi5sc_comp_name";

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>