<?php
    include("header_login.php");
    $email=$_GET['x'];
?>
        </div>
      </div>
    </div>
    <!-- Navbar End -->
  <div class="container">
  <div class="row form-gap justify-content-md-center">
    <div class="col-md-8 col-md-offset-2">
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
    
                  <form onSubmit="return checkPassword(this)" action="database/reset_password_insert.php" method="post">
                      <table border = 1 align = "center">
                          <tr>
                              <!-- Enter Password. -->
                              <td>Email:</td>
                              <td><input type="email" name="email" value="<?php echo $email; ?>" size="25" hidden></td>
                          </tr>
                          <tr>
                              <!-- Enter Password. -->
                              <td>Password:</td>
                              <td><input type="password" name="passw" size="25" required></td>
                          </tr>
                          <tr>
                              <!-- To Confirm Password. -->
                              <td>Confirm Password:</td>
                              <td><input type="password" name="passw2" size="25" required></td>
                          </tr>
                          <tr>
                              <td colspan=2 align="right">
                              <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Reset Password</button>
                            </td>
                          </tr>
                      </table>
                      </form>
                        </div>
                    </div>
 
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