<?php 
include("../main_pages/header2.php");
include("../main_pages/left_sidebar.php");
?>
<?php
include("../database/connection.php");

$dress_id=$_REQUEST['id'];

$sql="select * from dresses where dress_id='$dress_id'";
$row=mysqli_query($conn, $sql);
if (mysqli_num_rows($row)>0)
{
$data=mysqli_fetch_array($row);
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
              <form action="../database/edit_category_data.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                      <?php 
                        if(isset($_GET['y']) && $_GET['y']==1) {
                        ?>
                        <h2 style="color:green">Same category already exist</h2>
                        <?php
                        }
                        ?>

                        <div class="form-group">
                          <input type="hidden" class="form-control" name="dress_id" id="dress_id" value="<?php echo $data['dress_id']?>" hidden>
                        </div>

                        <div class="form-group">
                          <label>Product image</label>
                          <div><img class="list_post_img" src="../bannerimg/<?php echo $data['category_img']?>" width="120px" height="120"/></div>
                          <input class="form-control" id="category_img" name="category_img" type="file" placeholder="Name" required />
                        </div>

                        <div class="form-group">
                          <label>Category Name</label>
                          
                          <input type="text" class="form-control" name="dresscatname" id="dresscatname" value="<?php echo $data['dresscatname']?>" required>
                        </div>

                       <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Category</button>
                      </div>       
                        
                  </div>
                </form>
                <?php } else {?>
                  <p>No record found.</p>
                <?php } ?>    
          </div><!-- /.row (main row) -->
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php 
include("../main_pages/footer2.php");
?>      