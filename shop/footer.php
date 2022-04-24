<?php
include("database/connection.php");
$sql = "Select * from efooter";
$result = $conn->query($sql);

if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {                       
    $etext = $row['etext'];
    $eadd = $row['eadd'];
    $eemail = $row['eemail'];
    $ephone = $row['ephone'];
    $yourname = $row['yourname'];
    $youremail = $row['youremail'];
?>
<?php
    $sql = "Select * from commontable limit 0,5";
    $result2 = $conn->query($sql);
?>
<?php
    $sql3 = "Select * from commontable limit 6,15";
    $result3 = $conn->query($sql3);
?>
<?php
    $sql = "Select * from commonsection";
    $result4 = $conn->query($sql);
?>
<!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p><?php echo $etext; ?></p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i><?php echo $eadd; ?></p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><?php echo $eemail; ?></p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i><?php echo $ephone; ?></p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        
                        <div class="d-flex flex-column justify-content-start">
                            <?php 
                                if($result2->num_rows>0) {
                                while ($row = $result2->fetch_assoc()) {
                                $quikslinks  = $row['quikslinks'];
                            ?>
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i><?php echo $quikslinks; ?></a>
                            <?php
                                //$i=$i+1;
                                }
                                }            
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="d-flex flex-column justify-content-start">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                            <?php 
                                if($result3->num_rows>0) {
                                while ($row = $result3->fetch_assoc()) {
                                $quikslinks  = $row['quikslinks'];
                            ?>
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i><?php echo $quikslinks; ?></a>
                            <?php
                                //$i=$i+1;
                                }
                                }            
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" value="<?php echo $yourname; ?>" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" value="<?php echo $youremail; ?>" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <?php 
                    if($result4->num_rows>0) {
                    while ($row = $result4->fetch_assoc()) {
                    $copyright  = $row['copyright'];
                    $copyrighttext  = $row['copyrighttext'];
                ?>
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#"><?php echo $copyright; ?></a>. <?php echo $copyrighttext; ?>
                </p>
                <?php
                    }
                    }            
                ?>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <?php 
        }
    }
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'index1.php?page='+page;   
    }
  </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="js/jquery.dynaprice.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript"> 
    jQuery(document).ready(function(){
      jQuery('.oncheck').change(function(){
       var fromValue = jQuery(this).attr('from');
       var endValue = jQuery(this).attr('end');
       var colorValue = jQuery(this).attr('color');
       $.ajax({
            type: "POST",
            url: 'category_filter.php',
            data: {from:fromValue,end:endValue,color:colorValue},
            success: function(response)
            {
               jQuery('.shop-filter').html(response);
           }
       });
      });
    });   
    /* Calculation for card page */
    $(function(){
            $('input#basic').dynaprice({
                destination: $('span#basicPrice')
            });
            
        });
</script>
</body>

</html>