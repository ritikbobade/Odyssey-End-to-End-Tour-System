
<?php
    
   include("includes/connect.php");
    // session_start();

    // $entryid=$_SESSION['entryid']; 

// if(trim($_POST['optdestinationtype']) == "" || trim($_POST['optcompany']) == "" || trim($_POST['opttime']) == "" || trim($_POST['optagegroup']) == "" || trim($_POST['optbudget']) == "" || trim($_POST['opttransportationmode']) == "" || trim($_POST['optstay']) == "" || trim($_POST['optrelax']) == "" || trim($_POST['optpreparing']) == "" || trim($_POST['optessential']) == "")
//     { 
//        echo "<div class='alert alert-danger' style='font-size:17px;' id='alerterror'><b> You Have Not Answered All Questions Given....<b> <br> <a href='quiz-panel.php' class='book-btn' style='height: auto; padding: 10px; margin-top: 20px;'>Retry Again </a></div> "; 
//     } else { 

      $optdestinationtype = mysqli_real_escape_string($conn,$_POST['optdestinationtype']); 
      $optcompany = mysqli_real_escape_string($conn,$_POST['optcompany']); 
      $opttime = mysqli_real_escape_string($conn,$_POST['opttime']); 
      $optagegroup = mysqli_real_escape_string($conn,$_POST['optagegroup']); 
      $optbudget = mysqli_real_escape_string($conn,$_POST['optbudget']); 
      $opttransportationmode = mysqli_real_escape_string($conn,$_POST['opttransportationmode']); 
      $optstay = mysqli_real_escape_string($conn,$_POST['optstay']); 
      $optrelax = mysqli_real_escape_string($conn,$_POST['optrelax']); 
      $optpreparing = mysqli_real_escape_string($conn,$_POST['optpreparing']); 
      $optessential = mysqli_real_escape_string($conn,$_POST['optessential']); 

   
        $sqlinsertorder = "INSERT INTO customer_answers (userid, destinationtype, company, favtime, agegroup, budget, transportationmode, stay, relax, preparing, essential, created)
        VALUES ('1', '$optdestinationtype', '$optcompany', '$opttime', '$optagegroup', '$optbudget', '$opttransportationmode', '$optstay', '$optrelax' , '$optpreparing', '$optessential', now())";

        if (mysqli_query($conn, $sqlinsertorder)) { 
            // $last_orderid = mysqli_insert_id($conn);
            // $last_orderid=trim($last_orderid);  
            // echo "".$last_orderid."-Notification To ".$deliveryname." Sent Successfully.... Ask them to accept it...."; 

           

          $sqlgetpack = "SELECT * FROM destination WHERE type LIKE '%$optdestinationtype%'";
          $resultgetpack = mysqli_query($conn, $sqlgetpack);

          if (mysqli_num_rows($resultgetpack) > 0) {
        ?>
        <div class="row">
        <?php  
            while($row = mysqli_fetch_assoc($resultgetpack)) {
        ?>
              
                  <div class="col-md-4">
                      <div style="padding: 25px; margin: 10px; background: #fff; font-size: 17px; text-transform: capitalize; font-weight: 600; text-align: center;">
                        <h4><?php echo $row["place"]; ?> </h4>
                        
                        <h5 style="margin-top: 10px;"><?php echo $row["state"]; ?> </h5>

                        <div class="about-btn" style="margin-top: 15px;">
                        <a href="explore-destination.php?destid=<?php echo $row["id"]; ?>" >
                          <button class="book-btn" > Explore Now </button>
                        </a>
                      </div>
                      </div>

                      
                   
                  </div>
              

        <?php              
            }
        ?>
        </div>
        <?php
          } else {
            echo "<div class='alert alert-danger'  id='alerterror'> No Destination Found </div> ";
          }

        } else {  
              echo "<div class='alert alert-danger'  id='alerterror'> Something went wrong, try again later </div> "; 
        } 


       // }  


         
   
?>
