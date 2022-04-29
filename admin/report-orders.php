<?php 
session_start();
include('inc/header.php');
include 'Enquiry.php';
$enquiry = new Enquiry();
$enquiry->checkLoggedIn();
?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Orders
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active">Orders</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Orders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th> 
                  <th style="white-space: nowrap;">departure</th>
                  <th style="white-space: nowrap;">destination</th> 
                  <th style="white-space: nowrap;">hotel</th> 
                  <th style="white-space: nowrap;">transport_type</th> 
                  <th style="white-space: nowrap;">members</th> 
                  <th style="white-space: nowrap;">date </th> 
                  <th style="white-space: nowrap;">travel_charge</th> 
                  <th style="white-space: nowrap;">stay_charge</th> 
                  <th style="white-space: nowrap;">total_order_amt</th>  
                </tr>
                </thead>
                <tbody>
                <?php		
                		$OrdersList = $enquiry->getOrderList();
                        foreach($OrdersList as $OrdersForm){ 
 
                                $fdate=date_create($OrdersForm["fdate"]);
                                $fdate= date_format($fdate,"d-m-Y");

                                $tdate=date_create($OrdersForm["tdate"]);
                                $tdate= date_format($tdate,"d-m-Y");
                                                         
                            echo '
                              <tr>
                                <td>'.$OrdersForm["id"].'</td> 
                                <td style="white-space: nowrap;">'.$OrdersForm["departure"].'</td>
                                <td style="white-space: nowrap;">'.$OrdersForm["destination"].'</td> 
                                <td style="white-space: nowrap;">'.$OrdersForm["hotel"].'</td> 
                                <td style="white-space: nowrap;">'.$OrdersForm["transport_type"].'</td>  
                                <td style="white-space: nowrap;">'.$OrdersForm["members"].'</td> 
                                <td style="white-space: nowrap;">'.$fdate .' to '. $tdate.'</td> 
                                <td style="white-space: nowrap;">'.$OrdersForm["travel_charge"].'</td> 
                                <td style="white-space: nowrap;">'.$OrdersForm["stay_charge"].'</td> 
                                <td style="white-space: nowrap;">'.$OrdersForm["total_order_amt"].'</td>  
                                 
                              </tr>
                            ';
                        }       
                ?>
               
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
 
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php include('inc/footer.php');?>
 

