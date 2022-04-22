<?php
include("database/connection.php");
$sql = "Select * from logo ORDER BY logo_id DESC";
$result = $conn->query($sql);
?>
<!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <?php
                        if($result->num_rows>0) {
                        while ($row=$result->fetch_assoc()) {
                        $logoimg = $row['logoimg'];
                    ?>
                    <div class="vendor-item border p-4">
                        <img src="../admin/bannerimg/<?php echo $logoimg; ?>" alt="">
                    </div>
                    <?php 
                      }
                      }
                     $result->free();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->