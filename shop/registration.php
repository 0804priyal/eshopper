<?php 
    include("header.php");
?>
        </div>
      </div>
    </div>
    <!-- Navbar End -->
  <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-12">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="database/registration_data.php" method="post">
                            <h3 class="text-center text-info mb-4">Register Form</h3>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="firstname" class="text-info">First Name:</label><br>
                                    <input type="text" name="firstname" id="firstname" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="lname" class="text-info">Last Name:</label><br>
                                    <input type="text" name="lname" id="lname" class="form-control">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="email" class="text-info">E-mail:</label><br>
                                    <input type="text" name="email" id="email" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="mobile" class="text-info">Mobile No:</label><br>
                                    <input type="text" name="mobile" id="mobile" class="form-control">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="address1" class="text-info">Address Line 1:</label><br>
                                    <input type="text" name="address1" id="address1" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="address2" class="text-info">Address Line 2:</label><br>
                                    <input type="text" name="address2" id="address2" class="form-control">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="country" class="text-info">Country:</label><br>
                                    <input type="text" name="country" id="country" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="city" class="text-info">City:</label><br>
                                    <input type="text" name="city" id="city" class="form-control">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="state" class="text-info">State:</label><br>
                                    <input type="text" name="state" id="state" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="zipcode" class="text-info">ZIP Code:</label><br>
                                    <input type="text" name="zipcode" id="zipcode" class="form-control">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="passw" class="text-info">Password:</label><br>
                                    <input type="text" name="passw" id="passw" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="repassw" class="text-info">Re-Password:</label><br>
                                    <input type="text" name="repassw" id="repassw" class="form-control">
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <button type="submit" name="submit" class="btn btn-info btn-md">Register here</button>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
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