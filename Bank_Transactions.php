<hr style='color:white;' />
<table border=0 cellpadding=10 cellspacing=10 align=center style='font-size:14px;font-weight:bold;width:100%;color:black;'>
<tr>
<form action="" method="post" name='form'>
<?php
    $selected = $_POST['bankname'];
    $aselected = $_POST['accno'];
?>
<tr><td colspan=1>Name of the Bank <span id='star'>*</span></td><td>
<select name='bankname'  class='form-control'>
<option value='' selected>-- Select Bank --</option>

<?php
include("config/host.php");
$sql = mysqli_query($_Conn, "select DISTINCT bankname from $sc_account_no where id order by bankname");
while($r = mysqli_fetch_object($sql))
{
    if($r->bankname != "") {
    ?>

        <option value='<?php echo $r->bankname; ?>' onClick='document.form.submit()' 
        <?php 
        if ($selected && $r->bankname == $selected) 
        { 
            $bank = $r->bankname;
            echo "selected"; 
        } 
    }

echo $r->bankname; 
?>
</option>
<?php
    }
?>
</select>
    </td></tr>
    <tr><td colspan=1>Account No. <span id='star'>*</span></td><td>
    <select name='accno'  class='form-control'>
    <option value='' selected>-- Select Account No. --</option>
    <?php
    $sql = mysqli_query($_Conn, "select DISTINCT accno from $sc_account_no where bankname='$selected'");
    while($r = mysqli_fetch_object($sql))
    {
        $accno = $r->accno;
?>

<option value='<?php echo $r->accno; ?>' onClick='document.form.submit()' 
<?php 
if ($aselected && $r->accno == $aselected) 
{ 
    $accno = $r->accno;
    echo "selected";
}
echo $r->accno; 
?>
    </option>
<?php
}
?>
</select>
</td></tr>
</form>


<form action="money_transactions_action.php" method="post" >
<input type='hidden' name='bankname'  value="<?php echo $bank; ?>">
<input type='hidden' name='accno'  value="<?php echo $aselected; ?>">

<tr><td style='width:20%;'>Date <span id='star'></span> </td><td>
<?php 
    $date1 = $india_date;
    $n = explode("-",$date1);
    $edate = $n[2]." / ".$n[1]." / ".$n[0]; 
?>

<input type='text' name='transdate' id='doj' value="<?php echo $india_date; ?>" id='dob' class='form-control'>
</td></tr>
<td>Ref. Details <span id='star'></span></td><td><input type='text' name='ref_no' class='form-control'></td></tr>
<td>Type of Transfer <span id='star'>*</span></td><td><select name='transtype'   class='form-control'>
<option value='' selected>-- Select Type --</option>
<option value='Deposit'>Deposit</option>
<option value='Withdrawal'>Withdrawal</option>
<option value='Interest'>Add Interest</option>
<option value='Initial Capital'>Initial Capital</option>
</select></td>
</tr>

<tr><td colspan=1>Mode of Transaction</td><td>
<select name='transmode'   class='form-control'>
<option value='' selected>-- Select Mode --</option>
<option value='Cash'>Cash</option>
<option value='Cheque'>Cheque</option>
<option value='Demand Draft'>Demand Draft</option>
<option value='Net Banking'>Net Banking</option>
</select></td>
</td></tr>
<td>Amount Rs. <span id='star'>*</span></td><td><input type='text' name='amountrs' class='form-control'></td></tr>
</tr>

<tr>
<td colspan=8 align=center >
<input type='submit' name='add' value="Add" id='button'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href='<?php echo getFullURL(_URL_6); ?>' id='abutton' >Clear</a>
</td>
<td></tr>
</table>

</form>
