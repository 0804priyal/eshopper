<?php 
include("../main_pages/header2.php");
include("../main_pages/left_sidebar.php");

include("../database/connection.php");
$sql = "Select * from commonsection";
$result = $conn->query($sql);
$row=$result->fetch_assoc();

$id = $row['id'];
$copyright = $row['copyright'];
$copyrighttext = $row['copyrighttext'];
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
              <form action="../database/edit_commonsection_data.php" method="post">
                  <div class="box-body">                     

                        <div class="form-group">
                          <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>">
                        </div>

                        <div class="form-group">
                          <h2>Common Section</h2>
                          <textarea class="form-control" id="copyright" name="copyright" rows="3"><?php echo $copyright; ?></textarea>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="copyrighttext" id="copyrighttext" value="<?php echo $copyrighttext; ?>" required>
                        </div>

                      <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Product</button>
                      </div>       
                        
                  </div>
                </form>
                    
          </div>
          
        </section>
      </div>
<?php 
include("../main_pages/footer2.php");
?>      