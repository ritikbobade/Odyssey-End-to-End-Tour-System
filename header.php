<?php   include("includes/connect.php");?> 
<?php
error_reporting(0);
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if(isset($_POST['submitlog'])){
        if (isset($_POST['username'])) {
            $username = stripslashes($_REQUEST['username']);    // removes backslashes
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            // Check user is exist in the database
            $query    = "SELECT * FROM `users` WHERE username='$username'
                         AND password='" . md5($password) . "'";
            $result = mysqli_query($con, $query) or die(mysql_error());
            $rowlg = mysqli_fetch_assoc($result);
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $rowlg["id"];
                // Redirect to user dashboard page
                header("Location: index.php");
            } else {
                // echo "<div class='form'>
                //       <h3>Incorrect Username/password.</h3><br/>
                //       <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                //       </div>";
                echo "<script> alert('Incorrect Username/password.'); location.href = 'index.php'; </script>";
            }
        }  
    }
?>


<?php 
 if(isset($_POST['submitreg'])){
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        // removes backslashes

        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        // $username = stripslashes($_REQUEST['username']); 
        // $username = mysqli_real_escape_string($con, $username);
        $mobile = stripslashes($_REQUEST['mobile']);
        //escapes special characters in a string
        $mobile = mysqli_real_escape_string($con, $mobile);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (name, username, password, email, mobile, create_datetime)
                     VALUES ('$name', '$email', '" . md5($password) . "', '$email', '$mobile', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            // echo "<div class='form'>
            //       <h3>You are registered successfully.</h3><br/>
            //       <p class='link'>Click here to <a href='login.php'>Login</a></p>
            //       </div>";
                  echo "<script> alert('You are registered successfully.'); location.href = 'index.php'; </script>";
        } else {
            // echo "<div class='form'>
            //       <h3>Required fields are missing.</h3><br/>
            //       <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
            //       </div>";
                  echo "<script> alert('Something Went Wrong, Please Try Again Later'); location.href = 'index.php'; </script>";
        }
    }  
}
?>


<!doctype html>
<html class="no-js"  lang="en">

    <head>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
        <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

        <!-- TITLE OF SITE -->
        <title>Odyssey</title>

        <!-- favicon img -->
        <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

        <!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css" />

        <!--hover.css-->
        <link rel="stylesheet" href="assets/css/hover-min.css">

        <!--datepicker.css-->
        <link rel="stylesheet"  href="assets/css/datepicker.css" >

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

        <!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

        <!-- bootsnav -->
        <link rel="stylesheet" href="assets/css/bootsnav.css"/>

        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css" />
        

        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/my-style.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">

        <style type="text/css">
            .modal-backdrop.in { 
                opacity: 0;
                display: none!important;
            }
        </style>

    </head>

    <body>
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
            your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- main-menu Start -->
        <header class="top-area">
            <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="logo">
                                <a href="index.php">
                                    Odyssey<span></span>
                                </a>
                            </div><!-- /.logo-->
                        </div><!-- /.col-->
                        <div class="col-sm-10">
                            <div class="main-menu">
                            
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <i class="fa fa-bars"></i>
                                    </button><!-- / button-->
                                </div><!-- /.navbar-header-->
                                <div class="collapse navbar-collapse">        
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="smooth-menu"><a href="index.php">home</a></li> 
                                        <li class="smooth-menu"><a href="index.php#pack">Packages </a></li> 
                                        <li class="smooth-menu"><a href="quiz-panel.php">Quiz Panel </a></li> 
                                        <li class="smooth-menu"><a href="blogs.php">blogs</a></li> 
                                   
                                        <?php 
                                            if(!isset($_SESSION["username"])) {
                                        ?>
                                            <li> <button type="button" class="book-btn" data-toggle="modal" data-target="#LoginModal">Login </button> </li> 
                                        <?php 
                                            }
                                        ?>

                                        <?php 
                                            if(!isset($_SESSION["username"])) {
                                        ?>
                                            <li> <button class="book-btn" type="button" class="book-btn" data-toggle="modal" data-target="#RegisterModal">Register </button> </li> 
                                        <?php 
                                            }
                                        ?>

                                        <?php 
                                            if(isset($_SESSION["username"])) {
                                        ?>
                                            <li> <a href="logout.php"  ><button class="book-btn"   class="book-btn" >Logout </button> </a> </li> 
                                        <?php 
                                            }
                                        ?>

                                        

                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.main-menu-->
                        </div><!-- /.col-->
                    </div><!-- /.row -->
                    <div class="home-border"></div><!-- /.home-border-->
                </div><!-- /.container-->
            </div><!-- /.header-area -->

        </header><!-- /.top-area-->
        <!-- main-menu End -->