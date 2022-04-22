<?php 
include("../main_pages/header.php");
include("../main_pages/left_sidebar.php");
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
              <form action="../database/logo_data.php" method="post"  enctype="multipart/form-data"> 
                <div class="box-body">
                  <h2>Add Logo</h2>
                  <?php 
                    if(isset($_GET['y']) && $_GET['y']==1) {
                    ?>
                      <h2 style="color:red">Logo addition failed</h2>
                    <?php
                    }
                    ?>
                  <div class="form-group mb-3">
                    <label class="form-label" for="productimg">Logo image</label>
                    <input class="form-control" id="logoimg" name="logoimg" type="file" placeholder="Name" required />
                  </div>

                  

                  <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary btn-block">Add Logo</button>
                  </div>
                  </div>                                     
              </form>    
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php 
include("../main_pages/footer.php");
?>      