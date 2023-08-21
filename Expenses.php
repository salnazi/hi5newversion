<?php
if($_POST['save'] == 'Save') {  
  $chk = AddItem($_POST);
  echo $chk;
}

$menu_items = [
    "Date",
    "Type of Expense",
    "Customer Name",
    "Description",   
    "Total"
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
		<input type='hidden' name='items[]' value='Expenses' class='form-control' >
		<tr><td> <?php echo $menu[0]; ?> <input type='text' name='items[]' id='dob' value="<?php echo $india_date; ?>" class='form-control' ></td></tr>
		<tr><td> <?php echo $menu[1]; ?> 
        <select name='items[]' class='form-control' required>
            <option value=' '> -- SELECT -- </option>
            <option value='General Expense'>General Expense</option>
            <option value='Freight Charges'>Freight Charges</option>           
        </select>
        </td></tr>
        <tr><td> <?php echo $menu[2]; ?> <input type='text' name='items[]'  class='form-control'> </td></tr>
		<tr><td> <?php echo $menu[3]; ?> <input type='text' name='items[]'  class='form-control' required> </td></tr>

    <tr>
        <td colspan='4' align='center'> 
        <input type='submit' name='save' value="Save" id='button'>
        <a href='<?php $_SERVER['PHP_SELF'] ; ?>' id='abutton'>Clear</a>
        </td>
    </tr>
</table>
<form>