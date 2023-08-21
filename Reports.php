<style type='text/css'>
th{
    background:#28a745;
    color:white;
    padding:10px;
}
</style>
<?php

    // Action - Edit data save process
    if(isset($_POST['save']) || $_POST['save_x']) {             
        $chk = UpdateItem($_POST);
        echo $chk;
        if(!empty($chk)){
            echo '<meta http-equiv="refresh" content="1">';
        }
    }
    if(isset($_POST['delete']) || $_POST['delete_x']) {    
        $chk = DeleteItem($_POST);
        echo $chk;
        if(!empty($chk)){
            echo '<meta http-equiv="refresh" content="1">';
        }
    }

    // Display records

    $report = GetReports(remove_ext($_GET), $_POST['rand']);
    echo "<table cellpaddding='10' cellspacing='10' align='center' style='width:100%;' id='tableview'>";
    echo "<thead>";
    switch(strtoupper(remove_ext($_GET['id']))) 
    {
        case 'SERVICE ORDERS REPORT':
            echo "<th> Date </th> <th> Customer Name </th> <th> Quoted Amount </th> <th> Received Payment Today </th> <th> Balance </th> <th> Status </th> <th> Options </th>";
        break;

        case 'PURCHASE REPORT':
            echo "<th> Date </th> <th> Invoice No. </th> <th> Supplier </th> <th> Details </th> <th> Qty </th> <th> Total </th> <th> Cost </th>  <th> Options </th>";            
        break;

        case 'SALES REPORT':
            echo "<th> Date </th> <th> Customer Type </th> <th> Customer Name </th> <th> Item Description </th> <th> Qty </th>  <th> Total </th> <th> Rate (Per Qty) </th> <th> Options </th>";
        break;

        case 'CREDIT SALES REPORT':
            echo "<th> Date </th> <th> Agent Name </th> <th> Bill No. </th> <th> Bill Amount </th> <th> Received Payment Today </th> <th> Balance </th> <th> Status </th> <th> Options </th>";
        break;

        case 'EXPENSES REPORT':
            echo "<th> Date </th> <th> Expenses Type </th> <th> Description </th><th> Amount </th> <th> Options </th>";
        break;

        case 'AGENT DETAILS':
            echo "<th> Date </th> <th> Agent Name </th> <th> Options </th>";
        break;
        
    }

    echo "</thead>";
    echo "<tbody>";
    
    foreach($report as $item)
    {  
        switch(strtoupper(remove_ext($_GET['id']))) 
        {

            case 'SERVICE ORDERS REPORT':

                echo "<tr>";
                echo "<form action='".$actual_link."' method='POST'>";
                echo "<input type='hidden' name='items[]' value='"._MENU_1."' >";

                if(isset($_POST['edit']) || $_POST['edit_x']) {  
                    
                    if ($item->status == 'On Process') {
                        $selected =  'selected';
                    }                    
                    if ($item->status == 'Delivered') {
                        $selected1 =  'selected';
                    }  
                    
                    echo "<input type='hidden' name='rand' value ='".$_POST['rand']."'>";
                    echo "<td><input type='text' name='items[]' value ='".$item->date."' class='form-control' ></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->customer_name."' class='form-control' disabled></td>"; 
                    echo "<input type='hidden' name='items[]' value ='".$item->customer_name."'>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->bill_amt."' class='form-control' id='bill_amt'></td>"; 
                    echo "<td><input type='text' name='items[]'  class='form-control' id='recv_amt'></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->balance."' class='form-control' id='bal'></td>"; 

                    echo "<input type='hidden' value ='".$item->balance."' class='form-control' id='oldbal'>";
                    echo "<input type='hidden' class='form-control' id='serviceType' value='Service-Orders'>";

                    echo "<td> 
                            <select name='items[]' class='form-control' required>
                                <option value=' '> -- SELECT -- </option>
                                <option value='On Process' $selected>On Process</option>
                                <option value='Delivered' $selected1>Delivered</option>                                         
                            </select>
                        </td>";                    
                    echo "<td><input type='image' src='images/tick.png' name='save' style='width:30px;'>";  
                    
                }
                else {

                    echo "<input type='hidden' name='rand' value ='".$item->randid."'>";
                    echo "<td>". $item->date."</td>";
                    echo "<td>". $item->customer_name."</td>";
                    echo "<td>". $item->bill_amt."</td>";
                    echo "<td>". $item->recv_amt."</td>";
                    echo "<td>". $item->balance."</td>";
                    echo "<td>". $item->status."</td>";   
                    echo "<td><input type='image' src='images/edit.png' name='edit' style='width:30px;'>&nbsp;"; 
                    ?>
                        <input type='image' name='delete' src='images/delete.png' onclick="return confirm('Are you sure you want to delete?');"></td>
                    <?php
                }
                echo "</form>";
                echo "</tr>"; 
            break;  


            case 'PURCHASE REPORT':
                echo "<tr>";
                echo "<form action='".$actual_link."' method='POST'>";
                echo "<input type='hidden' name='items[]' value='"._MENU_2."' >";

                if(isset($_POST['edit']) || $_POST['edit_x']) {  
                    
                    echo "<input type='hidden' name='rand' value ='".$_POST['rand']."'>";
                    echo "<td><input type='text' name='items[]' value ='".$item->date."' class='form-control' ></td>";                                   
                    echo "<td><input type='text' name='items[]' value ='".$item->inv_no."' class='form-control' ></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->supplier."' class='form-control' ></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->details."' class='form-control' ></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->qty."' class='form-control' id='qty'></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->total."' class='form-control' id='total'></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->cost."' class='form-control' id='cost'></td>";  
                    echo "<td><input type='image' src='images/tick.png' name='save' style='width:30px;'>";  
                    
                }
                else {

                    echo "<input type='hidden' name='rand' value ='".$item->randid."'>";
                    echo "<td>". $item->date."</td>";
                    echo "<td>". $item->inv_no."</td>";
                    echo "<td>". $item->supplier."</td>";
                    echo "<td>". $item->details."</td>";
                    echo "<td>". $item->qty."</td>";                    
                    echo "<td>". $item->total."</td>";  
                    echo "<td>". $item->cost."</td>";                    
                    echo "<td><input type='image' src='images/edit.png' name='edit' style='width:30px;'>&nbsp;"; 
                    ?>
                        <input type='image' name='delete' src='images/delete.png' onclick="return confirm('Are you sure you want to delete?');"></td>
                    <?php
                }
                echo "</form>";
                echo "</tr>";                
            break;   
            
            case 'SALES REPORT':
                echo "<tr>";
                echo "<form action='".$actual_link."' method='POST'>";
                echo "<input type='hidden' name='items[]' value='"._MENU_3."' >";

                if(isset($_POST['edit']) || $_POST['edit_x']) {  
                    
                    if ($item->customer_type == 'Agent') {
                        $selected =  'selected';
                    }                    
                    if ($item->customer_type == 'Shop') {
                        $selected1 =  'selected';
                    }  
                    if ($item->customer_type == 'Direct Sales') {
                        $selected2 =  'selected';
                    }  
                    
                    echo "<input type='hidden' name='rand' value ='".$_POST['rand']."'>";
                    echo "<td><input type='text' name='items[]' value ='".$item->date."' class='form-control' ></td>";                                   
                    echo "<td> 
                            <select name='items[]' class='form-control' required>
                                <option value=' '> -- SELECT -- </option>
                                <option value='Agent' $selected>Agent</option>
                                <option value='Shop' $selected1>Shop</option>
                                <option value='Direct Sales' $selected2>Direct Sales</option>            
                            </select>
                        </td>";
                    echo "<td><input type='text' name='items[]' value ='".$item->customer_name."' class='form-control' ></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->item_desc."' class='form-control' ></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->qty."' class='form-control' id='qty'></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->total."' class='form-control' id='total'></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->rate."' class='form-control' id='cost'></td>";                     
                    echo "<td><input type='image' src='images/tick.png' name='save' style='width:30px;'>";  
                    
                }
                else {

                    echo "<input type='hidden' name='rand' value ='".$item->randid."'>";
                    echo "<td>". $item->date."</td>";
                    echo "<td>". $item->customer_type."</td>";
                    echo "<td>". $item->customer_name."</td>";
                    echo "<td>". $item->item_desc."</td>";
                    echo "<td>". $item->qty."</td>";
                    echo "<td>". $item->total."</td>";
                    echo "<td>". $item->rate."</td>";    
                    echo "<td><input type='image' src='images/edit.png' name='edit' style='width:30px;'>&nbsp;"; 
                    ?>
                        <input type='image' name='delete' src='images/delete.png' onclick="return confirm('Are you sure you want to delete?');"></td>
                    <?php
                }
                echo "</form>";
                echo "</tr>"; 
               
            break;    

            case 'CREDIT SALES REPORT':

                echo "<tr>";
                echo "<form action='".$actual_link."' method='POST'>";
                echo "<input type='hidden' name='items[]' value='"._MENU_4."' >";

                if(isset($_POST['edit']) || $_POST['edit_x']) {  
                    
                    if ($item->status == 'Credit') {
                        $selected =  'selected';
                    }                    
                    if ($item->status == 'Paid') {
                        $selected1 =  'selected';
                    }  
                    
                    echo "<input type='hidden' name='rand' value ='".$_POST['rand']."'>";
                    echo "<td><input type='text' name='items[]' value ='".$item->date."' class='form-control' ></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->agent_name."' class='form-control' ></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->bill_no."' class='form-control' disabled></td>"; 
                    echo "<input type='hidden' name='items[]' value ='".$item->bill_no."'>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->bill_amt."' class='form-control' id='bill_amt'></td>"; 
                    echo "<td><input type='text' name='items[]' class='form-control' id='recv_amt'></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->balance."' class='form-control' id='bal'></td>"; 

                    echo "<input type='hidden' value ='".$item->balance."' class='form-control' id='oldbal'>";
                    echo "<input type='hidden' class='form-control' id='serviceType' value='Service-Orders'>";


                    echo "<td> 
                            <select name='items[]' class='form-control' required>
                                <option value=' '> -- SELECT -- </option>
                                <option value='Credit' $selected>Credit</option>
                                <option value='Paid' $selected1>Paid</option>                                         
                            </select>
                        </td>";                    
                    echo "<td><input type='image' src='images/tick.png' name='save' style='width:30px;'>";  
                    
                }
                else {

                    echo "<input type='hidden' name='rand' value ='".$item->randid."'>";
                    echo "<td>". $item->date."</td>";
                    echo "<td>". $item->agent_name."</td>";
                    echo "<td>". $item->bill_no."</td>";
                    echo "<td>". $item->bill_amt."</td>";
                    echo "<td>". $item->recv_amt."</td>";
                    echo "<td>". $item->balance."</td>";
                    echo "<td>". $item->status."</td>";   
                    echo "<td><input type='image' src='images/edit.png' name='edit' style='width:30px;'>&nbsp;"; 
                    ?>
                        <input type='image' name='delete' src='images/delete.png' onclick="return confirm('Are you sure you want to delete?');"></td>
                    <?php
                }
                echo "</form>";
                echo "</tr>"; 
            break;  

            case 'EXPENSES REPORT':
                echo "<tr>";
                echo "<form action='".$actual_link."' method='POST'>";
                echo "<input type='hidden' name='items[]' value='"._MENU_5."' >";
                if(isset($_POST['edit']) || $_POST['edit_x']) {  

                    if ($item->expense_type == 'General Expense') {
                        $selected =  'selected';
                    }                    
                    if ($item->expense_type == 'Freight Charges') {
                        $selected1 =  'selected';
                    }  
                    
                    echo "<input type='hidden' name='rand' value ='".$_POST['rand']."'>";
                    echo "<td><input type='text' name='items[]' value ='".$item->date."' class='form-control' ></td>";
                    echo "<td> <select name='items[]' class='form-control' required>
                            <option value=' '> -- SELECT -- </option>
                            <option value='General Expense' $selected>General Expense</option>
                            <option value='Freight Charges' $selected1>Freight Charges</option>           
                        </select></td>";                 
                    echo "<td><input type='text' name='items[]' value ='".$item->expense_desc."' class='form-control' ></td>"; 
                    echo "<td><input type='text' name='items[]' value ='".$item->amt."' class='form-control' ></td>"; 
                    echo "<td><input type='image' src='images/tick.png' name='save' style='width:30px;'>";  
                    
                }
                else {

                    echo "<input type='hidden' name='rand' value ='".$item->randid."'>";
                    echo "<td>". $item->date."</td>";
                    echo "<td>". $item->expense_type."</td>";
                    echo "<td>". $item->expense_desc."</td>";
                    echo "<td>". $item->amt."</td>";    
                    echo "<td><input type='image' src='images/edit.png' name='edit' style='width:30px;'>&nbsp;"; 
                    ?>
                        <input type='image' name='delete' src='images/delete.png' onclick="return confirm('Are you sure you want to delete?');"></td>
                    <?php
                }
                echo "</form>";
                echo "</tr>";    
            break;   

            case 'AGENT DETAILS':  
                echo "<tr>";
                echo "<form action='".$actual_link."' method='POST'>";
                echo "<input type='hidden' name='items[]' value='"._MENU_6."' >";
                
                if(isset($_POST['edit']) || $_POST['edit_x']) {   

                    echo "<input type='hidden' name='rand' value ='".$_POST['rand']."'>";
                    echo "<td><input type='text' name='items[]' value ='".$item->date."' class='form-control' ></td>";
                    echo "<td><input type='text' name='items[]' value ='".$item->agent_name."' class='form-control' ></td>";                 
                    echo "<td><input type='image' src='images/tick.png' name='save' style='width:30px;'>";  
                }
                else {       

                    echo "<input type='hidden' name='rand' value ='".$item->randid."'>";
                    echo "<td>". $item->date."</td>";
                    echo "<td>". $item->agent_name."</td>"; 
                    echo "<td><input type='image' src='images/edit.png' name='edit' style='width:30px;'>&nbsp;"; 
                    ?>
                        <input type='image' name='delete' src='images/delete.png' onclick="return confirm('Are you sure you want to delete?');"></td>
                    <?php
                }
              
                echo "</form>";
                echo "</tr>";
            break;  

        }
    }   
  
    echo "</tbody>";
    echo "</table>"; 
?>

<script>
$("#total").keyup(function(){
  var qty = document.getElementById("qty").value;
  var rate = document.getElementById("total").value;
  $.post("config/cost_func.php",
  {
    qty: qty,    
    rate: rate,    
  },
  function(salnazi){
    document.getElementById("cost").value = salnazi;
  });
});

$("#recv_amt").keyup(function(){
  var bill_amt = document.getElementById("bill_amt").value;
  var recv_amt = document.getElementById("recv_amt").value;
  var oldbal = document.getElementById("oldbal").value;
  var serviceType = document.getElementById("serviceType").value;

  $.post("config/min_func.php",
  {
    bill_amt: bill_amt,    
    recv_amt: recv_amt,   
    oldbal : oldbal,
    serviceType : serviceType 
  },
  function(salnazi){
        document.getElementById("bal").value = salnazi;    
    });
});

</script>