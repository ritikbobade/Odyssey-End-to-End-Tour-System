


<!-- Modal -->
<div class="modal fade" id="LoginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
            <div class="form-body">
              <form class="form" method="post" name="login">
                    <!-- <h4 class="login-title">Login</h4> --> 
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="username" placeholder="Email Id" class="form-control" id="email" autofocus="true" autocomplete="off" maxlength="50" required>
                      </div>

                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control"  name="password" placeholder="Password" id="pwd" autocomplete="off" maxlength="50" required>
                      </div>
     
                    <input type="submit" value="Login" name="submitlog" class="book-btn"/>
                    <br><br>
                    <!-- <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p> -->
              </form>
            </div>  
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  
</div>







<!-- Modal -->
<div class="modal fade" id="RegisterModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration</h4>
        </div>
        <div class="modal-body">
            <div class="form-body">
             <form class="form" action="" method="post">
                    <!-- <h4 class="login-title">Login</h4> --> 
 


                    <div class="form-group">
                        <label for="Mobile">Name:</label>
                        <input type="text" name="name" placeholder="Name" class="form-control" id="Mobile" autofocus="true" autocomplete="off" maxlength="100" required>
                      </div>

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" placeholder="Email address" class="form-control" id="email" autofocus="true" autocomplete="off" maxlength="100" required>
                      </div>

                      <div class="form-group">
                        <label for="Mobile">Mobile No:</label>
                        <input type="text" name="mobile" placeholder="Mobile No" class="form-control" id="Mobile" autofocus="true" autocomplete="off" maxlength="10" required>
                      </div>

                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control"  name="password" placeholder="Password" id="pwd" autocomplete="off" maxlength="50" required>
                      </div>
     
                    <input type="submit" value="Register" name="submitreg" class="book-btn"/>
                    <br><br>
                    <!-- <p class="link">Already have an account? <a href="login.php">Login here</a></p> -->

              </form>
            </div>  
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  
</div>








<!-- footer-copyright start -->
        <footer  class="footer-copyright">
            <div class="container"> 
                <hr>
                <div class="foot-icons ">
                
                    <p> 2022 Project Odyssey   </p>

                </div><!--/.foot-icons-->
                <div id="scroll-Top">
                    <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
                </div><!--/.scroll-Top-->
            </div><!-- /.container-->

        </footer><!-- /.footer-copyright-->
        <!-- footer-copyright end -->




        <script src="assets/js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <!--modernizr.min.js-->
        <script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


        <!--bootstrap.min.js-->
        <script  src="assets/js/bootstrap.min.js"></script>

        <!-- bootsnav js -->
        <script src="assets/js/bootsnav.js"></script>

        <!-- jquery.filterizr.min.js -->
        <script src="assets/js/jquery.filterizr.min.js"></script>

        <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>

        <!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
        <script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){   
                $('#home').focus();
            });
        </script>
 
          <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
          <script>
              $( function() {
                $( "#datepicker1" ).datepicker();
                $( "#datepicker2" ).datepicker();
              });
          </script>  



    </body>

</html>