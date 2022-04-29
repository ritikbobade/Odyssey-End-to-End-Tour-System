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
        Hotels
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active">Hotels</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hotels</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th> 
                  <th style="white-space: nowrap;">Name</th>
                  <th style="white-space: nowrap;">Amount</th> 
                </tr>
                </thead>
                <tbody>
                <?php		
                		$HotelList = $enquiry->getHotelList();
                        foreach($HotelList as $HotelForm){ 
                            echo '
                              <tr>
                                <td>'.$HotelForm["id"].'</td> 
                                <td style="white-space: nowrap;">'.$HotelForm["hotel_name"].'</td>
                                <td style="white-space: nowrap;">'.$HotelForm["amount"].'</td> 
                                 
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
 

