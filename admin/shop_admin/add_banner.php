<?php 
include("../main_pages/header2.php");
include("../main_pages/left_sidebar.php");
?>
<?php
include("../database/connection.php");

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
            <form action="../database/add_banner_data.php" method="post" enctype="multipart/form-data">
            <div class="box-body">
            	<h2>Add banner images and text</h2>
					    <!-- Banner Text -->
					    <div class="form-group mb-3">
					      <label class="form-label" for="bannertext">Banner Text</label>
					      <input class="form-control" id="bannertext" name="bannertext" type="text" placeholder="Banner Text Here" required />
					    </div>

					    <!-- Banner Head-->
					    <div class="form-group mb-3">
					      <label class="form-label" for="bannerhead">Banner Head</label>
					      <input class="form-control" id="bannerhead" name="bannerhead" type="text" placeholder="Banner Heading Text" required />
					    </div>

					    <!-- Name input -->
					    <div class="form-group mb-3">
					      <label class="form-label" for="bannerimg">Blog image</label>
					      <input class="form-control" id="bannerimg" name="bannerimg" type="file" placeholder="Name" required />
					    </div>

			    <!-- Form submit button -->
			    <div class="d-grid">
			      <button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="submit">Submit</button>
			      <button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="submit">Banner List</button>
			    </div>
			  </div>  
  			</form>
                 
          </div><!-- /.row (main row) -->
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php 
include("../main_pages/footer2.php");
?>      