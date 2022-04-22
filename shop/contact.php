<?php 
	include("header.php");
?>
<?php
include("database/connection.php");
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
		</div>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-3">
        <div class="text-center mb-3">
            <?php
                if(isset($_GET['x']) && $_GET['x']==1) {                
            ?>
            <h4 style="color:green" class="section-title"><span class="px-2">Message sent successfully...</span></h4>
            <?php
                }
            ?>
            <?php
                if(isset($_GET['y']) && $_GET['y']==1) {                
            ?>
            <h4 style="color:red" class="section-title"><span class="px-2">Message could not be sent...</span></h4>
            <?php
                }
            ?>
            <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="send_mail_contact.php" method="post">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" name="yourname" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" name="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-1 mb-5">
            </div>	
            <div class="col-lg-6 mb-5">
                <h5 class="font-weight-semi-bold mb-3"><?PHP echo $contactushead; ?></h5>
                <p><?PHP echo $getintouch; ?></p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i><?PHP echo $store1add; ?></p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><?PHP echo $store1email; ?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i><?PHP echo $store1phone; ?></p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Store 2</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i><?PHP echo $store2add; ?></p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><?PHP echo $store2email; ?></p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i><?PHP echo $store2phone; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php
	include("footer.php");
?>