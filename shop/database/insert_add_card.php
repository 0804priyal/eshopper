<?php
session_start();
include("connection.php");
                        if(isset($_GET['product_id'])) {
                            $product_id=$_GET['product_id'];
                            $user_id = $_SESSION['id'];

                            $sql = "SELECT * from products WHERE product_id = $product_id";
                            $result = $conn->query($sql);
                            
                          if($result->num_rows>0) {
                            $i=0;
                            while ($row=$result->fetch_assoc()) {                            
                            $product_id=$_GET['product_id'];
                            $productname = $row['productname'];
                            $productimg = $row['productimg'];
                            $shortdescription = $row['shortdescription'];
                            $size = $row['size'];
                            $color = $row['color'];
                            $productprice = $row['productprice'];
                            $offerprice = $row['offerprice'];
                            $fulldescription = $row['fulldescription'];
                            $information = $row['information'];
                            $quantity = 1;

                            $insertQuery = "INSERT INTO add_card set user_id = '".$user_id."', product_id = '".$product_id."', product_name = '".$productname."', product_img = '".$productimg."', price = '".$offerprice."', quantity = '".$quantity."', total = '".$offerprice."'";
                            
                            $checkProductId = "SELECT * FROM `add_card` WHERE product_id='".$product_id."'";
                            
                            $addCardValue = mysqli_query($conn, $checkProductId);
                            $rowcount = mysqli_num_rows($addCardValue);

                            if($rowcount==0) {
                              $q = mysqli_query($conn,$insertQuery);
                            	header("location: ../add_card.php?x=recorinsert");
                            } else {
                              $insertQuery = "UPDATE add_card set user_id = '".$user_id."', product_name = '".$productname."', product_img = '".$productimg."', price = '".$offerprice."', quantity = '".$quantity."', total = '".$offerprice."' WHERE product_id = '".$product_id."'";
                            	header("location: ../add_card.php?=recordupdated");
                            }                   
                        	}
                           }
                         }
                        ?>