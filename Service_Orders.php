<?php
if($_POST['save'] == 'Save') {  
  $chk = AddItem($_POST);
  echo $chk;
}

$menu_items = [
  "Date",
  "Customer Name",
  "Quoted Amount",
  "Advance Paid",
  "Balance",
  "Status"
];
foreach($menu_items as $sm)
{
  $menu[] = '<div class="input-group mb-3">
              <div class="input-group-prepend">
              <button type="button" class="btn btn-success">'.$sm.'</button>
            </div>';
}
?>

<form action="<?php $_SERVER['PHP_SELF'] ; ?>" method="POST">
<table border='0' cellpadding='10' cellspacing='10' align='center' style='font-size:14px;font-weight:bold;width: 100%;' id='salnazi_table'>
    <input type='hidden' name='items[]' value='<?php echo remove_ext($_GET['id']); ?>'>
    <tr><td> <?php echo $menu[0]; ?> <input type='text' name='items[]' id='dob' value="<?php echo $india_date; ?>" class='form-control'  ></td></tr>   
    <tr><td> <?php echo $menu[1]; ?> <input type='text' name='items[]' class='form-control'></td></tr>
    <tr><td> <?php echo $menu[2]; ?> <input type='text' name='items[]'  class='form-control' id='bill_amt' required></td></tr>
    <tr><td> <?php echo $menu[3]; ?> <input type='text' name='items[]' class='form-control' id='recv_amt' required></td></tr>
    <tr><td> <?php echo $menu[4]; ?> <input type='text' name='items[]'  class='form-control' id='total' required>  </td></tr>
    <tr><td> <?php echo $menu[5]; ?> &nbsp;&nbsp;&nbsp;&nbsp; <input type='radio' name='items[]' checked value='On Process'> &nbsp;&nbsp; On Process &nbsp;&nbsp;&nbsp;&nbsp;
            <input type='radio' name='items[]'  value='Delivered' > &nbsp;&nbsp; Delivered</td></tr>
    <tr>
        <td colspan='4' align='center'> 
        <input type='submit' name='save' value="Save" id='button'>
        <a href='<?php $_SERVER['PHP_SELF'] ; ?>' id='abutton'>Clear</a>
        </td>
    </tr>
</table>
<form>

<script>
$("#recv_amt").keyup(function(){
  var bill_amt = document.getElementById("bill_amt").value;
  var recv_amt = document.getElementById("recv_amt").value;
  $.post("config/min_func.php",
  {
    bill_amt: bill_amt,    
    recv_amt: recv_amt,    
  },
  function(salnazi){
    document.getElementById("total").value = salnazi;
  });
});
</script>