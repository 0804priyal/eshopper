<?php 
	include("header_card.php");
    include("database/connection.php");   

?>

		</div>
      </div>
    </div>

<!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    	<?php                        
                        if(isset($_SESSION['id'])) {
                            $user_id=$_SESSION['id'];
                            $sql = "SELECT * from add_card WHERE user_id = $user_id";
                            $result = $conn->query($sql);                            
                          if($result->num_rows>0) {
                            while ($row=$result->fetch_assoc()) {
                            $card_id=$row['card_id'];
                            $productname = $row['product_name'];
                            $productimg = $row['product_img'];
                            $offerprice = $row['price'];
                            $quantity = $row['quantity'];
                            $total = $row['price'];                                          
                        	
                        ?>
                        <tr>
                            <td class="align-middle"><img src="../admin/bannerimg/<?php echo $productimg; ?>" alt="" style="width: 50px;"><?php echo $productname; ?></td>
                            <td class="align-middle">$ <?php echo $offerprice; ?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                   

                                    <input type="number" id="card_id<?php echo $card_id; ?>" class="form-control" min="1" max="100" step="1" name="quantity" value="1" />

                                    
                                </div>
                            </td>
                            <td class="align-middle">$ <?php echo $total; ?></span></p></td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <?php 
                        	}
                           }
                          }  	
                        ?> 
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">$160</h5>
                        </div>
                        <a href="checkout.php" class="btn btn-block btn-primary my-3 proceed_to_checkout">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->
   
    
<?php
	include("footer.php");
?>        