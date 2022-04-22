<?php 
include("../main_pages/header2.php");
include("../main_pages/left_sidebar.php");

include("../database/connection.php");
$sql = "Select * from efooter";
$result = $conn->query($sql);
$row=$result->fetch_assoc();

$efooter_id = $row['efooter_id'];
$etext = $row['etext'];
$eadd = $row['eadd'];
$eemail = $row['eemail'];
$ephone = $row['ephone'];
$yourname = $row['yourname'];
$youremail = $row['youremail'];
?>
  <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <form action="../database/edit_footer_data.php" method="post">
                  <div class="box-body">                     

                        <div class="form-group">
                          <input type="hidden" class="form-control" name="efooter_id" id="efooter_id" value="<?php echo $efooter_id; ?>">
                        </div>

                        <div class="form-group">
                          <h2>E Shopper</h2>
                          <textarea class="form-control" id="etext" name="etext" rows="3"><?php echo $etext; ?></textarea>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="eadd" id="eadd" value="<?php echo $eadd; ?>" required>
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" name="eemail" id="eemail" value="<?php echo $eemail; ?>" required>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="ephone" id="ephone" value="<?php echo $ephone; ?>" required>
                        </div>

                        
                        <div class="form-group">
                          <h2>Newsletter</h2>
                          <input type="text" name="yourname" id="yourname" class="form-control" value="<?php echo $yourname; ?>" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="youremail" id="youremail" class="form-control" value="<?php echo $youremail; ?>" required>
                        </div>

                      <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Product</button>
                      </div>       
                        
                  </div>
                </form>
                    
          </div>
          
        </section>
      </div>
<?php 
include("../main_pages/footer2.php");
?>      