<?php 
include("../main_pages/header2.php");
include("../main_pages/left_sidebar.php");
?>
<?php
include("../database/connection.php");
$sql = "Select * from logo";
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
                    <h2>Logo List</h2>
                    <?php 
                    if(isset($_GET['x']) && $_GET['x']==1) {
                    ?>
                      <h2 style="color:green">Add Logo Successfully</h2>
                    <?php
                    }
                    ?>
                    <?php 
                    if(isset($_GET['delete']) && $_GET['delete']==1) {
                    ?>
                      <h2 style="color:green">Record Deleted</h2>
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
                            <th>Logo Id</th>
                            <th>Logo Images</th>
                            <th>Action</th>
                          </tr>
                    </thead>
                    <tbody>
                      <?php
                              if($result->num_rows>0) {
                                while ($row=$result->fetch_assoc()) {
                                  $logo_id = $row['logo_id'];
                                  $logoimg = $row['logoimg'];
                            ?>
                          <tr>
                            <td><?php echo $logo_id; ?></td>
                            <td><img class="list_post_img" src="../bannerimg/<?php echo $logoimg; ?>" width="120px" height="100"/></td>
                            <td><a class="green" href="edit_logo.php?id=<?php echo $row['logo_id'];?>">Edit</a> / <a class="green" href="logo_delete.php?id=<?php echo $row['logo_id'];?>">Delete</a></td>
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