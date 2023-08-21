<?php
if($_POST['save'] == 'Save') {  
  $chk = AddItem($_POST);
  echo $chk;
}

$menu_items = [
  "Date",  
  "Agent Name"
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
    <tr><td> <?php echo $menu[0]; ?> <input type='text' name='items[]' id='dated' value="<?php echo $india_date; ?>" class='form-control' required pattern="\d{4}-\d{2}-\d{2}"></td></tr>
    <tr><td> <?php echo $menu[1]; ?> <input type='text' name='items[]' class='form-control' id='chd' required></td></tr></td></tr>
    <tr>
        <td colspan='4' align='center'> 
        <input type='submit' name='save' value="Save" id='button'>
        <a href='<?php $_SERVER['PHP_SELF'] ; ?>' id='abutton'>Clear</a>
        </td>
    </tr>
</table>
<form>

<script>
$('#chd').click(function(){
  //var dated = document.getElementById('dated').value;
  $.post("config/date_changer.php",
  {
    dated: dated 
  },
  function(salnazi){
    document.getElementById("dated").value = salnazi;
  });
});
</script>