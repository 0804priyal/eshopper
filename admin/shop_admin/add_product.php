<?php 
include("../main_pages/header.php");
include("../main_pages/left_sidebar.php");
?>
<?php
include("../database/connection.php");
$sql = "Select * from dresses";

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
              <form action="../database/add_product_data.php" method="post" enctype="multipart/form-data"> 
                <div class="box-body">
                  <h2>Add Products</h2>
                  <div class="form-group">
                    <label>Category</label>
                    <select id="cat_id" class="form-control" name="cat_id" required>
                      <?php
                        if($result->num_rows>0) {
                          while ($row=$result->fetch_assoc()) {
                            $id = $row['dress_id'];
                            $dresscatname = $row['dresscatname'];
                      ?>        
                    <option value="<?php echo $id; ?>"><?php echo $dresscatname; ?></option>       
                    <?php 
                      }
                      }
                        $result->free();
                    ?>
                   </select>
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select id="collection_type" class="form-control" name="collection_type" required>
                    <option value="1">Trandy Products</option>       
                    <option value="2">Just Arrived</option>
                   </select>
                  </div>
                  <div class="form-group mb-3">
                    <label class="form-label" for="productimg">Product Image</label>
                    <input class="form-control" id="productimg" name="productimg" type="file" placeholder="Name" required />
                  </div>

                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="productname" id="productname" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Product Price</label>
                    <input type="text" name="productprice" id="productprice" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Offer Price</label>
                    <input type="text" name="offerprice" id="offerprice" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea class="form-control" id="shortdescription" name="shortdescription" rows="3"></textarea>
                  </div>                  
                  
                  <div class="form-group">
                    <label>Size:</label>
                    <select class="form-select" name="size" aria-label="Default select example">
                      <option selected>Select Size</option>
                      <option value="XS">XS</option>
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XL</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Colors:</label>
                    <select class="form-select" name="color" aria-label="Default select example">
                      <option selected>Select Color</option>
                      <option value="Black">Black</option>
                      <option value="White">White</option>
                      <option value="Red">Red</option>
                      <option value="Blue">Blue</option>
                      <option value="Green">Green</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" id="fulldescription" name="fulldescription" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Information</label>
                    <textarea class="form-control" id="information" name="information" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary btn-block">Add Products</button>
                  </div>
                  </div>                                     
              </form>    
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php 
include("../main_pages/footer.php");
?>      