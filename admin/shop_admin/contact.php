<?php 
include("../main_pages/header.php");
include("../main_pages/left_sidebar.php");
?>
<?php
include("../database/connection.php");
$sql = "SELECT * from contactus";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$id = $row['id'];
$contactushead = $row['contactushead'];
$getintouch = $row['getintouch'];
$store1add = $row['store1add'];
$store1email = $row['store1email'];
$store1phone = $row['store1phone'];
$store2add = $row['store2add'];
$store2email = $row['store2email'];
$store2phone = $row['store2phone'];
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
              <form action="../database/contactus_insert.php" method="post" role="form">
                  <div class="box-body">
                    <?php 
                    if(isset($_GET['x']) && $_GET['x']==1) {
                    ?>
                    <h2 style="color:green">Contact us Updated successfully</h2>
                    <?php
                    }
                    ?>
                    <?php 
                    if(isset($_GET['y']) && $_GET['y']==1) {
                    ?>
                    <h2 style="color:red">Updation failed</h2>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                      <label for="contactushead">Contact For Any Queries</label>
                      <input type="text" class="form-control" name="contactushead" id="contactushead" value="<?PHP echo $contactushead; ?>">
                    </div>
                    <div class="form-group">
                    <label for="getintouch">Get In Touch</label>
                      <textarea name="getintouch" class="form-control" rows="3"><?PHP echo $getintouch; ?></textarea>
                    </div>
                    
                    <div class="form-group">
                      <label for="store1">Store 1</label>
                      <input type="text" class="form-control" name="store1add" id="store1add" value="<?PHP echo $store1add; ?>">
                      <input type="email" class="form-control" name="store1email" id="store1email" value="<?PHP echo $store1email; ?>">
                      <input type="text" class="form-control" name="store1phone" id="store1phone" value="<?PHP echo $store1phone; ?>">
                    </div>

                    <div class="form-group">
                      <label for="store2">Store 2</label>
                      <input type="text" class="form-control" name="store2add" id="store2add" value="<?PHP echo $store1add; ?>">
                      <input type="email" class="form-control" name="store2email" id="store2email" value="<?PHP echo $store1email; ?>">
                      <input type="text" class="form-control" name="store2phone" id="store2phone" value="<?PHP echo $store1phone; ?>">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary btn-lg">UPDATE CONTACT US</button>
                    </div>

                  </div>
                </form>    
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php 
include("../main_pages/footer.php");
?>      