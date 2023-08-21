
<?php   
    include("config/db_connection.php");
    $tablename = $GLOBALS['sc_stock_value'];                
    $field = 'details'; 

    if(!empty($_POST["keyword"])) 
    {
        $qry = mysqli_query($_Conn, "SELECT * FROM ".$tablename." WHERE details like '" . $_POST["keyword"] . "%' ORDER BY details LIMIT 0,10");       
        echo "<ul>";        
        while($r = mysqli_fetch_object($qry))
        {            
        ?>
            <li onClick="SelectProduct('<?php echo $r->details; ?>');"><?php echo $r->details; ?></li>
            <br>
        <?php 
        }         
        echo "</ul>";    
    } 
?>