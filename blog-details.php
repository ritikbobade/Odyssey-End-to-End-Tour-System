<?php include("header.php");?> 

<?php  

 
 
$blogid = $_GET["blogid"];
$blogid=trim($blogid);

$sqlblgdet = "SELECT * FROM blogs WHERE id=$blogid";
$resultblgdet = mysqli_query($conn, $sqlblgdet);
$rowblgdet = mysqli_fetch_assoc($resultblgdet);
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
                        <div class="col-sm-12">
                            <div class="single-special-offer">
                                <div class="single-special-offer-txt">
                                     
                                     <div class="blog-content">
                                        <div class="row">

                                            <div class="col-sm-12 col-md-12">
                                                <div class="thumbnail">     
                                                  
                                                    <div class="caption" style="padding: 40px 30px 60px 30px;">
                                                        <div class="blog-txt">
                                                            <h3 style="margin-bottom:15px;"> <b><?php echo $rowblgdet["title"]; ?>   </b> </h3>
                                                          
                                                            

                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-body">
                                                                   
                                                              <br>
                                                              <p>  <?php echo nl2br($rowblgdet["description"]);   ?> :  </p>
                                                            </div>   
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="thumbnail-img">
                                                                    <img src="upload/blog-images/<?php echo  $rowblgdet["image"]; ?>" alt="blog-img" >
                                                                    <div class="thumbnail-img-overlay"></div>  
                                                                </div>  
                                                                </div>
                                                            </div>

                                                                
 
                                                            
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
 


 


