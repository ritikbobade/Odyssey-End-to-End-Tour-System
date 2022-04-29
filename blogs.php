
<style type="text/css">
    .sticky-wrapper {
        background: #4d4e54;
    }
    
</style>


<?php include("header.php");?> 


 
 <!--blog start-->
        <section id="blog" class="blog" >
            <div class="container">
                <div class="blog-details" style="margin-top:60px">
                        <div class="galla ry-header text-center">
                            <h2>
                               Travel Blogs
                            </h2> 
                            <p style="position: relative; color: #656565; font-size: 16px; font-family: 'Poppins', sans-serif; margin-top: 17px;">Travel News from all over the world from our users</p>


                            <div class="about-btn travel-mrt-0 " style="margin-top: 20px;">
                               <a href="add-blog.php" style="display: block; margin: auto;"> <button class="about-view travel-btn" type="button" style="display: block; margin: auto;"> Add Your Blog </button> </a>
                            </div>


                        </div><!--/.gallery-header-->
                        <div class="blog-content">
                            <div class="row">

                                <?php

                                $sql = "SELECT * FROM blogs ORDER BY id DESC ";
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
                    </div><!--/.blog-details-->
                </div><!--/.container-->

        </section><!--/.blog-->
        <!--blog end-->



 

<?php include("footer.php");?>
 


 


