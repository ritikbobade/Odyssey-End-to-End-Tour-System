<?php include("header.php");?> 

<?php  

// $userid=$_SESSION['userid'];
// $userid=trim($userid);

$destid = $_GET["destid"];
$destid=trim($destid);

$sqldst = "SELECT * FROM  destination  WHERE id=$destid";
$resultdst = mysqli_query($conn, $sqldst);
$rowdst = mysqli_fetch_assoc($resultdst);
$placex=$rowdst["place"]; 
$statex=$rowdst["state"]; 



if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['ord_submit'])){
        extract($_POST);

        $fdate=date_create($fdate);
        $fdate= date_format($fdate,"Y-m-d");

        $tdate=date_create($tdate);
        $tdate= date_format($tdate,"Y-m-d");

        $sqlinsertorder = "INSERT INTO temp_orders (departure, destination, hotel, transport_type, days, members, fdate, tdate, userid, created)
        VALUES ('$departure', '$destination', '$hotel', '$transport_type', '$days', '$members', '$fdate', '$tdate', '2', now())";

        if (mysqli_query($conn, $sqlinsertorder)) {
            $neworderid = mysqli_insert_id($conn);
           echo "<script>  location.href = 'order-summery.php?orderid=$neworderid'; </script>";
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
</style>

<!--about-us start -->
<section id="home" class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-travel-boxes">
                    <div   class="desc-tabs">

                         <div class="question-box"  style="padding: 50px 40px 40px;">   

                            <h3 style="margin-bottom: 40px; color: #00768b;">Fill Below Form And Calculate Estimate Cost For <b><?php echo $placex; ?>, <?php echo $statex; ?></b></h3>

                            <form action="" method="post"> 

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Departure City</label> 
                                    <div class="travel-select-icon">
                                        <select class="form-control " name="departure" required> 
                                            <option value="">Select Your Departure City</option><!-- /.option--> 
                                            <option value="Nagpur">Nagpur</option><!-- /.option--> 
                                            <option value="Mumbai">Mumbai</option><!-- /.option-->
                                            <option value="Nashik">Nashik</option><!-- /.option-->  
                                        </select><!-- /.select-->
                                    </div><!-- /.travel-select-icon -->
                                </div>

                                <div class="col-md-3">
                                    <label>Your Destination</label> 
                                    <div class="travel-select-icon">
                                        <select class="form-control " name="destination" required> 
                                            <option value="">Select Your Destination </option><!-- /.option--> 
                                            <?php 
                                                $sqldestlist = "SELECT id, place, state FROM  destination Order By place";
                                                $resultdestlist = mysqli_query($conn, $sqldestlist);
                                                while($rowdestlist = mysqli_fetch_assoc($resultdestlist)) {
                                            ?>
 
                                                <option value="<?php echo $rowdestlist["id"]; ?>" <?php if($destid==$rowdestlist["id"]){ echo 'selected="selected"'; } ?>><?php echo $rowdestlist["place"]; ?></option> 
                                            <?php 
                                                }
                                            ?>
                                        </select><!-- /.select-->
                                    </div><!-- /.travel-select-icon -->
                                </div>

                                <div class="col-md-3">
                                    <label>Select Hotel</label> 
                                    <div class="travel-select-icon">
                                        <select class="form-control " name="hotel" required> 
                                            <option value="">Select Hotel </option><!-- /.option--> 
                                            <?php 
                                                $sqlhotellist = "SELECT id, hotel_name, amount FROM  hotels Order By id";
                                                $resulthotellist = mysqli_query($conn, $sqlhotellist);
                                                while($rowhotellist = mysqli_fetch_assoc($resulthotellist)) {
                                            ?>
                                                <option value="<?php echo $rowhotellist["id"]; ?>"><?php echo $rowhotellist["hotel_name"]; ?> - <?php echo $rowhotellist["amount"]; ?> per day</option><!-- /.option-->  
                                            <?php 
                                                }
                                            ?>
                                        </select><!-- /.select-->
                                    </div><!-- /.travel-select-icon -->
                                </div>

                                <div class="col-md-3">
                                    <label>Select Favourable Transport</label> 
                                    <div class="travel-select-icon">
                                        <select class="form-control " name="transport_type" required> 
                                            <option value="">Select Transport Type </option><!-- /.option--> 
                                            <option value="flight">Flight</option><!-- /.option--> 
                                            <option value="train">Train</option><!-- /.option-->
                                            <option value="bus">Bus</option><!-- /.option-->
                                        </select><!-- /.select-->
                                    </div><!-- /.travel-select-icon -->
                                </div>

                                <div class="col-md-3">
                                    <label>Select Package Duration</label> 
                                    <div class="travel-select-icon">
                                        <select class="form-control "  name="days" required> 
                                            <option value="">Select Package Duration </option> 
                                            <option value="2">2 Days 1 Night </option> 
                                            <option value="3">3 Days 2 Night </option> 
                                            <option value="4">4 Days 3 Night </option> 
                                            <option value="5">5 Days 4 Night </option> 
                                            <option value="6">6 Days 5 Night </option> 
                                            <option value="7">7 Days 6 Night </option> 
                                            <option value="8">8 Days 7 Night </option> 
                                            <option value="9">9 Days 8 Night </option> 
                                            <option value="10">10 Days 9 Night </option> 
                                        </select> 
                                    </div> 
                                </div>

                                <div class="col-md-3">
                                    <label>Members</label> 
                                    <div class="travel-select-icon">
                                        <select class="form-control "  name="members" required> 
                                            <option value="">Select No. of Members </option> 
                                            <option value="1">1 </option>  
                                            <option value="2">2 </option>  
                                            <option value="3">3 </option>  
                                            <option value="4">4 </option>  
                                            <option value="5">5 </option>  
                                            <option value="6">6 </option>  
                                            <option value="7">7 </option>  
                                            <option value="8">8 </option>  
                                            <option value="9">9 </option>  
                                            <option value="10">10 </option>  
                                        </select> 
                                    </div> 
                                </div>

                                <div class="col-md-3">
                                    <label>Expected From Date</label> 
                                    <div class="travel-select-icon">
                                        <input type="text" name="fdate" class="form-control" id="datepicker1" placeholder="02 -02 - 2022 "  style="height: 48px;">
                                    </div> 
                                </div>

                                <div class="col-md-3">
                                    <label>Expected To Date</label> 
                                    <div class="travel-select-icon">
                                        <input type="text" name="tdate" class="form-control"  id="datepicker2" placeholder="10 -02 - 2022 "  style="height: 48px;">
                                    </div> 
                                </div>
 
                                <div class="about-btn travel-mrt-0 pull-right" style="margin-top: 20px;">
                                    <button class="about-view travel-btn" type="submit" name="ord_submit">
                                        Submit  
                                    </button><!--/.travel-btn-->
                                </div>
                               
                            </div>

                        </form>
 
                        </div><!--/.single-tab-select-box-->
                    </div><!--/.desc-tabs-->
                </div><!--/.single-travel-box-->
            </div><!--/.col-->
        </div><!--/.row-->
    </div><!--/.container-->

</section><!--/.about-us-->
<!--about-us end -->

  
 
 


 

<?php include("footer.php");?>

<script src="main.js"></script>


 


