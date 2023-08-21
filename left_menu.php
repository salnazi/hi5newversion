<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="<?php echo _URL_LOGO; ?>" alt="<?php echo get_title(); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b><?php echo get_title(); ?></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">Welcome, <?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
        <li class="nav-item">
            <a href="<?php echo  _URL_1; ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                <?php echo remove_ext(_URL_1); ?>
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?php echo _URL_2; ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                <?php echo remove_ext(_URL_2); ?>
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?php echo _URL_3; ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                <?php echo remove_ext(_URL_3); ?>
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?php echo _URL_4; ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                <?php echo remove_ext(_URL_4); ?>
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?php echo _URL_5; ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                <?php echo remove_ext(_URL_5); ?>
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?php echo _URL_6; ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                <?php echo remove_ext(_URL_6); ?>
              </p>
            </a>
        </li>

      
        <!--<li class="nav-item">
            <a href="<?php echo _URL_7; ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                <?php echo remove_ext(_URL_7); ?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo _URL_7_1; ?>" class="nav-link">
                  <i class="far fa-book nav-icon"></i>
                  <?php echo remove_ext(_URL_7_1); ?>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo _URL_7_2; ?>" class="nav-link">
                  <i class="far fa-book nav-icon"></i>
                  <?php echo remove_ext(_URL_7_2); ?>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo _URL_7_3; ?>" class="nav-link">
                  <i class="far fa-book nav-icon"></i>
                  <?php echo remove_ext(_URL_7_3); ?>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo _URL_7_4; ?>" class="nav-link">
                  <i class="far fa-book nav-icon"></i>
                  <?php echo remove_ext(_URL_7_4); ?>
                </a>
              </li>
            </ul>
          </li>-->


          <li class="nav-item">
            <a href="<?php echo _URL_8; ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                <?php echo remove_ext(_URL_8); ?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo _URL_8_1; ?>" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <?php echo remove_ext(_URL_8_1); ?>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo _URL_8_2; ?>" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <?php echo remove_ext(_URL_8_2); ?>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo _URL_8_3; ?>" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <?php echo remove_ext(_URL_8_3); ?>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo _URL_8_4; ?>" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <?php echo remove_ext(_URL_8_4); ?>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo _URL_8_5; ?>" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <?php echo remove_ext(_URL_8_5); ?>
                </a>
              </li> 
              <li class="nav-item">
                <a href="<?php echo _URL_8_6; ?>" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <?php echo remove_ext(_URL_8_6); ?>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo _URL_8_7; ?>" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <?php echo remove_ext(_URL_8_7); ?>
                </a>
              </li>
            </ul>
          </li>




      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <div class="sidebar-custom">
      <a href="<?php echo _URL_CHANGE_LOG; ?>" class="btn btn-link"><i class="fas fa-cogs"></i></a>
      <a href="<?php echo _URL_CHANGE_LOG; ?>" class="btn btn-secondary hide-on-collapse pos-right">VERSION : <?php echo _VERSION; ?></a>
    </div>
  
  </aside>