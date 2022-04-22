<?php
include("database/connection.php");
$sql = "SELECT * from dresses LIMIT 0,9";
$result = $conn->query($sql);
?>
<!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <?php
                if($result->num_rows>0) {
                //$i=0;
                while ($row=$result->fetch_assoc()) {
                $dress_id = $row['dress_id'];
                $dresscatname = $row['dresscatname'];
                $category_img = $row['category_img'];
            ?>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right"><?php echo $dress_id; ?> Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="../admin/bannerimg/<?php echo $category_img; ?>" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0"><?php echo $dresscatname; ?></h5>
                </div>
            </div>
            <?php
                //$i=$i+1;
                }
                }            
            ?>
            
        </div>
    </div>
    <!-- Categories End -->