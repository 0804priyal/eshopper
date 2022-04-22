<?php 
include("../main_pages/header2.php");
include("../main_pages/left_sidebar.php");
?>
<?php
include("../database/connection.php");

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
              	<form action="../database/add_common_data.php" method="post">
	                <div class="box-body">	                    
		                <?php 
		                if(isset($_GET['quikslinks']) && $_GET['quikslinks']==1) {
		                ?>
		                	<h2 style="color:red">Add product Category failed</h2>
		                <?php
		                }
		                ?>
		                <div class="form-group">
		                	<h4 for="contactushead">Quiks Links</h4>
		                	<input type="text" class="form-control" name="quikslinks" id="quikslinks" placeholder="Add Quiks Links">
		                </div>
		                <div class="form-group">
		                	<button type="submit" name="submit_links" class="btn btn-primary btn-lg">Add Quiks Links</button>
		                </div>
	                </div>
                </form> 
            </div>

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