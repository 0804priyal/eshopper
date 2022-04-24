<?php    
    include("header_login.php");
    
?>
        </div>
      </div>
    </div>
    <!-- Navbar End -->
      <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="database/login_data.php" method="post">
                          <?php
                            if(isset($_GET['x']) && $_GET['x']==1) {
                          ?>
                          <h6 style="color:green">Your Registration is Successful: Now Login</h6>
                          <?php    
                            }
                          ?>
                          <?php
                            if(isset($_GET['product_id']) && $_GET['product_id']==0) {
                          ?>
                          <h6 style="color:green">Please login before <b>Add to Card</b></h6>
                          <?php    
                            }
                          ?>
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">E-Mail:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="passw" class="text-info">Password:</label><br>
                                <input type="text" name="passw" id="passw" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <button type="submit" name="submit" class="btn btn-info btn-md">Login</button>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="registration.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
<?php
    include("footer.php");
?>  