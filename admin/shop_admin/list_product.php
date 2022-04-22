<?php 
include("../main_pages/header2.php");
include("../main_pages/left_sidebar.php");

include("../database/connection.php");
$sql = "Select * from products ORDER BY product_id DESC";
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
              <form action="../database/add_category_data.php" method="post">
                  <div class="box-body">
                    <h2>Product list</h2>
                    <?php 
                    if(isset($_GET['x']) && $_GET['x']==1) {
                    ?>
                    <h2 style="color:green">Product added successfully</h2>
                    <?php
                    }
                    ?>
                    <?php 
                    if(isset($_GET['delete']) && $_GET['delete']==1) {
                    ?>
                    <h2 style="color:green">Record Deleted <?php echo $_GET['productname'] ?></h2>
                    <?php
                    }
                    ?>                   
                        
                  </div>
                </form>    
          </div><!-- /.row (main row) -->
          <div class="box">
                
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                          <tr>
                            <th>Product Id</th>
                            <th>Category Id</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>offer Price</th>
                            
                            <th>Size</th>
                            <th>Color</th>
                            <th>Action</th>
                          </tr>   
                    </thead>
                    <tbody>
                      <?php
                              if($result->num_rows>0) {
                                while ($row=$result->fetch_assoc()) {
                                  $product_id = $row['product_id'];
                                  $cat_id = $row['cat_id'];
                                  $productimg = $row['productimg'];
                                  $productname = $row['productname'];
                                  $productprice = $row['productprice'];
                                  $offerprice = $row['offerprice'];
                                  $shortdescription = $row['shortdescription'];
                                  $size = $row['size'];
                                  $color = $row['color'];
                                  $fulldescription = $row['fulldescription'];
                                  $information = $row['information'];
                            ?>
                          <tr>
                            <td><?php echo $product_id; ?></td>
                            <td><?php echo $cat_id; ?></td>
                            <td><img class="list_post_img" src="../bannerimg/<?php echo $productimg; ?>" width="120px" height="100"/></td>
                            <td><?php echo $productname; ?></td>
                            <td><?php echo $productprice; ?></td>
                            <td><?php echo $offerprice; ?></td>
                            
                            <td><?php echo $size; ?></td>
                            <td><?php echo $color; ?></td>
                            

                            <td><a class="green" href="edit_product.php?id=<?php echo $row['product_id'];?>">Edit</a> / <a class="green" href="product_delete.php?id=<?php echo $row['product_id'];?>&productname=<?php echo $row['productname'];?>">Delete</a></td>
                          </tr>
                          <?php 
                          }
                          }
                            $result->free();
                        ?>
                      
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php 
include("../main_pages/footer2.php");
?>      