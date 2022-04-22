<?php 
include("../main_pages/header2.php");
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
              <form action="../database/add_category_data.php" method="post">
                  <div class="box-body">
                    <h2>Product Category List</h2>
                    <?php 
                    if(isset($_GET['x']) && $_GET['x']==1) {
                    ?>
                      <h2 style="color:green">Add product Category Successfully</h2>
                    <?php
                    }
                    ?>
                    <?php 
                    if(isset($_GET['delete']) && $_GET['delete']==1) {
                    ?>
                      <h2 style="color:green">Record Deleted <?php echo $_GET['dresscatname'] ?></h2>
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
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Crate Date</th>
                            <th>Update Date</th>
                            <th>Action</th>
                          </tr>
                    </thead>
                    <tbody>
                      <?php
                              if($result->num_rows>0) {
                                while ($row=$result->fetch_assoc()) {
                                  $dress_id = $row['dress_id'];
                                  $dresscatname = $row['dresscatname'];
                                  $category_img = $row['category_img'];
                                  $createdate = $row['createdate'];
                                  $updatedate = $row['updatedate'];
                            ?>
                          <tr>
                            <td><?php echo $dress_id; ?></td>
                            <td><?php echo $dresscatname; ?></td>
                            <td><img class="list_post_img" src="../bannerimg/<?php echo $category_img; ?>" width="120px" height="120"/></td>
                            <td><?php echo $createdate; ?></td>
                            <td><?php echo $updatedate; ?></td>
                            <td><a class="green" href="edit_category.php?id=<?php echo $row['dress_id'];?>">Edit</a> / <a class="green" href="category_delete.php?id=<?php echo $row['dress_id'];?>&dresscatname=<?php echo $row['dresscatname'];?>">Delete</a></td>
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