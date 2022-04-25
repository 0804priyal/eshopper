<?php
    include("header_login.php");
?>
        </div>
      </div>
    </div>
    <!-- Navbar End -->
  <div class="container">
  <div class="row form-gap justify-content-md-center">
    <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <?php
                    if(isset($_GET['x']) && $_GET['x']==1) {
                    ?>
                    <h6 style="color:green">Re-set Password have send now check your mail id</h6>
                    <?php    
                    }
                  ?>
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                  <form id="register-form" class="form" action="database/forgotpassword_data.php" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                         <input type="text" name="email" id="email" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        
                        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Reset Password</button>
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
<?php
    include("footer.php");
?>  