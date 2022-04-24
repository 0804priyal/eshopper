<?php 
 include("database/connection.php");
 if(isset($_POST['from'])) {
     $startvalue = $_POST['from'];
     $endvalue = $_POST['end'];
     $selectresult = "SELECT * FROM products WHERE offerprice BETWEEN $startvalue AND $endvalue";
     //$result = mysqli_query($conn, $selectresult);
     $result = $conn->query($selectresult);
 }
elseif (isset($_POST['color'])) {
     $color = $_POST['color'];
     $selectresult = "SELECT * FROM products WHERE color = $color";
     //$result = mysqli_query($conn, $selectresult);
     $result = $conn->query($selectresult);
}
else {
     $selectresult = "SELECT * FROM products";
     //$result = mysqli_query($conn, $selectresult);
     $result = $conn->query($selectresult);
 }
?>
                    <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by name">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sort by
                                        </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            if($result->num_rows>0) {
                             while ($row=$result->fetch_assoc()) {
                             $productname = $row['productname'];
                             $productimg = $row['productimg'];
                             $shortdescription = $row['shortdescription'];
                             $size = $row['size'];
                             $color = $row['color'];
                             $productprice = $row['productprice'];
                             $offerprice = $row['offerprice'];
                             $fulldescription = $row['fulldescription'];
                             $information = $row['information'];
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="../admin/bannerimg/<?php echo $productimg; ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?php echo $productname; ?></h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$<?php echo $offerprice; ?>.00</h6><h6 class="text-muted ml-2"><del>$<?php echo $productprice; ?>.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="detail.php?id=1&amp;cat_id=17" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                        </div>
                        <?php 
                            }
                            }
                        ?>
                    
                </div>
                                        