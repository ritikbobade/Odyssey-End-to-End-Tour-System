<?php include("header.php");?> 

<?php  

$orderid = $_GET["orderid"];
$orderid=trim($orderid);

$sqltmpord = "SELECT * FROM temp_orders WHERE id=$orderid";
$resulttmpord = mysqli_query($conn, $sqltmpord);
$rowtmpord = mysqli_fetch_assoc($resulttmpord);

$destinationx=$rowtmpord["destination"];

$transport_typex=$rowtmpord["transport_type"];
$membersx=$rowtmpord["members"];
$daysx=$rowtmpord["days"];

$sqldst = "SELECT * FROM  destination  WHERE id=$destinationx";
$resultdst = mysqli_query($conn, $sqldst);
$rowdst = mysqli_fetch_assoc($resultdst);
$placex=$rowdst["place"];
$statex=$rowdst["state"];
$flight_chargex=$rowdst["flight_charge"];
$train_chargex=$rowdst["train_charge"];
$bus_chargex=$rowdst["bus_charge"];

$travel_charge=0;
if (trim($transport_typex)==='flight') {
   $travel_charge=$flight_chargex*$membersx;  
} elseif (trim($transport_typex)==='train') {
   $travel_charge=$train_chargex*$membersx;       
} elseif (trim($transport_typex)==='bus') {
   $travel_charge=$bus_chargex*$membersx;    
}

 
$hotelx=$rowtmpord["hotel"];
$sqlhtl = "SELECT * FROM  hotels  WHERE id=$hotelx";
$resulthtl = mysqli_query($conn, $sqlhtl);
$rowhtl = mysqli_fetch_assoc($resulthtl);
$hotel_namex=$rowhtl["hotel_name"];
$hotel_amountx=$rowhtl["amount"];

$stay_charge=0; 
$stay_charge=$hotel_amountx*$daysx;   

$total_amt=$stay_charge+$travel_charge;

// $userid=$_SESSION['userid'];
// $userid=trim($userid);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit_final_order'])){
        extract($_POST);    
        $sqlinsertorder = "INSERT INTO orders (departure, destination, hotel, transport_type, days, members, fdate, tdate, travel_charge, stay_charge, total_order_amt, userid, created)
        VALUES ('$departure', '$destination', '$hotel', '$transport_type', '$days', '$members', '$fdate', '$tdate', '$travel_charge', '$stay_charge', '$total_order_amt', '2', now())";

        if (mysqli_query($conn, $sqlinsertorder)) {
            $neworderid = mysqli_insert_id($conn);
           echo "<script> alert('Your Tour Order Submitted Successfully....'); location.href = 'index.php';  </script>";
        } else {
          echo "<script> alert('Something Went Wrong, Please Try Again Later');  </script>";
        } 
    }
}
?>

<style type="text/css">
    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
        font-size: 17px;
    }

    .travel-select-icon .form-control, .travel-check-icon .form-control { 
        border: 1px solid #9b9b9b;  
    }

    .travel-select-icon:after { 
        color: #242424; 
        border: 1px solid #9b9b9b; 
    }

    .travel-select-icon select, .travel-check-icon input {
        color: #646464; 
    }

    .caption h4 {
        margin-bottom: 15px;
    }

    .single-special-offer-txt {
        padding: 105px 0 0;
    }

    td, th {
        padding: 0;
        padding: 10px 15px;
        text-transform: capitalize; 
    }
</style>
<!--special-offer start-->
        <section   class="special-offer">
            <div class="container">
                <div class="special-offer-content">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="single-special-offer">
                                <div class="single-special-offer-txt">
                                     
                                     <div class="blog-content">
                                        <div class="row">

                                            <div class="col-sm-12 col-md-12">
                                                <div class="thumbnail">     
                                                  
                                                    <div class="caption" style="padding: 40px 30px 60px 30px;">
                                                        <div class="blog-txt">
                                                            <h3> Your Tour Package Summary </h3>
                                                          

                                                            <table style="margin-top: 25px;">
                                                                <tr>
                                                                    <td style="width:50%;"><b>Departure : </b></td>
                                                                    <td style="width:50%;"><?php echo $rowtmpord["departure"]; ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width:50%;"><b>Destination :</b></td>
                                                                    <td style="width:50%;"><?php echo $placex; ?>, <?php echo $statex; ?> Tour</td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width:50%;"><b>Hotel :</b></td>
                                                                    <td style="width:50%;"><?php echo $hotel_namex; ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width:50%;"><b>Favourable Transport Type :</b></td>
                                                                    <td style="width:50%;"><?php echo $rowtmpord["transport_type"]; ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width:50%;"><b>How Many Days :</b></td>
                                                                    <td style="width:50%;"> <?php echo $rowtmpord["days"]; ?> Days <?php echo $rowtmpord["days"]-1; ?> Nights</td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width:50%;"><b>Total Members :</b></td>
                                                                    <td style="width:50%;"><?php echo $rowtmpord["members"]; ?> Members</td>
                                                                </tr>

                                                                <?php 

                                                                    $fdate=date_create($rowtmpord["fdate"]);
                                                                    $fdate= date_format($fdate,"d-m-Y");

                                                                    $tdate=date_create($rowtmpord["tdate"]);
                                                                    $tdate= date_format($tdate,"d-m-Y");
                                                                ?>

                                                                <tr>
                                                                    <td style="width:50%;"><b>Expected Travel Date :</b></td>
                                                                    <td style="width:50%;">Between <?php echo $fdate; ?> To <?php echo $tdate; ?> </td>
                                                                </tr>
                                                            </table>
 
 
                                                            
                                                        </div><!--/.blog-txt-->
                                                    </div><!--/.caption-->
                                                </div><!--/.thumbnail-->

                                            </div><!--/.col-->

                                           
                                        </div><!--/.row-->
                                    </div><!--/.blog-content-->

                                    
                                </div><!--/.single-special-offer-txt-->
                            </div><!--/.single-special-offer-->
                        </div><!--/.col-->



                        <div class="col-sm-4">
                            <div class="single-special-offer">
                                <div class="single-special-offer-txt">
                                     
                                     <div class="blog-content">
                                        <div class="row">

                                            <div class="col-sm-12 col-md-12">
                                                <div class="thumbnail">     
                                                  
                                                    <div class="caption" style="padding: 40px 25px 60px 25px;">
                                                        <div class="blog-txt">

                                                            <h3> Tour Package Amount </h3>

                                                            <table style="margin-top: 25px;">
                                                                <tr>
                                                                    <td style="width:50%;"><b>Travel Charges : </b></td>
                                                                    <td style="width:50%; text-align: right;"> ₹ <?php echo number_format($travel_charge,2); ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width:50%;"><b>Stay Charges :</b></td>
                                                                    <td style="width:50%; text-align: right;"> ₹ <?php echo  number_format($stay_charge,2); ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width:50%;"><hr><b>Total Amount :</b></td>
                                                                    <td style="width:50%; text-align: right;"><hr> ₹ <?php echo number_format($total_amt,2); ?></td>
                                                                </tr>
                                                            </table>


                                                            <form action="" method="post">
                                                                <input type="hidden" name="departure" value="<?php echo $rowtmpord["departure"]; ?>">
                                                                <input type="hidden" name="destination" value="<?php echo $placex; ?>">
                                                                <input type="hidden" name="hotel" value="<?php echo $hotel_namex;; ?>">
                                                                <input type="hidden" name="transport_type" value="<?php echo $rowtmpord["transport_type"]; ?>">
                                                                <input type="hidden" name="days" value="<?php echo $rowtmpord["days"]; ?>">
                                                                <input type="hidden" name="members" value="<?php echo $rowtmpord["members"]; ?>">
                                                                <input type="hidden" name="fdate" value="<?php echo $rowtmpord["fdate"]; ?>">
                                                                <input type="hidden" name="tdate" value="<?php echo $rowtmpord["tdate"]; ?>">
                                                                
                                                                <input type="hidden" name="travel_charge" value="<?php echo $travel_charge; ?>">
                                                                <input type="hidden" name="stay_charge" value="<?php echo $stay_charge; ?>">
                                                                <input type="hidden" name="total_order_amt" value="<?php echo $total_amt; ?>">
                                                            
 
                                                            <div class="offer-btn-group">
                                                           
                                                                <div class="about-btn" >
                                                                    <button type="submit" name="submit_final_order"  class="about-view packages-btn" id="OrdSubbtn">
                                                                        book my tour now
                                                                    </button>
                                                                </div><!--/.about-btn-->
                                                            </div><!--/.offer-btn-group-->

                                                            </form>
                                                     
                                                            
                                                        </div><!--/.blog-txt-->
                                                    </div><!--/.caption-->
                                                </div><!--/.thumbnail-->

                                            </div><!--/.col-->

                                           
                                        </div><!--/.row-->
                                    </div><!--/.blog-content-->
 
                                </div><!--/.single-special-offer-txt-->
                            </div><!--/.single-special-offer-->
                        </div><!--/.col-->
                    
                    </div><!--/.row-->
                </div><!--/.special-offer-content-->
            </div><!--/.container-->

        </section><!--/.special-offer end-->
        <!--special-offer end-->
 
 


 

<?php include("footer.php");?>
 


 


