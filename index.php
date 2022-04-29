<?php include("header.php");?> 


<?php  

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

                         <div class="question-box" style="padding: 50px 40px 40px;">  

                            <h3 style="margin-bottom: 40px; color: #00768b;">Fill Below Form And Calculate Estimate Cost For Your Favourite Destination</h3>


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
                                                <option value="<?php echo $rowdestlist["id"]; ?>"><?php echo $rowdestlist["place"]; ?></option><!-- /.option-->  
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
 

<!--service start-->
<section id="service" class="service">
    <div class="container">

        <div class="service-counter text-center">

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="service-img">
                        <img src="assets/images/service/s1.png" alt="service-icon" />
                    </div><!--/.service-img-->
                    <div class="service-content">
                        <h2>
                            <a href="#">
                            amazing tour packages
                            </a>
                        </h2>
                        <p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
                    </div><!--/.service-content-->
                </div><!--/.single-service-box-->
            </div><!--/.col-->

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="service-img">
                        <img src="assets/images/service/s2.png" alt="service-icon" />
                    </div><!--/.service-img-->
                    <div class="service-content">
                        <h2>
                            <a href="#">
                                book top class hotel
                            </a>
                        </h2>
                        <p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
                    </div><!--/.service-content-->
                </div><!--/.single-service-box-->
            </div><!--/.col-->

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="statistics-img">
                        <img src="assets/images/service/s3.png" alt="service-icon" />
                    </div><!--/.service-img-->
                    <div class="service-content">

                        <h2>
                            <a href="#">
                                online flight booking
                            </a>
                        </h2>
                        <p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
                    </div><!--/.service-content-->
                </div><!--/.single-service-box-->
            </div><!--/.col-->

        </div><!--/.statistics-counter-->   
    </div><!--/.container-->

</section><!--/.service-->
<!--service end-->




<!--travel-box start-->
<section id="que" class="travel-box" style="background: #0088ff; padding: 80px 0 50px;">
     <?php include_once("quiz.php");?> 

</section><!--/.packages-->
<!--packages end-->
 
  
<!--packages start-->
        <section id="pack" class="packages">
            <div class="container">
                <div class="gallary-header text-center">
                    <h2>
                        special packages
                    </h2> 
                </div><!--/.gallery-header-->
                <div class="packages-content">
                    <div class="row">


                        <?php

                        $sqldestination = "SELECT * from destination WHERE place='ooty' OR place='taj mahal' OR place='goa' OR place='pachmari' OR place='kedarnath' OR place='amarnath' LIMIT 6";
                        $resultdestination = mysqli_query($conn, $sqldestination);

                        if (mysqli_num_rows($resultdestination) > 0) {
                          // output data of each row
                          while($rowdestination = mysqli_fetch_assoc($resultdestination)) { 
                       
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="upload/destination-images/<?php echo  $rowdestination["image"]; ?>" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3><?php echo  $rowdestination["place"]; ?>   </h3>
                                    <h5><?php echo  $rowdestination["state"]; ?></h5>
                                    <div class="packages-para">
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i> 5 daays 6 nights
                                            </span>
                                            <i class="fa fa-angle-right"></i>  5 star accomodation
                                        </p>
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i>  transportation
                                            </span>
                                            <i class="fa fa-angle-right"></i>  food facilities
                                         </p>
                                    </div><!--/.packages-para-->
                            
                                    <div class="about-btn">
                                        <a href="explore-destination.php?destid=<?php echo $rowdestination["id"]; ?>" >
                                            <button  class="book-btn">
                                            book now
                                            </button>
                                        </a>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->

                        </div><!--/.col-->

                        <?php  
                       
                          }
                        } else {
                          echo "No Blogs Found";
                        }

                        ?>

                      
                    </div><!--/.row-->
                </div><!--/.packages-content-->
            </div><!--/.container-->

        </section><!--/.packages-->
        <!--packages end-->





        <!--subscribe start-->
        <section id="subs" class="subscribe">
            <div class="container">
                <div class="subscribe-title text-center">
                    <h2>
                        Join our Subscribers List to Get Regular Update
                    </h2> 
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <div class="custom-input-group">
                                <input type="email" class="form-control" placeholder="Enter your Email Here">
                                <button class="appsLand-btn subscribe-btn">Subscribe</button>
                                <div class="clearfix"></div>
                                <i class="fa fa-envelope"></i>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </section>
        <!--subscribe end-->


 
<!--blog start-->
<section id="blog" class="blog">
    <div class="container">
        <div class="blog-details">
                <div class="gallary-header text-center">
                    <h2>
                        Travel Blogs
                    </h2> 
                    <p>Travel News from all over the world from our users</p>
                </div><!--/.gallery-header-->
                <div class="blog-content">
                    <div class="row">

                        <?php

                        $sql = "SELECT * FROM blogs ORDER BY ID DESC LIMIT 3";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {

                            $created=date_create($row["created"]);
                            $created= date_format($created,"d-m-Y");
                       
                        ?>

                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                               
                                <div class="thumbnail-img">
                                    <img src="upload/blog-images/<?php echo  $row["image"]; ?>" alt="blog-img" >
                                    <div class="thumbnail-img-overlay"></div>  
                                </div>   

                                 <h2 style="padding-left: 0;"> <span><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; <?php echo $created; ?></span> 
                                    <span><i class="fa fa-user" aria-hidden="true"></i>  &nbsp;<?php echo  $row["name"]; ?> </span> 
                                 </h2>
                      
                                <div class="caption">
                                    <div class="blog-txt">
                                        <h3>
                                            <a href="blog-details.php?blogid=<?php echo $row["id"]; ?>">
                                             <?php echo  $row["title"]; ?>  
                                            </a>
                                        </h3>
                                        <p>
                                            <?php echo   substr($row["description"], 0, 100);  ?>  
                                        </p>
                                        <a href="blog-details.php?blogid=<?php echo $row["id"]; ?>">Read More</a>
                                    </div><!--/.blog-txt-->
                                </div><!--/.caption-->
                            </div><!--/.thumbnail-->

                        </div><!--/.col-->

                        <?php  
                       
                          }
                        } else {
                          echo "No Blogs Found";
                        }

                        ?>


                    </div><!--/.row-->
                </div><!--/.blog-content-->

                <div class="about-btn travel-mrt-0 " style="margin-top: 20px;">
                   <a href="blogs.php" style="display: block; margin: auto;"> <button class="about-view travel-btn" type="button"  style="display: block; margin: auto;"> See More </button> </a>
                </div>


            </div><!--/.blog-details-->
        </div><!--/.container-->

</section><!--/.blog-->
<!--blog end-->


 

<?php include("footer.php");?>

<script src="main.js"></script>



<script type="text/javascript"> 

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-success').addClass('btn-default');
                $item.addClass('btn-success');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)');//.focus();
            }
        });

        allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-success').trigger('click'); 

 
</script>


