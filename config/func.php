<?php
function Login($user,$pass)
{    
    global $_Conn;
    $query = mysqli_query($_Conn, "select * from ". $GLOBALS['sc_users']." where id");
    while($r = mysqli_fetch_object($query)) {        
        if($user == $r->userid && $pass == $r->passkey) {
            $rp = '1';
            $_SESSION['user_name'] = $_POST['userid'];
            $_SESSION['permission'] = $r->privilege;
            $_SESSION['randid'] = $r->randid;
            header("location:Homepage.php");
        }
        else {
            $rp = '0';
        }
    }
    return $rp;
}
function SumAmount($opt, $field)
{   
    switch(strtoupper($opt))
    {
        case "SERVICE ORDERS":    
            $tablename =  $GLOBALS['sc_service_orders'];           
        break;

        case "PURCHASE":    
            $tablename =  $GLOBALS['sc_purchase'];           
        break;

        case "SALES":                
            $tablename =  $GLOBALS['sc_sales'];          
        break;

        case "CREDIT SALES":                
            $tablename = $GLOBALS['sc_credit_sales'];
        break;  

        case "EXPENSES":                
            $tablename = $GLOBALS['sc_expenses'];
        break; 
        
        case "AGENTS":                
            $tablename =  $GLOBALS['sc_agents'];
        break;
    }   
    global $_Conn;
    $sql = mysqli_query($_Conn, "select SUM(".$field.") as sTotal from ".$tablename." where id");
    while($r = mysqli_fetch_array($sql)) {
      $rp =  $r['sTotal'];
    }
    return $rp;

}
function AgentCount($opt, $field)
{   
    switch(strtoupper($opt))
    {        
        case "AGENTS":                
            $tablename =  $GLOBALS['sc_agents'];
        break;
    }   
    global $_Conn;
    $sql = mysqli_query($_Conn, "select count(".$field.") as sTotal from ".$tablename." where id");
    while($r = mysqli_fetch_array($sql)) {
      $rp =  $r['sTotal'];
    }
    return $rp;

}
function get_title() 
{      
    global $_Conn;
    $sql = mysqli_query($_Conn, "select * from ".$GLOBALS['sc_comp_name']." where id");
    while($r = mysqli_fetch_object($sql)) {
        $rp =  $r->sch_name;
    }
    return $rp;
}
function remove_ext($url)
{
    $op = str_replace(array(_URL_HOME, ".php","_"),array("",""," "), $url);
    return $op;
}
function getFullURL($url)
{
    $op = str_replace(array("_"),array(" "), $url);
    return $op;
}

function cPurchase_BalanceQty($post) 
{      
    global $_Conn;    
    $sql = mysqli_query($_Conn, "select sum(qty) as RemainQty from ".$GLOBALS['sc_purchase']." where details = '".$post."' ");
    while($r = mysqli_fetch_object($sql)) {
        $rp =  $r->RemainQty;        
    }
    return $rp;
}

function cSales_BalanceQty($post) 
{      
    global $_Conn;
    $sql = mysqli_query($_Conn, "select sum(qty) as RemainQty from ".$GLOBALS['sc_sales']." where item_desc = '".$post."' ");
    while($r = mysqli_fetch_object($sql)) {
        $rp =  $r->RemainQty;        
    }
    return $rp;
}


function AddItem($post)
{
    global $_Conn;
    global $randid; 
    if($_POST['items'][2] != '')  
    {    
        $item1 = $post['items'][1];
        $item2 = $post['items'][2];            
        $item3 = $post['items'][3]; 
        $item4 = $post['items'][4]; 
        $item5 = $post['items'][5];         
        $item6 = $post['items'][6];
        $item7 = $post['items'][7];
        $cost = $post['items'][6] / $item5; 

        switch(strtoupper($post['items'][0]))
        {
            case "SERVICE ORDERS":  
                $Qry = mysqli_query($_Conn, "INSERT INTO ".$GLOBALS['sc_service_orders']." (date, customer_name, bill_amt, recv_amt, balance,status, randid) VALUES ('$item1', '$item2', '$item3','$item4', '$item5', '$item6', '$randid')");                
            break;

            case "PURCHASE":  
                $Qry = mysqli_query($_Conn, "INSERT INTO ".$GLOBALS['sc_purchase']." (date, inv_no, supplier,details, qty, cost, total, randid) VALUES ('$item1', '$item2', '$item3','$item4', '$item5', '$cost','$item6', '$randid')");                                
            break;

            case "SALES":     
                $Qry = mysqli_query($_Conn, "INSERT INTO ".$GLOBALS['sc_sales']." (date, customer_type, customer_name, item_desc, qty, rate, total, randid) VALUES ('$item1', '$item2', '$item3', '$item4', '$item5','$item6','$item7', '$randid')");                
            break;
            
            case "CREDIT SALES": 
                $Qry = mysqli_query($_Conn, "INSERT INTO ".$GLOBALS['sc_credit_sales']." (date, agent_name, bill_no,bill_amt, recv_amt, balance,status, randid) VALUES ('$item1', '$item2', '$item3','$item4', '$item5', '$item6','$item7', '$randid')");                
            break;

            case "EXPENSES":                 
                $Qry = mysqli_query($_Conn, "INSERT INTO ".$GLOBALS['sc_expenses']." (date, expense_type, expense_desc, amt, randid) VALUES ('$item1', '$item2',  '$item3',  '$item4','$randid')");                           
            break;
            
            case "ADD NEW AGENT":                      
                $Qry = mysqli_query($_Conn, "INSERT INTO ".$GLOBALS['sc_agents']." (date, agent_name, randid) VALUES ('$item1', '$item2', '$randid')");               
            break;

        }
        $rp = ($Qry) ? "<div class='alert alert-success' role='alert'>"._SUCCESS."</div>" : "<div class='alert alert-danger' role='alert'>"._ERROR."</div>";   
    }
    else {
        $rp = "<div class='alert alert-primary' role='alert'>"._NOTICE."</div>";              
    }
    return $rp;
}

function UpdateItem($data)
{

    $rand = $data['rand'];
    $items = $data['items'];

    global $_Conn;
    global $randid;

    switch(strtoupper($items[0]))
    {
        case "SERVICE ORDERS":                
            $tablename = $GLOBALS['sc_service_orders'];
            /*$Qry = mysqli_query($_Conn, "UPDATE $tablename SET 
                date = '".$items[1]."',
                agent_name = '".$items[2]."',
                bill_no = '".$items[3]."',
                bill_amt = '".$items[4]."',
                recv_amt = '".$items[5]."',
                balance = '".$items[6]."',
                status = '".$items[7]."'  
                WHERE randid = '".$rand."'        
            ");*/           
            $Qry = mysqli_query($_Conn, "INSERT INTO ".$tablename." (date, customer_name, bill_amt, recv_amt, balance,status, randid) VALUES ('".$items[1]."', '".$items[2]."', '".$items[3]."','".$items[4]."', '".$items[5]."', '".$items[6]."', '$randid')");                     
        break; 

        case "PURCHASE":    
            $tablename =  $GLOBALS['sc_purchase'];               
            $Qry = mysqli_query($_Conn, "UPDATE $tablename SET 
                date = '".$items[1]."',
                inv_no = '".$items[2]."',
                supplier = '".$items[3]."',
                details = '".$items[4]."',
                qty = '".$items[5]."',
                total  = '".$items[6]."',
                cost = '".$items[7]."'  
                WHERE randid = '".$rand."'        
            ");
        break;

        case "SALES":                
            $tablename =  $GLOBALS['sc_sales'];           
            $Qry = mysqli_query($_Conn, "UPDATE $tablename SET 
                date = '".$items[1]."',
                customer_type = '".$items[2]."',
                customer_name = '".$items[3]."',
                item_desc = '".$items[4]."',
                qty = '".$items[5]."',
                total = '".$items[6]."', 
                rate = '".$items[7]."'                
                WHERE randid = '".$rand."'        
            ");     
        break;

        case "CREDIT SALES":                
            $tablename = $GLOBALS['sc_credit_sales'];
            /*$Qry = mysqli_query($_Conn, "UPDATE $tablename SET 
                date = '".$items[1]."',
                agent_name = '".$items[2]."',
                bill_no = '".$items[3]."',
                bill_amt = '".$items[4]."',
                recv_amt = '".$items[5]."',
                balance = '".$items[6]."',
                status = '".$items[7]."'  
                WHERE randid = '".$rand."'        
            ");*/
            $Qry = mysqli_query($_Conn, "INSERT INTO ".$tablename." (date, agent_name, bill_no,bill_amt, recv_amt, balance,status, randid) VALUES ('".$items[1]."', '".$items[2]."', '".$items[3]."','".$items[4]."', '".$items[5]."', '".$items[6]."','".$items[7]."', '$randid')");                     
        break;  

        case "EXPENSES":                
            $tablename = $GLOBALS['sc_expenses'];            
            $Qry = mysqli_query($_Conn, "UPDATE $tablename SET 
                date = '".$items[1]."',
                expense_type = '".$items[2]."',
                expense_desc = '".$items[3]."',
                amt = '".$items[4]."'
                WHERE randid = '".$rand."'        
            ");     
        break; 
        
        case "ADD NEW AGENT":                
            $tablename =  $GLOBALS['sc_agents'];
            $Qry = mysqli_query($_Conn, "UPDATE $tablename SET 
                    date = '".$items[1]."',
                    agent_name = '".$items[2]."'
                    WHERE randid = '".$rand."'        
                ");
        break;
    }
    $rp = ($Qry) ? "<div class='alert alert-primary' role='alert'>"._UPDATE."</div>" : "<div class='alert alert-danger' role='alert'>"._ERROR."</div>";     
    return $rp;
}

function DeleteItem($data)
{
    $rand = $data['rand'];
    $items = $data['items'];

    global $_Conn;
    switch(strtoupper($items[0]))
    {
        case "SERVICE ORDERS":    
            $tablename =  $GLOBALS['sc_service_orders'];  
        break;

        case "PURCHASE":    
            $tablename =  $GLOBALS['sc_purchase'];  
        break;

        case "SALES":                
            $tablename =  $GLOBALS['sc_sales'];
        break;

        case "CREDIT SALES":                
            $tablename = $GLOBALS['sc_credit_sales'];
        break;  

        case "EXPENSES":                
            $tablename = $GLOBALS['sc_expenses'];
        break; 
        
        case "ADD NEW AGENT":                
            $tablename =  $GLOBALS['sc_agents'];
        break;
    }   
    $Qry = mysqli_query($_Conn, "DELETE FROM $tablename WHERE randid = '".$rand."' ");
    $rp = ($Qry) ? "<div class='alert alert-secondary' role='alert'>"._DELETE."</div>" : "<div class='alert alert-danger' role='alert'>"._ERROR."</div>";     
    return $rp;
}

function GetReports($post, $val = '')
{   
    global $_Conn;
    switch(strtoupper($post['id']))
    {
        case "SERVICE ORDERS REPORT":    
            $tablename =  $GLOBALS['sc_service_orders'];     
        break;

        case "PURCHASE REPORT":    
            $tablename =  $GLOBALS['sc_purchase'];     
        break;

        case "SALES REPORT":                
            $tablename =  $GLOBALS['sc_sales'];     
        break;

        case "CREDIT SALES REPORT":                
            $tablename = $GLOBALS['sc_credit_sales'];
        break;  

        case "EXPENSES REPORT":                
            $tablename = $GLOBALS['sc_expenses'];
        break; 
        
        case "AGENT DETAILS":                
            $tablename =  $GLOBALS['sc_agents'];     
        break;
    }
    if(!empty($val)) {     
        $Qry = mysqli_query($_Conn, "SELECT * FROM ".$tablename." WHERE randid='".$val."' ");    
    }
    else {
        //echo "SELECT * FROM ".$tablename ." GROUP BY customer_name and ORDER BY timestamp";
        //$Qry = mysqli_query($_Conn, "SELECT * FROM ".$tablename ." GROUP BY customer_name ORDER BY timestamp asc");    
        $Qry = mysqli_query($_Conn, "SELECT * FROM ".$tablename);    
    }    
    $rp = [];   
    while($r = mysqli_fetch_object($Qry)){
        $rp[] = $r;
    }   
    return $rp;
}

function GetAgent()
{
    global $_Conn;
    $Qry = mysqli_query($_Conn, "SELECT * FROM ".$GLOBALS['sc_agents']);
    $rp = '';
    $rp .= "<option value =' '>  -- SELECT -- </option>";
    while($r = mysqli_fetch_object($Qry)){
        $rp .= "<option value ='".$r->agent_name."'> ".$r->agent_name." </option>";
    }
    return $rp;
}
/*
function AddItem($post)
{
    global $_Conn;
    global $randid;
    if($post['ddate'] != "" && $post['amt'] != "" && $post['category'] != "")
    {
        $ddate = $post['ddate'];
        $category = $post['category'];
        if($post['category'] == 'Collections') 
        $collections = $post['amt'];
        else 
        $expenses = $post['amt'];
        $details = nl2br($post['details']);              
        $Qry = mysqli_query($_Conn, "INSERT INTO ".$GLOBALS['sc_services']." (date, category, details, collections, expenses, randid) VALUES ('$ddate', '$category', '$details', '$collections','$expenses', '$randid')");
        if($Qry){
            $rp = 1;
        }
    }
    else{
        $rp = 0;
    }
    return $rp;
}*/
/*function get_company_name() 
{  
    global $_Conn;
    $sql = mysqli_query($_Conn, "select * from ".$GLOBALS['sc_comp_name']." where id");
    while($r = mysqli_fetch_object($sql))
    {
        $rp =  "<h2 style='color:deeppink;font-family:calibri;font-size:26px;margin-top:0px;'>".$r->sch_name."<h2>";
    }
    return $rp;
}*/

?>