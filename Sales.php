<?php

if($_POST['save'] == 'Save')
{
    $chk = AddItem($_POST);
		echo $chk;	
}

$menu_items = [
  "Date",
  "Customer Type",
  "Customer Name",
  "Item Description",
  "Quantity",
  "Rate",
  "Total Amount"
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
    <tr><td> <?php echo $menu[0]; ?>  <input type='text' name='items[]' id='dob' value="<?php echo $india_date; ?>" class='form-control' required autocomplete='off'></td></tr>
    <tr><td> <?php echo $menu[1]; ?> 
        <select name='items[]' class='form-control' required>
            <option value=' '> -- SELECT -- </option>
            <option value='Agent'>Agent</option>
            <option value='Shop'>Shop</option>
            <option value='Direct Sales'>Direct Sales</option>            
        </select>
    </td></tr>
    <tr><td> <?php echo $menu[2]; ?> 
        <select name='items[]' class='form-control' required>
            <?php echo GetAgent(); ?>          
        </select>
    </td></tr>
    <tr><td> <?php echo $menu[3]; ?>  <input type='text' name='items[]' class='form-control' id='SearchProduct' autocomplete='off'></td></tr>
    <tr id='hidetr'><td><div id="suggesstion"></div></td></tr>
    <tr><td> <?php echo $menu[4]; ?>  <input type='text' name='items[]' class='form-control' id='qty' required autocomplete='off'></td></tr>
    <tr id='hidetr'><td><div id="QtyChk"></div></td></tr>
    <tr><td> <?php echo $menu[5]; ?>  <input type='text' name='items[]' class='form-control' id='rate' required autocomplete='off'></td></tr>
    <tr><td> <?php echo $menu[6]; ?>  <input type='text' name='items[]' class='form-control' id='total' required autocomplete='off'> </td></tr>
    <tr>
        <td colspan='4' align='center'> 
        <input type='submit' name='save' value="Save" id='button'>
        <a href='<?php $_SERVER['PHP_SELF'] ; ?>' id='abutton'>Clear</a>
        </td>
    </tr>
</table>
<form>


<style>
  ul li { list-style:none; }
  #hidetr {display: none;}
</style>



<script>
$("#qty").keyup(function(){
  var SearchProduct = document.getElementById("SearchProduct").value;
  $.post("config/chk_qty.php",
  {
    SearchProduct: SearchProduct        
  },
  function(salnazi){
    document.getElementById("total").value = salnazi;
  });
});
</script>


<script>
$("#rate").keyup(function(){
  var qty = document.getElementById("qty").value;
  var rate = document.getElementById("rate").value;
  $.post("config/acc_func.php",
  {
    qty: qty,    
    rate: rate,    
  },
  function(salnazi){
    document.getElementById("total").value = salnazi;
    $("#hidetr").css("display","inline");
  });
});
</script>



<script>
// AJAX call for autocomplete 
$(document).ready(function(){
	$("#SearchProduct").keyup(function(){
		$.ajax({
		type: "POST",
		url: "FetchProductName.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#SearchProduct").css("background","#FFF url(image/update.png) no-repeat 165px");
			$("#hidetr").css("display","inline");
		},
		success: function(data){
			$("#suggesstion").show();
			$("#suggesstion").html(data);
			$("#SearchProduct").css("background","#FFF");	
			$("#suggesstion").css("color","#026075");
		}
		});
	});
});
//To select country name
function SelectProduct(val) {
  $("#SearchProduct").val(val);
  $("#suggesstion").hide();
  $("#hidetr").css("display","none");
}
</script>
