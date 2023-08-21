<form action="<?php echo getFullURL(_URL_1); ?>" method="POST" name='form'>

    <table cellpadding='10' cellspacing='10' align='center' style='font-size:14px;font-weight:bold;width:100%;color:black;'>
    <tr><td> </td><td> <input type='hidden' name='form_name' value='Services' ></td></tr>
    <tr><td> Date * </td><td> <input type='text' name='ddate' id='dob' value='<?php echo $india_date; ?>' class='form-control'></td></tr>
    <tr><td> Category *</td><td> <select name='category' id='combobox' class='form-control'>
        <option value=' '>---- Select ----</option>
        <option value='Collections'>Collections</option>
        <option value='Expenses'>Expenses</option>
    </select>
    </td></tr>
    <tr><td> Details</td><td> <input type='text' name='details' value="<?php echo $rw->details; ?>" class='form-control'></td></tr>
    <tr><td> Amount *</td><td> <input type='text' name='amt' id='amt' size=12 value="<?php echo $rw->job_value; ?>" class='form-control'></td></tr>
    </table>


    <table cellpadding=0 cellspacing='10' align='center' style='font-size:11px;font-weight:bold;'>
    <tr>
    <td colspan=0 align=center >
    <input type='submit' name='save' value="Save" id='button' style='margin-left:-100px;'>
    <a href='<?php echo getFullURL(_URL_1); ?>' id='abutton' >Clear</a>
    </td>
    <td></tr>
    </table>

<form>  

<?php
if(!empty($_POST['details']))   {
    $chk = AddItem($_POST);
    if($chk == 1){
        echo "<script type='text/javascript'> alert('"._SUCCESS."'); </script>";  
    }
    else {
        echo "<script type='text/javascript'> alert('"._ERROR."'); </script>";
    }
}
?>