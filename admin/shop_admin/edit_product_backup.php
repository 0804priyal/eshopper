<?php 
include("../main_pages/header2.php");
include("../main_pages/left_sidebar.php");
?>
<?php
include("../database/connection.php");
$product_id=$_REQUEST['id'];

$sql="select * from products where product_id='$product_id'";
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
              <form action="../database/edit_product_data.php" method="post"  enctype="multipart/form-data">
                  <div class="box-body">                     

                        <div class="form-group">
                          <input type="hidden" class="form-control" name="product_id" id="product_id" value="<?php echo $data['product_id']?>" hidden>
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" name="cat_id" id="cat_id" value="<?php echo $data['cat_id']?>" hidden>
                        </div>

                        <div class="form-group">
                          <label>Product image</label>
                          <div><img class="list_post_img" src="../bannerimg/<?php echo $data['productimg']?>" width="120px" height="100"/></div>
                          <input class="form-control" id="productimg" name="productimg" type="file" placeholder="Name" required />
                        </div>
                        <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" name="productname" id="productname" class="form-control" value="<?php echo $data['productname']?>" required>
                        </div>
                        <div class="form-group">
                          <label>Product Price</label>
                          <input type="text" name="productprice" id="productprice" class="form-control" value="<?php echo $data['productprice']?>" required>
                        </div>
                        <div class="form-group">
                          <label>Offer Price</label>
                          <input type="text" name="offerprice" id="offerprice" class="form-control" value="<?php echo $data['offerprice']?>" required>
                        </div>
                        <div class="form-group">
                          <label>Short Description</label>
                          <textarea class="form-control" id="shortdescription" name="shortdescription" rows="3"><?php echo $data['shortdescription']?></textarea>
                        </div>

                        <div class="form-group">
                          <label>Size:</label>
                          <select class="form-select" name="size" value="<?php echo $data['size']?>" aria-label="Default select example">
                            <?php 
                            $size = array('XS', 'S', 'M', 'L', 'XL', 'XXL');
                            $sizematch = $data['size'];
                            //echo $sizematch;                  
                            foreach ($size as $value) {
                            if($sizematch == $value) {                       
                            ?>
                            <option value="<?php echo $value;?>" selected><?php echo $value;?></option>                            
                            <?php 
                            }                       
                            else {
                            ?>
                            <option value="<?php echo $value;?>"><?php echo $value;?></option>
                            <?php
                            }                      
                            }
                            ?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Colors:</label>
                          <select class="form-select" name="color" value="<?php echo $data['color']?>" aria-label="Default select example">
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
                        <textarea class="form-control" id="fulldescription" name="fulldescription" rows="3" value="<?php echo $data['fulldescription']?>" ></textarea>
                      </div>

                      <div class="form-group">
                        <label>Information</label>
                        <textarea class="form-control" id="information" name="information" rows="3" value="<?php echo $data['information']?>" ></textarea>
                      </div>

                  <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Product</button>
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