<?php 
include("../main_pages/header.php");
include("../main_pages/left_sidebar.php");
$sql = "Select * from dresses ORDER BY dress_id DESC";
$result = $conn->query($sql);
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
              <form action="../database/sub_category_data.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    
                    <?php 
                    if(isset($_GET['y']) && $_GET['y']==1) {
                    ?>
                    <h2 style="color:red">Add product Category failed</h2>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                      <label for="dresscatname">Add Product Category</label>
					    <select name="dress_id" class="form-select" aria-label="Default select example">
							<?php
							  if($result->num_rows>0) {
								$i=0;
								while ($row=$result->fetch_assoc()) {
								$dress_id = $row['dress_id'];
								$dresscatname = $row['dresscatname'];
							?>
						  <option value="<?php echo $dress_id; ?>"><?php echo $dresscatname; ?></option>
						  <?php 
                          }
                          }
                            $result->free();
                        ?>
						  
						</select>
                    </div>
					<div class="form-group">
                      <label for="sub_category_name">Sub Product Category</label>
                      <input type="text" class="form-control" name="sub_category_name" id="sub_category_name" placeholder="Add product Category">
                    </div>
                    <div class="form-group mb-3">
                      <label class="form-label" for="sub_img">Product Category Image</label>
                      <input class="form-control" id="sub_img" name="sub_img" type="file" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary btn-lg">Add Sub Cotegory</button>
                    </div>

                  </div>
                </form>    
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php 
include("../main_pages/footer.php");
?>      