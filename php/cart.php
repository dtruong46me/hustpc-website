<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUSTPC | Computers and IT Equipment</title>
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/imgs/hust-pc.png">
</head>
<body>
    <div id="main">
        <!-- BEGIN: Header -->
        <div id="header" style="background-color: #2c3e50;">
            <a href="index.php">
                <div class="logo" style="width: 1512px; display: flex; align-items: center; margin: auto; padding-top: 30px;">
                    <img src="../assets/imgs/logo-horizon.png" alt="" style="height: 120px; padding-left: 70px;">
                </div>
            </a>
            
            <div class="checkout__header">
                <p style="font-size: 56px; font-weight: 100px; text-align: center; color: #ffc107; text-transform: uppercase; padding: 4px;">Your cart</p>
                <!-- <p style="font-size: 17px; font-weight: 300; text-transform: uppercase; text-align: center; color: #ffc107;padding: 4px;">Home / Your cart</p> -->
                <div style="font-size: 17px; font-weight: 300; text-transform: uppercase; text-align: center; color: #ffc107;padding: 4px;">
                    <a href="index.php" style="display:inline-block; text-decoration: none; color: #ffc107">Home</a>
                    <span> / </span>
                    <a href="cart.php" style="display:inline-block; text-decoration: none; color: #ffc107">Your Cart</a>
                </div>
            </div>

            <div style="display: flex;">
                <div class="checkout__navi" style="display: flex; margin: auto; padding-top: 70px; padding-bottom: 90px;">
                    <div class="home" style="width: 108px;">
                        <div style="width: 108px; height: 108px; background-color: #ffc107; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-house" style="font-size: 58px; color: #2c3e50;"></i>
                        </div>
                        <p>Step 1 / 3</p>
                    </div>
                    <div class="line"></div>
                    <div class="cart" style="width: 108px;">
                        <div style="width: 108px; height: 108px; background-color: #ffc107; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-cart-shopping" style="font-size: 58px; color: #2c3e50;"></i>
                        </div>
                        <p>Step 2 / 3</p>
                    </div>
                    <div class="line"></div>
                    <div class="checkout" style="width: 108px;">
                        <div style="width: 108px; height: 108px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 4px solid #ffc107;">
                            <i class="fa-solid fa-money-check-dollar" style="font-size: 58px; color: #ffc107;"></i>
                        </div>
                        <p>Step 3 / 3</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Header -->


        <!-- BEGIN: Body -->
        <?php
        //session_start();
        session_start();
        include "config.php";

        // Kiểm tra xem giỏ hàng có tồn tại hay không
        if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            echo '<h3 style="font-size: 28px; color: #2c3e50;"></h3>';
        } else {
            // Redirect đến trang checkout.php khi nhấp vào nút "Proceed to checkout"
            if (isset($_POST['proceed_to_checkout'])) {
                header("Location: checkout.php");
                exit();
            }
        }

        if (isset($_GET['delete_item'])) {
            $product_id = $_GET['delete_item'];
            $key = array_search($product_id, array_column($_SESSION['cart'], 'product_id'));
        
            if ($key !== false) {
                // Xóa sản phẩm khỏi giỏ hàng
                unset($_SESSION['cart'][$key]);
                // Cập nhật lại giỏ hàng
                $_SESSION['cart'] = array_values($_SESSION['cart']);
            }
        
            // Chuyển hướng người dùng về trang cart.php để cập nhật giao diện
            header("Location: cart.php");
            exit();
        }

        // Tính tổng số lượng sản phẩm trong giỏ hàng
        $total_quantity = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $product) {
                $total_quantity += $product['quantity'];
            }
        }
        
        echo '<div id="body" style="background-color: white;">';
        echo '<div class="wrapper" style="padding-top: 70px; padding-bottom: 100px; display: flex; width: 1456px; justify-content: space-between; margin: auto;">';
        echo '<div class="items-list">';
        
        echo '<div class="items__header" style="height: 65px; background-color: #2c3e50; display: flex;">
                <div class="checkboxx"><input type="checkbox" class="checkbox"></div>
                <div class="products" style="color: white;">Product (' . $total_quantity . ' items)</div>
                <div class="classification" style="color: white;">Classification</div>
                <div class="price" style="color: white;">Price</div>
                <div class="quantity" style="color: white;">Quantity</div>
                <div class="money" style="color: white;">Amount of Money</div>
                <div class="delete" style="color: white;">Delete</div>
            </div>';

        // Kiểm tra xem giỏ hàng có tồn tại hay không
        if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            echo '<h3 style = "font-size: 28px; color: #2c3e50;">Your Cart is Empty!</h3>';
            echo '</div>';
            echo '<div class="go-to-checkout">
                    <div class="checkout__header" style="width: 360px; height: 65px; background-color: #2c3e50; display: flex; align-items: center; justify-content: center; color: white;">Subtotal</div>
                    <div class="checkout-body" style="width: 360px; background-color: #e4ebec; display: flex; justify-content: center;">
                        <div class="cart-total-wrapper" style="width: 332px; margin-top: 21px; margin-bottom: 23px;">
                            <div class="item-checkout subtotal">
                                <div>
                                    <p>Subtotal</p>
                                    <h3 style="font-size: 17px; font-weight: 600; color: #2c2c2c;">$ 0.00</h3>
                                </div>
                            </div>
                
                            <div class="item-checkout total-money">
                                <div>
                                    <p style="display: flex; align-items: center; padding-bottom: 8px;">Total money</p>
                                    <div>
                                        <h3 style="text-align: right; font-size: 24px; font-weight: 800; color: #2c2c2c; padding-top: 8px;">$ 0.00</h3>
                                        <p style="font-size: 12px; font-weight: 300; color: #2c2c2c;">(All taxes are included)</p>
                                    </div>
                                </div>
                            </div>
                
                            <button>Proceed to checkout</button>
                        </div>
                    </div>
                </div>';
            exit();
        }

        $total_money = 0;
        // Lặp qua từng sản phẩm trong giỏ hàng
        foreach ($_SESSION['cart'] as $product) {
            $product_id = $product['product_id'];
            $config_price = $product['config_price'];
            $product_name = $product['product_name'];
            $config_name = $product['config_name'];
            $quantity = $product['quantity'];

            // Hiển thị thông tin sản phẩm trong giỏ hàng
            echo '<div class="product-detail" data-product-id="' . $product_id . '" data-product-name="' . $product_name . '">';
            // echo '<div class="product-detail">';
            echo '<div class="checkboxx checkbox-item">';
            echo '<input type="checkbox" class="checkbox">';
            echo '</div>';
            
            echo '<div class="products products-item" style="justify-content: space-between;">';
            echo '<div class="image-product">';
            echo '<img src="../assets/imgs/product-imgs/' . $product_id . '/1.jpg" alt="">';
            echo '</div>';
            echo '<div class="prod-content" style="width: 212px;">';
            echo '<a href="product_detail.php?product_id=' . $product_id . '" style="text-decoration: none; color: #2c2c2c">';
            echo '<p>' . $product_name . '</p>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
            echo '<div class="classification cls-item" style="text-align: center;">' . $config_name,2 . '</div>';
            echo '<div class="price price-item">$ ' . number_format($config_price,2) . '</div>';
            echo '<div class="quantity qty-item">';
            echo '<button style="border-radius: 7px 0 0 7px;"><i class="fa-solid fa-minus"></i></button>';
            echo '<input type="text" value="' . $quantity . '">';
            echo '<button style="border-radius: 0 7px 7px 0;"><i class="fa-solid fa-plus"></i></button>';
            echo '</div>';
            echo '<div class="money money-item">$ ' . number_format(($config_price * $quantity),2) . '</div>';
            echo '<div class="delete delete-item">';
            echo '<a href="cart.php?delete_item=' . $product_id . '"><i class="fa-solid fa-trash"></i></a>';
            echo '</div>';
            echo '</div>';

            $total_money += ($config_price * $quantity);
        }
        echo '</div>';
        echo '<div class="go-to-checkout">
                <div class="checkout__header" style="width: 360px; height: 65px; background-color: #2c3e50; display: flex; align-items: center; justify-content: center; color: white;">Subtotal</div>
                <div class="checkout-body" style="width: 360px; background-color: #e4ebec; display: flex; justify-content: center;">
                    <div class="cart-total-wrapper" style="width: 332px; margin-top: 21px; margin-bottom: 23px;">
                        <div class="item-checkout subtotal">
                            <div>
                                <p>Subtotal</p>
                                <h3 style="font-size: 17px; font-weight: 600; color: #2c2c2c;">$ ' . number_format($total_money,2) . '</h3>
                            </div>
                        </div>
            
                        <div class="item-checkout total-money">
                            <div>
                                <p style="display: flex; align-items: center; padding-bottom: 8px;">Total money</p>
                                <div>
                                    <h3 style="text-align: right; font-size: 24px; font-weight: 800; color: #2c2c2c; padding-top: 8px;">$ ' . number_format(($total_money + 5.99),2) . '</h3>
                                    <p style="font-size: 12px; font-weight: 300; color: #2c2c2c;">(All taxes are included)</p>
                                </div>
                            </div>
                        </div>
            
                        <!-- <button>Proceed to checkout</button> -->
                        <!-- <div class="place-order-btn" style="display: flex; justify-content: right;"><button onclick="location.href=\'checkout.php\';">Proceed to checkout</button></div> -->';
                        echo '<div class="place-order-btn" style="display: flex; justify-content: right;">';
                        echo '<form action="" method="POST">';
                        echo '<button type="submit" name="proceed_to_checkout">Proceed to checkout</button>';
                        echo '</form>
                    </div>
                </div>
            </div>';
        echo '</div>';
        echo '</div>';
        ?>

        <!-- END: Body -->
        
        <!-- BEGIN: Footer -->
        <div id="footer" style="width: 100%; height: 366px; background-color: #2c3e50; position: relative;">
            <div class="footer-wrapper" style="width: 1380px; margin: auto; padding-top: 35px; display: flex; justify-content: space-between;">
                <div class="column1" style="width: 260px;">
                    <img src="../assets/imgs/hust-pc-logo.png" alt="" class="footer-logo" style="width: 118px;">
                    <form class="subcribe__area" style="padding-left: 10px;">
                        <h2 style="font-size: 18px; color: white; text-transform: uppercase; font-weight: 500; margin-top: 28px;">Subcribe now</h2>
                        <div class="subcribe__input" style="position: relative; width: 260px; height: 35px; border-radius: 7px; display: flex; background-color: #fff; border-radius: 7px; align-items: center; margin-top: 8px; margin-bottom: 12px;">
                            <i class="fa-regular fa-envelope" style="position: absolute; left: 14px;"></i>
                            <div class="input__breakline" style="width: 1px; height: 18px; background-color: rgba(44, 62, 80, 0.6); position: absolute; left: 46px;"></div>
                            <input type="text" placeholder="Enter your Email" style="border: none; position: absolute; left: 68px;">
                        </div>
                        <button type="submit" class="subcribe__btn" style="color: #2c2c2c; background-color: #ffc107; font-size: 13px; text-transform: uppercase; border-radius: 3.5px; width: 95px;height: 27px; border: none; font-weight: 700; cursor: pointer;">Subcribe</button>
                    </form>
                </div>

                <div class="column2" style="padding-top: 35px;">
                    <h1>Information</h1>
                    <div class="infor__breakline"></div>
                    <ul>
                        <li><div class="list__type"></div><a href="">About Us</a></li>
                        <li><div class="list__type"></div><a href="">More Search</a></li>
                        <li><div class="list__type"></div><a href="">Blogs</a></li>
                        <li><div class="list__type"></div><a href="">Events</a></li>
                    </ul>
                </div>

                <div class="column3" style="padding-top: 35px;">
                    <h1>Helpful Links</h1>
                    <div class="infor__breakline"></div>
                    <ul>
                        <li><div class="list__type"></div><a href="">Services</a></li>
                        <li><div class="list__type"></div><a href="">Supports</a></li>
                        <li><div class="list__type"></div><a href="">Terms & Conditions</a></li>
                        <li><div class="list__type"></div><a href="">Privacy Policy</a></li>
                        <li><div class="list__type"></div><a href="">FAQs</a></li>
                    </ul>
                </div>
    
                <div class="column4" style="padding-top: 35px;">
                    <h1>Our Services</h1>
                    <div class="infor__breakline""></div>
                    <ul>
                        <li><div class="list__type"></div><a href="">Brands List</a></li>
                        <li><div class="list__type"></div><a href="">Orders</a></li>
                        <li><div class="list__type"></div><a href="">Return & Exchange</a></li>
                        <li><div class="list__type"></div><a href="">Products List</a></li>
                        <li><div class="list__type"></div><a href="">Blogs</a></li>
                    </ul>
                </div>
    
                <div class="column5" style="padding-top: 35px; padding-right: 10px;">
                    <h1>Contact Us</h1>
                    <div class="infor__breakline""></div>
                    <div class="contact__phone">
                        <i class="fa-sharp fa-solid fa-phone-volume"></i>
                        (+84) 123 456 78 99
                    </div>
                    <div class="contact__email">
                        <i class="fa-solid fa-envelope"></i>
                        hustpc.company@gmail.com
                    </div>
                    <ul style="display: flex; margin-top: 30px; width: 202px; justify-content: space-between;">
                        <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-skype"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright" style="padding-top: 28px; display: flex; justify-content: center;">
                <div class="copyright__container">
                    <div class="copyright__line" style="width: 1406px; height: 1px; background-color: #fff; display: flex; margin: auto;"></div>
                    <div class="copyright__content" style="align-items: center; color: white; margin-top: 15px; display: flex; margin: auto; justify-content: center; padding-top: 10px;">
                        <i class="fa-regular fa-copyright"></i>
                        <h3 style="font-size: 13px; font-weight: 400; margin-left: 9px;">Copyright | 2023 | All Right Reserved</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Footer -->
    </div>
</body>
</html>