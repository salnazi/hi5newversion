
<!DOCTYPE html>
<html lang="en">
<?php include ("head.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<div class="login-box">
  <div class="login-logo">
 <img src='<?php echo  _URL_LOGO; ?>' height='100'>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo get_title(); ?> Login Access</p>
      <form action="<?php echo _URL_BASE; ?>" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name='user'>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name='pass'>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<aside class="control-sidebar control-sidebar-dark">      
</aside>
</div>
<?php include ("footer_js.php"); ?>
</body>
</html>

<?php
    if(isset($_POST['user'])) {
      $chk = Login($_POST['user'], $_POST['pass']);
      $_SESSION['username'] = $_POST['user'];
      if($chk == 0) 
        echo "<script type='text/javascript'> alert('Invalid Username and Password'); </script>";
    }    
?>  