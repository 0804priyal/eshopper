<?php
include("database/connection.php");
$sql = "SELECT * from products WHERE collection_type = 2";
$result = $conn->query($sql);
?>
<!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php
                  if($result->num_rows>0) {
                    //$i=0;
                    while ($row=$result->fetch_assoc()) {
                    $productimg = $row['productimg'];
                    $productname = $row['productname'];
                    $productprice = $row['productprice'];
                    $offerprice = $row['offerprice'];
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="../admin/bannerimg/<?php echo $productimg; ?>" height="200px" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?php echo $productname; ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?php echo $offerprice; ?></h6><h6 class="text-muted ml-2"><del><?php echo $productprice; ?></del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
            <?php
                //$i=$i+1;
                }
                }            
            ?>
        </div>
    </div>
    <!-- Products End -->