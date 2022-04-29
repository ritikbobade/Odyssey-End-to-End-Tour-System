<?php include("header.php");?> 

<!--about-us start -->
<section id="home" class="about-us">
    <div class="container">
        <div class="about-us-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="single-about-us">
                        <div class="about-us-txt">
                            <h2>
                                Explore the Beauty of the Beautiful World 

                            </h2>
                            <div class="about-btn">
                                <button  class="about-view">
                                    explore now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.about-us-txt-->
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
                <div class="col-sm-0">
                    <div class="single-about-us">
                        
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.about-us-content-->
    </div><!--/.container-->

</section><!--/.about-us-->
<!--about-us end -->

<!--travel-box start-->
<section  class="travel-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-travel-boxes">
                    <div id="desc-tabs" class="desc-tabs">

                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
                                    <i class="fa fa-tree"></i>
                                    tours
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
                                    <i class="fa fa-building"></i>
                                    hotels
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">
                                    <i class="fa fa-plane"></i>
                                    flights
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active fade in" id="tours">
                                <div class="tab-para">

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="single-tab-select-box">

                                                <h2>destination</h2>

                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter your destination country</option><!-- /.option-->

                                                        <option value="turkey">turkey</option><!-- /.option-->

                                                        <option value="russia">russia</option><!-- /.option-->
                                                        <option value="egept">egypt</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->

                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter your destination location</option><!-- /.option-->

                                                        <option value="istambul">istambul</option><!-- /.option-->

                                                        <option value="mosko">mosko</option><!-- /.option-->
                                                        <option value="cairo">cairo</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->

                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>check in</h2>
                                                <div class="travel-check-icon">
                                                    <form action="#">
                                                        <input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
                                                    </form>
                                                </div><!-- /.travel-check-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>check out</h2>
                                                <div class="travel-check-icon">
                                                    <form action="#">
                                                        <input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                                                    </form>
                                                </div><!-- /.travel-check-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-1 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>duration</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">5</option><!-- /.option-->

                                                        <option value="10">10</option><!-- /.option-->

                                                        <option value="15">15</option><!-- /.option-->
                                                        <option value="20">20</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-1 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>members</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">1</option><!-- /.option-->

                                                        <option value="2">2</option><!-- /.option-->

                                                        <option value="4">4</option><!-- /.option-->
                                                        <option value="8">8</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                    </div><!--/.row-->

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="travel-budget">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-4">
                                                        <h3>budget : </h3>
                                                    </div><!--/.col-->
                                                    <div class="co-md-9 col-sm-8">
                                                        <div class="travel-filter">
                                                            <div class="info_widget">
                                                                <div class="price_filter">
                                                                    
                                                                    <div id="slider-range"></div><!--/.slider-range-->

                                                                    <div class="price_slider_amount">
                                                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                                                    </div><!--/.price_slider_amount-->
                                                                </div><!--/.price-filter-->
                                                            </div><!--/.info_widget-->
                                                        </div><!--/.travel-filter-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->
                                            </div><!--/.travel-budget-->
                                        </div><!--/.col-->
                                        <div class="clo-sm-7">
                                            <div class="about-btn travel-mrt-0 pull-right">
                                                <button  class="about-view travel-btn">
                                                    search  
                                                </button><!--/.travel-btn-->
                                            </div><!--/.about-btn-->
                                        </div><!--/.col-->

                                    </div><!--/.row-->

                                </div><!--/.tab-para-->

                            </div><!--/.tabpannel-->

                            <div role="tabpanel" class="tab-pane fade in" id="hotels">
                                <div class="tab-para">

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="single-tab-select-box">

                                                <h2>destination</h2>

                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter your destination country</option><!-- /.option-->

                                                        <option value="turkey">turkey</option><!-- /.option-->

                                                        <option value="russia">russia</option><!-- /.option-->
                                                        <option value="egept">egypt</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->

                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter your destination location</option><!-- /.option-->

                                                        <option value="istambul">istambul</option><!-- /.option-->

                                                        <option value="mosko">mosko</option><!-- /.option-->
                                                        <option value="cairo">cairo</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->

                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>check in</h2>
                                                <div class="travel-check-icon">
                                                    <form action="#">
                                                        <input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
                                                    </form>
                                                </div><!-- /.travel-check-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>check out</h2>
                                                <div class="travel-check-icon">
                                                    <form action="#">
                                                        <input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                                                    </form>
                                                </div><!-- /.travel-check-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-1 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>duration</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">5</option><!-- /.option-->

                                                        <option value="10">10</option><!-- /.option-->

                                                        <option value="15">15</option><!-- /.option-->
                                                        <option value="20">20</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-1 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>members</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">1</option><!-- /.option-->

                                                        <option value="2">2</option><!-- /.option-->

                                                        <option value="4">4</option><!-- /.option-->
                                                        <option value="8">8</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                    </div><!--/.row-->

                                    <div class="row">
                                        <div class="col-sm-5"></div><!--/.col-->
                                        <div class="clo-sm-7">
                                            <div class="about-btn travel-mrt-0 pull-right">
                                                <button  class="about-view travel-btn">
                                                    search  
                                                </button><!--/.travel-btn-->
                                            </div><!--/.about-btn-->
                                        </div><!--/.col-->

                                    </div><!--/.row-->

                                </div><!--/.tab-para-->

                            </div><!--/.tabpannel-->

                            <div role="tabpanel" class="tab-pane fade in" id="flights">
                                <div class="tab-para">
                                    <div class="trip-circle">
                                        <div class="single-trip-circle">
                                            <input type="radio" id="radio01" name="radio" />
                                            <label for="radio01">
                                                <span class="round-boarder">
                                                    <span class="round-boarder1"></span>
                                                </span>round trip
                                            </label>
                                        </div><!--/.single-trip-circle-->
                                        <div class="single-trip-circle">
                                            <input type="radio" id="radio02" name="radio" />
                                            <label for="radio02">
                                                <span class="round-boarder">
                                                    <span class="round-boarder1"></span>
                                                </span>on way
                                            </label>
                                        </div><!--/.single-trip-circle-->
                                    </div><!--/.trip-circle-->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="single-tab-select-box">

                                                <h2>from</h2>

                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter your location</option><!-- /.option-->

                                                        <option value="turkey">turkey</option><!-- /.option-->

                                                        <option value="russia">russia</option><!-- /.option-->
                                                        <option value="egept">egypt</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>departure</h2>
                                                <div class="travel-check-icon">
                                                    <form action="#">
                                                        <input type="text" name="departure" class="form-control" data-toggle="datepicker"
                                                        placeholder="12 -01 - 2017 ">
                                                    </form>
                                                </div><!-- /.travel-check-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>return</h2>
                                                <div class="travel-check-icon">
                                                    <form action="#">
                                                        <input type="text" name="return" class="form-control" data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                                                    </form>
                                                </div><!-- /.travel-check-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-1 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>adults</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">5</option><!-- /.option-->

                                                        <option value="10">10</option><!-- /.option-->

                                                        <option value="15">15</option><!-- /.option-->
                                                        <option value="20">20</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                        <div class="col-lg-2 col-md-1 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>childs</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">1</option><!-- /.option-->

                                                        <option value="2">2</option><!-- /.option-->

                                                        <option value="4">4</option><!-- /.option-->
                                                        <option value="8">8</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->

                                    </div><!--/.row-->

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="single-tab-select-box">

                                                <h2>to</h2>

                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter your destination location</option><!-- /.option-->

                                                        <option value="istambul">istambul</option><!-- /.option-->

                                                        <option value="mosko">mosko</option><!-- /.option-->
                                                        <option value="cairo">cairo</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->

                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">

                                                <h2>class</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter class</option><!-- /.option-->

                                                        <option value="A">A</option><!-- /.option-->

                                                        <option value="B">B</option><!-- /.option-->
                                                        <option value="C">C</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div><!--/.single-tab-select-box-->
                                        </div><!--/.col-->
                                        <div class="clo-sm-5">
                                            <div class="about-btn pull-right">
                                                <button  class="about-view travel-btn">
                                                    search  
                                                </button><!--/.travel-btn-->
                                            </div><!--/.about-btn-->
                                        </div><!--/.col-->
                                        
                                    </div><!--/.row-->

                                </div>

                            </div><!--/.tabpannel-->

                        </div><!--/.tab content-->
                    </div><!--/.desc-tabs-->
                </div><!--/.single-travel-box-->
            </div><!--/.col-->
        </div><!--/.row-->
    </div><!--/.container-->

</section><!--/.travel-box-->
<!--travel-box end-->

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
<section  class="travel-box" style="background: #0088ff;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="q-a-box">
                     <h2 class="qa-title">
                        Question & Answers
                    </h2>
                    <p> 
                    </p>

                    <form action="" method="post">

                        <div class="row">


                            <?php   
                                $sqlgetquedata = "SELECT * FROM questions";
                                $resultgetquedata = mysqli_query($conn, $sqlgetquedata);

                                if (mysqli_num_rows($resultgetquedata) > 0) { 
                                  while($rowresultgetquedata = mysqli_fetch_assoc($resultgetquedata)) {
                            ?>


                            <div class="col-md-<?php echo $rowresultgetquedata["grid"]; ?>"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question"> <?php echo $rowresultgetquedata["question"]; ?></h4>
 
                                        <?php   
                                            $question_id=$rowresultgetquedata["id"];
                                            $sqlgetqueopt = "SELECT * FROM que_options WHERE question_id='$question_id'";
                                            $resultgetqueopt = mysqli_query($conn, $sqlgetqueopt);

                                            if (mysqli_num_rows($resultgetqueopt) > 0) { 
                                              while($rowrgetqueopt = mysqli_fetch_assoc($resultgetqueopt)) {
                                        ?>
 
                                        <label class="radio-inline">
                                          <input type="radio" name="optdestinationtype" value="<?php echo $rowrgetqueopt["question_option"]; ?>" required ><?php echo $rowrgetqueopt["question_option"]; ?>
                                        </label> 

                                        <?php
                                              }
                                            } else { 
                                            }
                                        ?>
                                
                                    </div>
                                </div>
                            </div>

                            <?php
                                  }
                                } else { 
                                }
                            ?>

                            









                            <div class="col-md-12"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question"> What's your favourite type of destination?</h4>
                                        <label class="radio-inline">
                                          <input type="radio" name="optdestinationtype" required >Cities filled with history and culture
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optdestinationtype" >Spotting wildlife
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optdestinationtype" >Anywhere with outdoor adventures
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="optdestinationtype" >Mesmerizing views
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="optdestinationtype" >Pilgrimage sites
                                        </label> 
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question">Who's your company?</h4>
                                        <label class="radio-inline">
                                          <input type="radio" name="optcompany" required>Family
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optcompany" >Friends
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optcompany">Partner
                                        </label>  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question">What's your favourite time to travel?</h4>
                                        <label class="radio-inline">
                                          <input type="radio" name="opttime" required>Summer
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="opttime">Winter
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="opttime">Monsoon
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="opttime">Spring
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="opttime">Autumn
                                        </label> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question">What's your age group?</h4>
                                        <label class="radio-inline">
                                          <input type="radio" name="optagegroup" required>Young
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optagegroup">Mid-aged
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optagegroup">Old
                                        </label>  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question">What's your budget?</h4>
                                        <label class="radio-inline">
                                          <input type="radio" name="optbudget" required >10,000
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optbudget">25,000
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optbudget">50,000
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="optbudget">75,000
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="optbudget">1,00,000 +
                                        </label>  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question">Which mode of transportation do you prefer?</h4>
                                        <label class="radio-inline">
                                          <input type="radio" name="opttransportationmode" required >Train
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="opttransportationmode">Car
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="opttransportationmode">Public transit
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="opttransportationmode">Airplane
                                        </label>  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question">Where would you rather stay?</h4>
                                        <label class="radio-inline">
                                          <input type="radio" name="optstay" required >Hotel
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optstay">Luxury Resort
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optstay">In a tent under the stars
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="optstay">Wilderness lodge
                                        </label>  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question">What do you like to do to relax?</h4>
                                        <label class="radio-inline">
                                          <input type="radio" name="optrelax" required >Take a bath and read a good book
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optrelax">Watch a new documentary on Netflix
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optrelax">Get back to nature
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="optrelax">Go for a sunrise hike
                                        </label>  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question">What do you like the most about preparing for a trip?</h4>
                                        <label class="radio-inline">
                                          <input type="radio" name="optpreparing" required >Reading about the history and culture of your destination
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optpreparing">Planning out all the adventurous activities you'll do
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optpreparing">Mapping out the route you want to follow and the stops you want to make
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="optpreparing">Dreaming about getting slow down and relax
                                        </label>  
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question">Which travel essential can't you travel without?</h4>
                                        <label class="radio-inline">
                                          <input type="radio" name="optessential" required >Hiking boots
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optessential">A good book
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="optessential">Your favourite playlist
                                        </label> 
                                        <label class="radio-inline">
                                          <input type="radio" name="optessential">Travel journal
                                        </label>  
                                        <label class="radio-inline">
                                          <input type="radio" name="optessential">Camera
                                        </label>  
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">  
                                <div class="question-box"> 
                                    <div class="text-center"> 
                                        <button type="submit" class="appsLand-btn subscribe-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                            




                        </div>

                        


                    </form>



                </div>

               


             </div><!--/.row-->
        </div><!--/.packages-content-->
    </div><!--/.container-->

</section><!--/.packages-->
<!--packages end-->
 
 

<!--packages start-->
<section id="pack" class="packages">
    <div class="container">
        <div class="gallary-header text-center">
            <h2>
                special packages
            </h2>
            <p>
                Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  
            </p>
        </div><!--/.gallery-header-->
        <div class="packages-content">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p1.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>italy <span class="pull-right">$499</span></h3>
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
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>2544 review</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->

                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p2.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>england <span class="pull-right">$1499</span></h3>
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
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>2544 review</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->
                
                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p3.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>france <span class="pull-right">$1199</span></h3>
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
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>2544 review</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->
                
                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p4.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>india <span class="pull-right">$799</span></h3>
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
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>2544 review</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->
                
                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p5.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>spain <span class="pull-right">$999</span></h3>
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
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>2544 review</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->
                
                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="assets/images/packages/p6.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>thailand <span class="pull-right">$799</span></h3>
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
                            <div class="packages-review">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>2544 review</span>
                                </p>
                            </div><!--/.packages-review-->
                            <div class="about-btn">
                                <button  class="about-view packages-btn">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->

            </div><!--/.row-->
        </div><!--/.packages-content-->
    </div><!--/.container-->

</section><!--/.packages-->
<!--packages end-->




<!-- testemonial Start -->
<section   class="testemonial">
    <div class="container">

        <div class="gallary-header text-center">
            <h2>
                clients reviews
            </h2>
            <p>
                Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla. 
            </p>

        </div><!--/.gallery-header-->

        <div class="owl-carousel owl-theme" id="testemonial-carousel">

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->  
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial2.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->  
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->  
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->  
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial2.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->  
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->  
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->  
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial2.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->  
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

            <div class="home1-testm item">
                <div class="home1-testm-single text-center">
                    <div class="home1-testm-img">
                        <img src="assets/images/client/testimonial1.jpg" alt="img"/>
                    </div><!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
                        </p>
                        <h3>
                            <a href="#">
                                kevin watson
                            </a>
                        </h3>
                        <h4>london, england</h4>
                    </div><!--/.home1-testm-txt-->  
                </div><!--/.home1-testm-single-->

            </div><!--/.item-->

        </div><!--/.testemonial-carousel-->
    </div><!--/.container-->

</section><!--/.testimonial-->  
<!-- testemonial End -->
 

<!--blog start-->
<section id="blog" class="blog">
    <div class="container">
        <div class="blog-details">
                <div class="gallary-header text-center">
                    <h2>
                        latest news
                    </h2>
                    <p>
                        Travel News from all over the world 
                    </p>
                </div><!--/.gallery-header-->
                <div class="blog-content">
                    <div class="row">

                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                                <h2>trending news <span>15 november 2017</span></h2>
                                <div class="thumbnail-img">
                                    <img src="assets/images/blog/b1.jpg" alt="blog-img">
                                    <div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
                                
                                </div><!--/.thumbnail-img-->
                              
                                <div class="caption">
                                    <div class="blog-txt">
                                        <h3>
                                            <a href="#">
                                                Discover on beautiful weather, Fantastic foods and historical place in Prag
                                            </a>
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
                                        </p>
                                        <a href="#">Read More</a>
                                    </div><!--/.blog-txt-->
                                </div><!--/.caption-->
                            </div><!--/.thumbnail-->

                        </div><!--/.col-->

                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                                <h2>trending news <span>15 november 2017</span></h2>
                                <div class="thumbnail-img">
                                    <img src="assets/images/blog/b2.jpg" alt="blog-img">
                                    <div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
                                
                                </div><!--/.thumbnail-img-->
                                <div class="caption">
                                    <div class="blog-txt">
                                        <h3>
                                            <a href="#">
                                                Discover on beautiful weather, Fantastic foods and historical place in india
                                            </a>
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
                                        </p>
                                        <a href="#">Read More</a>
                                    </div><!--/.blog-txt-->
                                </div><!--/.caption-->
                            </div><!--/.thumbnail-->

                        </div><!--/.col-->

                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                                <h2>trending news <span>15 november 2017</span></h2>
                                <div class="thumbnail-img">
                                    <img src="assets/images/blog/b3.jpg" alt="blog-img">
                                    <div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
                                
                                </div><!--/.thumbnail-img-->
                                <div class="caption">
                                    <div class="blog-txt">
                                        <h3><a href="#">10 Most Natural place to Discover</a></h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
                                        </p>
                                        <a href="#">Read More</a>
                                    </div><!--/.blog-txt-->
                                </div><!--/.caption-->
                            </div><!--/.thumbnail-->

                        </div><!--/.col-->

                    </div><!--/.row-->
                </div><!--/.blog-content-->
            </div><!--/.blog-details-->
        </div><!--/.container-->

</section><!--/.blog-->
<!--blog end-->

 


 

<?php include("footer.php");?>


