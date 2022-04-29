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
        Destination
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active">Destination</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Destination</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th> 
                  <th style="white-space: nowrap;">place</th>
                  <th style="white-space: nowrap;">state</th> 
                  <th style="white-space: nowrap;">type</th> 
                  <th style="white-space: nowrap;">flight_charge</th> 
                  <th style="white-space: nowrap;">train_charge</th> 
                  <th style="white-space: nowrap;">bus_charge</th> 
                </tr>
                </thead>
                <tbody>
                <?php		
                		$DestinationList = $enquiry->getDestinationList();
                        foreach($DestinationList as $DestinationForm){ 
                            echo '
                              <tr>
                                <td>'.$DestinationForm["id"].'</td> 
                                <td style="white-space: nowrap;">'.$DestinationForm["place"].'</td>
                                <td style="white-space: nowrap;">'.$DestinationForm["state"].'</td> 
                                <td style="white-space: nowrap;">'.$DestinationForm["type"].'</td> 
                                <td style="white-space: nowrap;">'.$DestinationForm["flight_charge"].'</td> 
                                <td style="white-space: nowrap;">'.$DestinationForm["train_charge"].'</td> 
                                <td style="white-space: nowrap;">'.$DestinationForm["bus_charge"].'</td> 
                                 
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
 

