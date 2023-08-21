<section class="content">
      <div class="container-fluid">      
        <div class="row">
         
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"><img src='images/report.png' style='width:50px;'></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Purchase</span>
                        <span class="info-box-number"> Total : <?php echo SumAmount('Purchase', 'total') ; ?>              
                        </span>
                    </div>             
                </div>          
            </div>

            
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"><img src='images/report.png' style='width:50px;'></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sales</span>
                        <span class="info-box-number">Total : <?php echo SumAmount('Sales','total') ; ?></span>
                    </div>            
                </div>           
            </div>
            
            
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"><img src='images/report.png' style='width:50px;'></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Expenses</span>
                        <span class="info-box-number">Total : <?php echo SumAmount('EXPENSES','amt')  ; ?></span>
                    </div>            
                </div>
            </div>


        
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"><img src='images/report.png' style='width:50px;'></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Registered Members</span>
                        <span class="info-box-number">Total : <?php echo AgentCount('Agents','agent_name') ; ?></span>
                    </div>             
                </div>
            </div>
           

        
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"><img src='images/report.png' style='width:50px;'></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Credit Sales</span>
                    <span class="info-box-number">Total : <?php echo SumAmount('Credit Sales','bill_amt') ; ?></span>
                </div>              
                </div>            
            </div>

        
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"><img src='images/report.png' style='width:50px;'></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Credit Sales</span>
                    <span class="info-box-number">Received : <?php echo SumAmount('Credit Sales','recv_amt') ; ?></span>
                </div>              
                </div>            
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"><img src='images/report.png' style='width:50px;'></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Credit Sales</span>
                    <span class="info-box-number" style='color:red;'>Outstanding : <?php echo SumAmount('Credit Sales','balance') ; ?></span>     
                </div>              
                </div>            
            </div>

     
    </div>
</div>
</section>
    