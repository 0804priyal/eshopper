<?php 
include("../main_pages/header2.php");
include("../main_pages/left_sidebar.php");

include("../database/connection.php");
$sql = "Select * from commontable";
$result = $conn->query($sql);
?>
      

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Simple Tables
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
                <h3>Quicks Links List</h3>
                <?php 
                  if(isset($_GET['x']) && $_GET['x']==1) {
                ?>
                  <h4 style="color:green; text-align: center;">Quick Link Added</h4>
                <?php
                  }
                ?>
              	<table class="table table-bordered">                  
                    <tr>
                      <th style="width: 10px">Quiks Id</th>
                      <th style="width: 40px">Quiks Links</th>
                    </tr>
                    <?php
                    if($result->num_rows>0) {
                      while ($row = $result->fetch_assoc()) {
                        $quiks_id = $row['id'];
                        $quikslinks = $row['quikslinks'];
                    ?>
                    <tr>
                      <td><?php echo $quiks_id; ?></td>
                      <td><?php echo $quikslinks; ?></td>
                    </tr>
                    <?php 
                      }
                      }
                      $result->free();
                    ?>                   
                  </table>  
          		

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Condensed Full Width Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-red">55%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-yellow">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Cron job running</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-light-blue">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">90%</span></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Simple Full Width Table</h3>
                  <div class="box-tools">
                    <ul class="pagination pagination-sm no-margin pull-right">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-red">55%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-yellow">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Cron job running</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-light-blue">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">90%</span></td>
                    </tr>
                  </table>
                </div>
              </div>
          </div>
      </div>
  	</section>
      </div>
<?php 
include("../main_pages/footer2.php");
?>      