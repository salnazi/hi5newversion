
<?php 
    $item_code = $_POST['item_code']; 
    $sold_to = $_POST['sold_to']; 
    $ddate = $_POST['ddate']; 
    $pro_cost = $_POST['pro_cost']; 
    $rqty = $_POST['rqty']; 
    $s_cost = $_POST['s_cost']; 
    $qty = $_POST['qty']; 
    $billno = $_POST['billno']; 
    $totalamt = $_POST['s_cost'] * $_POST['qty'];
?>
<form action="" method="POST" name='form'>
<table cellpadding='10' cellspacing='10' align='center' style='font-size:14px;font-weight:bold;width:100%;color:black;'>
<input type='hidden' name='form_name' value='Orders' >
<?php
    $sql = mysqli_query($_Conn, "SELECT MAX(bill_no) AS newjobcode FROM $sc_sales ");
    while($row = mysqli_fetch_object($sql))
    {
    if ($_GET['jc'] == "")
    $new_code = $row->newjobcode + 1;
    else
    $new_code = $_GET['jc'];
    ?>
    <tr><Td> Bill No.</td><td> <?php echo $new_code; ?><input type='hidden' name='job_code' value='<?php echo $new_code; ?>' size=40 class="form-control"></td></tr>
    <tr><Td> Date *</td><td> <input type='text' name='ddate' id='dob' value='<?php echo $ddate; ?>' class="form-control"></td></tr>
    <tr><Td> Sold to </td><td> <input type='text' name='sold_to' size=40 value='<?php echo $sold_to; ?>' class="form-control"></td></tr>
    <tr><Td> Item Code *</td><td> <input type='text' id='txt1' name='item_code'  value='<?php echo $item_code; ?>' autocomplete="off" onkeyup="showHint(this.value)" class="form-control"><br>
    <div style="font-size:13px;position:absolute;background:white;width:144px;">
        <span id="txtHint"></span></div>
        </td></tr> 

    <?php
    $sql = mysqli_query($_Conn, "select DISTINCT pro_name, brand_name,cost,qty from $sc_stock_value where item_code='$item_code'");
    while($r = mysqli_fetch_object($sql))
    {
    $pro_name = $r->pro_name;
    $brand_name = $r->brand_name;
    $pro_cost = $r->cost;
    $rqty = $r->qty;
}
?>
<tr><Td> Product Name</td><td> <?php echo $pro_name; ?> <input type='hidden' name='pro_name' size=40 value="<?php echo $pro_name; ?>" class='form-control'></td></tr>
<tr><Td> Brand Name</td><td> <?php echo $brand_name; ?><input type='hidden' name='brand_name' size=40 value="<?php echo $brand_name; ?>" class='form-control'></td></tr>
<tr><Td> Product Cost *</td><td> <?php echo $pro_cost; ?><input type='hidden' name='pro_cost' size=40 value="<?php echo $pro_cost; ?>" class='form-control'></td></tr>
<tr><Td> Available In Stock (Qty) </td><td> <?php echo $rqty; ?><input type='hidden' name='qty' size=40 value="<?php echo $rqty; ?>" class='form-control'></td></tr>
<tr><Td> Quantity *</td><td> <input type='text' name='qty' size=12 value="<?php echo $_POST['qty']; ?>" onKeyUp='document.form.submit()' class='form-control'></td></tr>
<tr><Td> Selling Price (Per Piece) *</td><td> <input type='text' name='s_cost' size=40 value="<?php echo $s_cost; ?>"  class='form-control'></td></tr>
<tr><Td> Total Amount *</td><td> <input type='text' name='totalamt' size=40 value="<?php echo $totalamt; ?>" onKeyUp='document.form.submit()' class='form-control'></td></tr>
</form>


<form action="add_form_sales.php" method="post">
    <input type='hidden' name='qty' size=40 value="<?php echo $qty; ?>" >
    <input type='hidden' name='job_code' size=40 value="<?php echo $job_code; ?>" >
    <input type='hidden' name='ddate' size=40 value="<?php echo $ddate; ?>" >
    <input type='hidden' name='item_code' size=40 value="<?php echo $item_code; ?>" >
    <input type='hidden' name='bill_no' size=40 value="<?php echo $new_code; ?>" >
    <input type='hidden' name='sold_to' size=40 value="<?php echo $sold_to; ?>" >
    <input type='hidden' name='pro_name' size=40 value="<?php echo $pro_name; ?>" >
    <input type='hidden' name='brand_name' size=40 value="<?php echo $brand_name; ?>" >
    <input type='hidden' name='s_cost' size=12 value="<?php echo $s_cost; ?>">
    <input type='hidden' name='pro_cost' size=12 value="<?php echo $pro_cost; ?>">
    <input type='hidden' name='totalamt' size=12 value="<?php echo $totalamt; ?>">
    </table>

    <table border=0 cellpadding=0 cellspacing=10 align=center style='font-size:11px;font-weight:bold;'>
    <tr>
    <td colspan=0 align=center >
    <input type='submit' name='save' value="Save" id='button' style='margin-left:-100px;'>
    <a href='<?php echo getFullURL(_URL_3); ?>' id='abutton' >Clear</a>
    </td>
    <td></tr>
    </table>

<form>
<?php } ?>