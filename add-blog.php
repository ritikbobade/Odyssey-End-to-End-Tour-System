<?php include("header.php");?> 

<?php  

 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['blog_submit'])){
        extract($_POST);

        $uploadDir = 'upload/blog-images/';
        $uploadStatus = 1; 
             
        // Upload file 
        $uploadedFile = ''; 
        if(!empty($_FILES["imgfile"]["name"])){ 
             
            // File path config 
            $fileName = basename($_FILES["imgfile"]["name"]); 
            $targetFilePath = $uploadDir . $fileName; 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to the server 
                if(move_uploaded_file($_FILES["imgfile"]["tmp_name"], $targetFilePath)){ 
                    $uploadedFile = $fileName; 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, there was an error uploading your file.'; 
                } 
            }else{ 
                $uploadStatus = 0; 
                $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
            } 
        } 


        $sqlinsertorder = "INSERT INTO blogs (name, email, title, image, description, userid, created)
        VALUES ('$name', '$email', '$title', '$uploadedFile', '$description', '2', now())";

        if (mysqli_query($conn, $sqlinsertorder)) {
            $neworderid = mysqli_insert_id($conn);
           echo "<script> alert('Your Blog Added Successfully....'); location.href = 'blog-details.php?blogid=$neworderid'; </script>";
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
        font-size: 15px;
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

    .form-group {
        margin-bottom: 25px;
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
                                                    <h3 style="margin-bottom:15px;"> Add Your Blog </h3>
                                                  
                                                    <div class="form-body">
                                                         <form class="form" action="" method="post" enctype="multipart/form-data">
                                                                <!-- <h4 class="login-title">Login</h4> --> 


                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="name">Name :</label>
                                                                        <input type="text" name="name" placeholder="Name" class="form-control" id="name" autofocus="true" autocomplete="off" maxlength="100" required>
                                                                      </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="email">Email Id :</label>
                                                                        <input type="email" name="email" placeholder="Email Id" class="form-control" id="email" autofocus="true" autocomplete="off" maxlength="100" required>
                                                                      </div>
                                                                </div>
                                                            </div>
                                          
                                                            <div class="form-group">
                                                                <label for="title">Blog Title :</label>
                                                                <input type="text" name="title" placeholder="Title" class="form-control" id="title" autofocus="true" autocomplete="off" maxlength="200" required>
                                                              </div>

                                                              <div class="form-group">
                                                                <label for="imgfile">Blog Cover Image :</label>
                                                                <input type="file"   name="imgfile" id="imgfile" required  >
                                                              </div>

                                                              <div class="form-group">
                                                                <label for="Mobile">Blog Description :</label> 
                                                                <textarea name="description" placeholder="Description" class="form-control" id="description" autofocus="true" autocomplete="off" maxlength="2000" required rows="10"></textarea>
                                                              </div>

                                             
                                                            <input type="submit" value="Submit Blog" name="blog_submit" class="book-btn"/>
                                                            <br><br>
                                                            <!-- <p class="link">Already have an account? <a href="login.php">Login here</a></p> -->

                                                          </form>
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
 

<script type="text/javascript">
    // File type validation
    $("#imgfile").change(function() {
        var file = this.files[0];
        var fileType = file.type;
        var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
        if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
           // alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
            swal("Error Occured", "Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.", "error");
            $("#imgfile").val('');
            return false;
        }
    });
</script>
 


