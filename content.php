<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <div class="container-fluid" >
        <div class="row mb-2" >
          <div class="col-sm-6" >
       
           <h1 style='font-color:white;background:#05F1FC;'> 
           <?php    
                //include (_URL_NOTICE_MSG); 
            ?>
            </h1>
               
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo _URL_SIGN_OUT; ?>" id='button'>Sign Out</a></li>         
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card card-row card-secondary">
              <div class="card-header">
                <h2 class="card-title"><b><?php echo remove_ext($_GET['id']); ?></b></h2>
              </div>
              <div class="card-body">
              <?php 
               switch(remove_ext($_GET['id']))
              {
                  case "Service Orders":
                    include("Service_Orders.php");
                  break;
                  case "Purchase":
                    include("Purchase.php");
                  break;
                  case "Sales":
                    include("Sales.php");
                  break;
                  case "Credit Sales":
                    include("Credit_Sales.php");
                  break;
                  case "Expenses":
                    include("Expenses.php"); 
                  break;
                  case "Add New Agent":
                    include("Add_New_Agent.php");
                  break;
                  case "Setting":
                    include("Setting.php");
                  break;
                  case "Reports":
                    include("Reports.php");
                  break;

                  case "Service Orders Report":
                  case "Purchase Report":
                  case "Sales Report":
                  case "Credit Sales Report":
                  case "Expenses Report":
                  case "Agent Details":
                    include("Reports.php");
                  break;
                  default:
                    include("dashboard.php");
                  break;
                  /* 
                  
                  case "Orders-Edit":
                    include("orders-edit.php");
                  break;
                  case "Services":
                    include("Services.php");
                  break;
                  case "Services-Edit":
                    include("services-edit.php");
                  break;                  
                  case "Bank Transactions":
                    include("Bank_Transactions.php"); 
                  break;                  
                  case "Backup":
                    include("Backup.php");
                  break;
                  */
                }
                
              ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
               
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>