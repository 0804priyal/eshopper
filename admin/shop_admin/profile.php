<?php 
include("../main_pages/header.php");
include("../main_pages/left_sidebar.php");
?>
<?php
include("../database/connection.php");
$sql = "SELECT * from contactus";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$id = $row['id'];
$contactushead = $row['contactushead'];
$getintouch = $row['getintouch'];
$store1add = $row['store1add'];
$store1email = $row['store1email'];
$store1phone = $row['store1phone'];
$store2add = $row['store2add'];
$store2email = $row['store2email'];
$store2phone = $row['store2phone'];
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
              <div class="col-md-12">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div id="content" class="content content-full-width">
                        <!-- begin profile -->
                        <div class="profile">
                           <div class="profile-header">
                              <!-- BEGIN profile-header-cover -->
                              <div class="profile-header-cover"></div>
                              <!-- END profile-header-cover -->
                              <!-- BEGIN profile-header-content -->
                              <div class="profile-header-content">
                                 <!-- BEGIN profile-header-img -->
                                 <div class="profile-header-img">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                 </div>
                                 <!-- END profile-header-img -->
                                 <!-- BEGIN profile-header-info -->
                                 <div class="profile-header-info">
                                    <h4 class="m-t-10 m-b-5">John Doe</h4>
                                    <p class="m-b-10">Web And Frontend Developer</p>
                                    <a href="#" class="btn btn-xs btn-success">Edit Profile</a>
                                 </div>
                                 <!-- END profile-header-info -->
                              </div>
                              <!-- END profile-header-content -->
                              <!-- BEGIN profile-header-tab -->
                              <ul class="profile-header-tab nav nav-tabs">
                                 <li class="nav-item"><a href="#profile-post" class="nav-link" data-toggle="tab">POSTS</a></li>
                                 <li class="nav-item"><a href="#profile-about" class="nav-link active show" data-toggle="tab">ABOUT</a></li>
                                 <li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">PHOTOS</a></li>
                                 <li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">VIDEOS</a></li>
                                 <li class="nav-item"><a href="#profile-friends" class="nav-link" data-toggle="tab">FRIENDS</a></li>
                              </ul>
                              <!-- END profile-header-tab -->
                           </div>
                        </div>
                        <!-- end profile -->
                        <!-- begin profile-content -->
                        <div class="profile-content">
                           <!-- begin tab-content -->
                           <div class="tab-content p-0">

                              <!-- begin #profile-about tab -->
                              <div class="tab-pane fade in active show" id="profile-about">
                                 <!-- begin table -->
                                 <div class="table-responsive">
                                    <table class="table table-profile">
                                       <thead>
                                          <tr>
                                             <th></th>
                                             <th>
                                                <h4>Micheal    Meyer <small>Lorraine Stokes</small></h4>
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="highlight">
                                             <td class="field">Mood</td>
                                             <td><a href="javascript:;">Add Mood Message</a></td>
                                          </tr>
                                          <tr class="divider">
                                             <td colspan="2"></td>
                                          </tr>
                                          <tr>
                                             <td class="field">Mobile</td>
                                             <td><i class="fa fa-mobile fa-lg m-r-5"></i> +1-(847)- 367-8924 <a href="javascript:;" class="m-l-5">Edit</a></td>
                                          </tr>
                                          <tr>
                                             <td class="field">Home</td>
                                             <td><a href="javascript:;">Add Number</a></td>
                                          </tr>
                                          <tr>
                                             <td class="field">Office</td>
                                             <td><a href="javascript:;">Add Number</a></td>
                                          </tr>
                                          <tr class="divider">
                                             <td colspan="2"></td>
                                          </tr>
                                          <tr class="highlight">
                                             <td class="field">About Me</td>
                                             <td><a href="javascript:;">Add Description</a></td>
                                          </tr>
                                          <tr class="divider">
                                             <td colspan="2"></td>
                                          </tr>
                                          <tr>
                                             <td class="field">Country/Region</td>
                                             <td>
                                                <select class="form-control input-inline input-xs" name="region">
                                                   <option value="US" selected="">United State</option>
                                                   <option value="AF">Afghanistan</option>
                                                   <option value="AL">Albania</option>
                                                   <option value="DZ">Algeria</option>
                                                   <option value="AS">American Samoa</option>
                                                   <option value="AD">Andorra</option>
                                                   <option value="AO">Angola</option>
                                                   <option value="AI">Anguilla</option>
                                                   <option value="AQ">Antarctica</option>
                                                   <option value="AG">Antigua and Barbuda</option>
                                                </select>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="field">City</td>
                                             <td>Los Angeles</td>
                                          </tr>
                                          <tr>
                                             <td class="field">State</td>
                                             <td><a href="javascript:;">Add State</a></td>
                                          </tr>
                                          <tr>
                                             <td class="field">Website</td>
                                             <td><a href="javascript:;">Add Webpage</a></td>
                                          </tr>
                                          <tr>
                                             <td class="field">Gender</td>
                                             <td>
                                                <select class="form-control input-inline input-xs" name="gender">
                                                   <option value="male">Male</option>
                                                   <option value="female">Female</option>
                                                </select>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="field">Birthdate</td>
                                             <td>
                                                <select class="form-control input-inline input-xs" name="day">
                                                   <option value="04" selected="">04</option>
                                                </select>
                                                -
                                                <select class="form-control input-inline input-xs" name="month">
                                                   <option value="11" selected="">11</option>
                                                </select>
                                                -
                                                <select class="form-control input-inline input-xs" name="year">
                                                   <option value="1989" selected="">1989</option>
                                                </select>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="field">Language</td>
                                             <td>
                                                <select class="form-control input-inline input-xs" name="language">
                                                   <option value="" selected="">English</option>
                                                </select>
                                             </td>
                                          </tr>
                                          <tr class="divider">
                                             <td colspan="2"></td>
                                          </tr>
                                          <tr class="highlight">
                                             <td class="field">&nbsp;</td>
                                             <td class="p-t-10 p-b-10">
                                                <button type="submit" class="btn btn-primary width-150">Update</button>
                                                <button type="submit" class="btn btn-white btn-white-without-border width-150 m-l-5">Cancel</button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <!-- end table -->
                              </div>
                              <!-- end #profile-about tab -->
                           </div>
                           <!-- end tab-content -->
                        </div>
                        <!-- end profile-content -->
                     </div>
                  </div>
               </div>
            </div>
        </div>
			  
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php 
include("../main_pages/footer.php");
?>      