<?php
include("database/connection.php");
$sql = "Select * from banner ORDER BY banner_id DESC";
$result = $conn->query($sql);
?>

<div id="header-carousel" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
        <?php
          if($result->num_rows>0) {
            $i=0;
            while ($row=$result->fetch_assoc()) {
            $banner_id = $row['banner_id'];
            $bannertext = $row['bannertext'];
            $bannerhead = $row['bannerhead'];
            $bannerimg = $row['bannerimg'];
        ?>    
        
        <div class="carousel-item <?php if($i==0){ echo 'active';} ?>" style="height: 410px;">
            <img class="img-fluid" src="../admin/bannerimg/<?php echo $bannerimg; ?>" alt="Image" />
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3"><?php echo $bannertext; ?></h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4"><?php echo $bannerhead; ?></h3>
                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
    <?php
    $i=$i+1;
    }
    }            
    ?>      
    </div>

    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
