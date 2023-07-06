<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUSTPC | Computers and IT Equipment</title>
    <link rel="stylesheet" href="../css/product_detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Star Icon -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/imgs/hust-pc.png">
</head>
<body>
    <div id="main">
        <!-- BEGIN: Header -->
        <div id="header" style="width: 100%; height: 211px; position: relative; background-color: #2c3e50;">
            <div class="head-header" style="display: flex; width: 1440px; justify-content: space-between; margin: auto; padding-top: 20px;">
                <a href="" class="logo-img"><img src="../assets/imgs/hust-pc-logo.png" alt="" style="width: 142px; height: auto;"></a>

                <div class="header-function">
                    <!-- header-search -->
                    <div class="header-search">
                        <form class="search-form" style="display: flex; height: 54px; align-items: center;">
                            <div class="select-wrapper">
                                <select name="scat_id">
                                    <option value="">Select Categories</option> 
                                    <?php
                                    // Kết nối đến CSDL
                                    include "config.php";

                                    // Truy vấn danh sách danh mục
                                    $sql = "SELECT * FROM categories";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option>" . $row['category_name'] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No categories found</option>";
                                    }

                                    $conn->close();
                                    ?>

                                </select>
                            </div>
                            <div class="search-form-container">
                                <input class="text_search" placeholder="Enter your search...">
                                <button type="submit" class="search-btn" style="display: flex; align-items: center;">
                                    <!-- <i class="ti-search"></i>  -->
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- header-support -->
                    <div class="header-support">
                        <a href="">
                            <i class="fa-solid fa-headset" style="font-size: 36px;"></i>
                            <div class="support-detail">
                                <h2>Support</h2>
                                <h3>(+84) 1900 0586</h3>
                            </div>
                        </a>
                    </div>

                    <!-- header-cart -->
                    <?php
                    include "config.php";

                    // Truy vấn để lấy thông tin giỏ hàng
                    $cart_query = "SELECT COUNT(*) AS num_items, SUM(price) AS total_price FROM CartItems";
                    $cart_result = $conn->query($cart_query);
                    $cart_data = $cart_result->fetch_assoc();
                    $num_items = $cart_data["num_items"];
                    $total_price = $cart_data["total_price"];

                    // Hiển thị giỏ hàng
                    echo '<div class="header-cart">';
                    echo '<a href="">';
                    echo '<div class="cart-notification" style="display: flex; align-items: center; position: relative; width: 42px; height: 36px;">';
                    echo '<i class="fa-solid fa-cart-shopping" style="font-size: 30px; position: absolute; left: 0; bottom: 0;"></i>';

                    if ($num_items > 0) {
                        echo '<div class="notifi-nums">' . $num_items . '</div>';
                    }

                    echo '</div>';
                    echo '<h2 style="margin-left: 15px; font-size: 21px; font-weight: 800; letter-spacing: -0.03em;">$ ' . number_format($total_price, 2) . '</h2>';
                    echo '</a>';
                    echo '</div>';

                    $conn->close();
                    ?>

                    <!-- <div class="header-cart" >
                        <a href="">
                            <div class="cart-notification" style="display: flex; align-items: center; position: relative; width: 42px; height: 36px;">
                                <i class="fa-solid fa-cart-shopping" style="font-size: 30px; position: absolute; left: 0; bottom: 0;"></i>
                                <div class="notifi-nums">12</div>
                            </div>
                            <h2 style="margin-left: 15px; font-size: 21px; font-weight: 800; letter-spacing: -0.03em;">$ 120.53</h2>
                        </a>
                    </div> -->
                </div>
            </div>

            <ul class="nav" style="display: flex; list-style-type: none; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);">
                <li><a href="" class="all-categories">
                    <i class="fa-solid fa-bars" style="margin-right: 12px; font-size: 18px;"></i>
                    <h3>All Categories</h3>
                </a></li>
                <li><a href="">Build PC</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">Best Seller</a></li>
                <li><a href="">Blogs</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
            </ul>
        </div>
        <!-- END: Header -->


        <!-- BEGIN: Body -->
        <div id="product-detail-body" style="width: 100%; background-color: white;">
            <div class="product__nav">
                <h1 style="padding-top: 100px; text-transform: uppercase; font-size: 35px; font-weight: 500; text-align: center;">TV Collection</h1>
                <h3 style="padding-top: 20px; font-size: 16px; font-weight: 300; text-transform: uppercase; letter-spacing: 0.2em; text-align: center;">Home / Products / </h3>
            </div>

            <!-- ----Product Information---- -->
            <div class="product_info">
                <!-- ----Product Image---- -->
                <div class="product_img" style="width: 813px; height:680px;">
                    <p style="margin-bottom: 30px; float: left; width: 176px; height:133px;background-color:#2C3E50;"></p>
                    <p style="margin-bottom: 30px;float: right; width: 609px; height:621px;background-color:#2C3E50;"></p>
                    <p style="margin-bottom: 30px;clear: left; width: 176px; height:133px;background-color:#7C8D9E;"></p>
                    <p style="margin-bottom: 30px;clear: left; width: 176px; height:133px;background-color:#7C8D9E;"></p>
                    <p style="margin-bottom: 30px;clear: left; width: 176px; height:133px;background-color:#7C8D9E;"></p>
                </div>

                <!-- ----Product Overview---- -->
                <div class="product_overview" style="width: 703px; height:628px;">
                    <div class="available" style="transform: translateY(-7px); width: 204px; height:81px;">
                        <p>
                            <span>Stand</span>: LG</p>
                        <p>
                            <span>Model</span>: OLED42C2PSA</p>
                        <p>
                            <span>Availability</span>: Only 2 in Stock</p>
                    </div>

                    <div class="product_title" style="width: 702px; height:68px; font-size: 29px; font-weight:500;">
                        <p>LG C2 42 (106CM) 4K SMART OLED EVO TV |</p>
                        <p>WEBOS | CINEMA HDR</p>
                    </div>

                    <div class="rating" style="width:200px; height:27px; justify-content: space-between; padding-top: 20px;">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>

                    <div class="product_feature" style="padding-top: 30px; width:500px; height:142px;">
                        <p>α9 Gen5 AI Processor with AI Picture Pro & AI 4K Upscaling</p>
                        <p>Pixel Dimming, Perfect Black, 100% Color Fidelity & Color Volume</p>
                        <p>Hands-free Voice Control, Always Ready</p>
                        <p>Dolby Vision IQ with Precision Detail, Dolby Atmos, Filmmaker Mode</p>
                        <p>Eye Comfort Display: Low-Blue Light, Flicker-Free</p>
                    </div>

                    <div id="spec">
                        <div class="A">
                            <p style="transform: translateY(90%);">106 cm (42)</p>
                        </div>
                        <div class="B">
                            <p style="transform: translateY(90%);">121 cm (48)</p>
                        </div>

                        <div class="C">
                            <p style="transform: translateY(90%);">139 cm (55)</p>
                        </div>
                        <div class="D">
                            <p style="transform: translateY(90%);">164 cm (65)</p>
                        </div>
                        <div class="E">
                            <p style="transform: translateY(90%);">196 cm (77)</p>
                        </div>
                        <div class="G">
                            <p style="transform: translateY(90%);">210 cm (83)</p>
                        </div>
                    </div>

                    <div class="line_slash" style="clear: left; width:586px; height:1px; background-color: black; transform: translateY(20px);">
                    </div>

                    <div style="clear: left; font-size:14px ; transform: translateY(60px);">USD(incl. of all taxes)
                    </div>

                    <div class="prices" style="width:400px; height:34px; transform: translateY(70px);">
                        <span style="margin-right: 30px; font-size:32px; font-weight:600;">$600.72</span>
                        <span style="font-size:32px; color: #A3A3A3;">$800.72</span>
                        <span style="width:132px; height:1px; background-color:#A3A3A3;"></span>
                    </div>
                </div>

            </div>
            

            <!-- ----Quantity Order and Buy now----- -->
            <div class="qty_ordered">
                <div class="click-button">
                    <div class="qty-button">
                        <button style="border-radius: 7px 0 0 7px;">
                            <i class="fa-solid fa-minus"></i>
                        </button>
                        <input type="text" value="1">
                        <button style="border-radius: 0 7px 7px 0;">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>

                    <div class="buy-button">
                        <p style="transform: translateY(15px);">Buy now</p>
                    </div>

                    <div class="add-to-cart">
                        <p style="transform: translateY(15px);">Add to cart</p>
                    </div>
                </div>
            </div>

            <!-- ----Product Description---- -->
            <div class="product_description">
                <div class="des_nav_bar">
                    <div style="cursor: pointer; border-bottom: 1px solid black;">Description</div>
                    <div style="cursor: pointer;"> Specification</div>
                    <div style="cursor: pointer;">Reviews</div>
                </div>
                <div class="des_content">
                    <div class="first-paragraph">
                        <p>The LG C2 42 (106cm) 4K Smart OLED evo TV is the best all-around OLED TV we've tested. Although all OLEDs deliver similar fantastic </p> 
                        <p> picture quality, this one stands out for its value because it has many gaming-oriented features that are great for gamers.</p>
                    </div>
                    <div class="second-paragraph" style="padding-top: 30px;">
                        <p>
                        *Only 65G2 is shown in the image for example purposes. All 2022 LG OLED models feature eco-friendly packaging.
                        </p>
                        <p>
                        **65C2 Stand model is at a minimum 39% lighter than the C1 series.
                        </p>
                        <p>
                        ***The 'Reducing CO2' footprint label applies to 65C2 only. All other C2 models feature a 'CO2 Measured' label.
                        </p>
                        <p>
                        ****UL ECV certification based on TV frame and back cover. Percentage of recycled content varies by model and size.
                        </p>
                    </div>

                    <div style="cursor: pointer; padding-top: 10px; font-weight: 600;">Show more</div>
                </div>
            </div>

            <!-- ----Related Products---- -->
            <div class="related">
                <p id="related_title" style="text-align: center; font-size:35px; font-weight:500;">
                    Related Products
                </p>

                <!-- ----The slider----- -->
                <div class="related_products">
                    <div class="prod">
                        <div style="width:292px; height:367px; background-color: #F7F7F7; margin:auto; transform: translateY(20px);">
                            <div style="width: 63px; height: 21px; background-color: black; text-align: center; color: white; border-radius:7px; transform: translate(10px,30px);">
                                -30%
                            </div>
                        </div>

                        <div style="background-color: #F7F7F7; border-radius: 7px; color: black; text-align: center; width: 74px; height: 35px;font-weight: 700; transform: translate(30px,40px);">
                            <p style="transform: translateY(8px);">LENOVO</p>
                        </div>

                        <div style="margin: auto; font-size: 16px; font-weight: 700; width: 294px; height:38px; transform: translateY(70px);">
                            Lenovo IdeaPad 110-1515K Laptop - 15.6’ Intel Core i3 - 1TB HĐ - 4GB RAM...
                        </div>

                        <div style="transform: translate(30px, 90px);">
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span style="font-weight: 700;">(49)</span>
                        </div>
                        
                    </div>
                    <div class="prod">
                        <div style="width:292px; height:367px; background-color: #F7F7F7; margin:auto; transform: translateY(20px);">
                            <div style="width: 63px; height: 21px; background-color: black; text-align: center; color: white; border-radius:7px; transform: translate(10px,30px);">
                                -30%
                            </div>
                        </div>

                        <div style="background-color: #F7F7F7; border-radius: 7px; color: black; text-align: center; width: 74px; height: 35px;font-weight: 700; transform: translate(30px,40px);">
                            <p style="transform: translateY(8px);">LENOVO</p>
                        </div>

                        <div style="margin: auto; font-size: 16px; font-weight: 700; width: 294px; height:38px; transform: translateY(70px);">
                            Lenovo IdeaPad 110-1515K Laptop - 15.6’ Intel Core i3 - 1TB HĐ - 4GB RAM...
                        </div>

                        <div style="transform: translate(30px, 90px);">
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span style="font-weight: 700;">(49)</span>
                        </div>
                    </div>
                    <div class="prod">
                        <div style="width:292px; height:367px; background-color: #F7F7F7; margin:auto; transform: translateY(20px);">
                            <div style="width: 63px; height: 21px; background-color: black; text-align: center; color: white; border-radius:7px; transform: translate(10px,30px);">
                                -30%
                            </div>
                        </div>

                        <div style="background-color: #F7F7F7; border-radius: 7px; color: black; text-align: center; width: 74px; height: 35px;font-weight: 700; transform: translate(30px,40px);">
                            <p style="transform: translateY(8px);">LENOVO</p>
                        </div>

                        <div style="margin: auto; font-size: 16px; font-weight: 700; width: 294px; height:38px; transform: translateY(70px);">
                            Lenovo IdeaPad 110-1515K Laptop - 15.6’ Intel Core i3 - 1TB HĐ - 4GB RAM...
                        </div>

                        <div style="transform: translate(30px, 90px);">
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span style="font-weight: 700;">(49)</span>
                        </div>        

                    </div>
                    <div class="prod">
                        <div style="width:292px; height:367px; background-color: #F7F7F7; margin:auto; transform: translateY(20px);">
                            <div style="width: 63px; height: 21px; background-color: black; text-align: center; color: white; border-radius:7px; transform: translate(10px,30px);">
                                -30%
                            </div>
                        </div>

                        <div style="background-color: #F7F7F7; border-radius: 7px; color: black; text-align: center; width: 74px; height: 35px;font-weight: 700; transform: translate(30px,40px);">
                            <p style="transform: translateY(8px);">LENOVO</p>
                        </div>

                        <div style="margin: auto; font-size: 16px; font-weight: 700; width: 294px; height:38px; transform: translateY(70px);">
                            Lenovo IdeaPad 110-1515K Laptop - 15.6’ Intel Core i3 - 1TB HĐ - 4GB RAM...
                        </div>

                        <div style="transform: translate(30px, 90px);">
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span class="fa fa-star smaller"></span>
                            <span style="font-weight: 700;">(49)</span>
                        </div>
                    </div>
                </div>

                <div class="slide_dot">
                    <input id="slide-dot-1" type="radio" name="slides" checked>
                    <input id="slide-dot-1" type="radio" name="slides" checked>
                    <input id="slide-dot-1" type="radio" name="slides" checked>
                    <input id="slide-dot-1" type="radio" name="slides" checked>
                </div>
            </div>

            <!-- ----Reviews---- -->
            <div class="review">
                <p style="transform: translate(70px, 40px); color: white; font-size:35px; font-weight:700;">REVIEWS
                </p>

                <div class="rate" style="width: 378px; height:88px; display: flex; justify-content: space-between; transform: translate(100px, 80px);">
                    <div class="avg-rating" style="width: 123px; height: 88px; background-color: #FFC107; font-size: 42px; font-weight: 700; text-align: center; ">
                        <p style="transform: translateY(19px);">4.8</p>
                    </div>

                    <div class="overall-rating" style="transform: translateY(10px);">
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>

                        <div style="padding-top: 10px; text-align: center; font-size: 21px; color: white;">58 ratings
                        </div>
                    </div>
                </div>

                <div class="detail-rating" style="width: 600px; transform: translateY(150px);">
                    <div class="rate-line" style="width: 610px;">
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>

                        <div style="width: 211px; height: 17px; background-color: white; border-radius:9px;">
                            <div style="width: 176px; height: 17px; background-color:#FFC107; border-radius: 9px;"></div>
                        </div>
                        <div style="font-size: 21px; color: white;">49 ratings
                        </div>
                    </div>

                    <div class="rate-line">
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </div>

                        <div style="width: 211px; height: 17px; background-color: white; border-radius:9px;">
                            <div style="width: 25px; height: 17px; background-color:#FFC107; border-radius: 9px;"></div>
                        </div>

                        <div style="font-size: 21px; color: white;"> 6 ratings
                        </div>
                    </div>

                    <div class="rate-line">
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </div>

                        <div style="width: 211px; height: 17px; background-color: white; border-radius:9px;">
                            <div style="width: 19px; height: 17px; background-color:#FFC107; border-radius: 9px;"></div>
                        </div>

                        <div style="font-size: 21px; color: white;"> 2 ratings
                        </div>
                    </div>

                    <div class="rate-line">
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </div>

                        <div style="width: 211px; height: 17px; background-color: white; border-radius:9px;">
                            <div style="width: 18px; height: 17px; background-color:#FFC107; border-radius: 9px;"></div>
                        </div>

                        <div style="font-size: 21px; color: white;"> 1 ratings
                        </div>
                    </div>

                    <div class="rate-line">
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </div>

                        <div style="width: 211px; height: 17px; background-color: white; border-radius:9px;">
                        </div>

                        <div style="font-size: 21px; color: white;">
                        0 ratings
                        </div>
                    </div>
                </div>

                <div class="vertical-line" style="width: 417px; height:1px; background-color: white; margin: auto; transform: translate(-100px,-70px) rotate(90deg);">
                </div>

                <div class="comment">
                    <div class="first-comment">
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>

                        <p>
                            Very good stuff.
                        </p>

                        <div class="horizontal-line"></div>
                    </div>

                    <div class="second-comment" style="padding-top:20px;">
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>

                        <p>
                            Already use and feel really good.
                        </p>

                        <div class="horizontal-line"></div>
                    </div>
                    <div class="third-comment" style="padding-top:20px;">
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </div>

                        <p>
                            Feeling good to use but the price is a bit high. 
                        </p>

                        <div style="padding-top: 20px; color:#FFC107; cursor: pointer;">
                        Click for more reviews
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
                        <button type="submit" class="subcribe__btn" style="color: #2c2c2c; background-color: #ffc107; font-size: 13px; text-transform: uppercase; border-radius: 3.5px; width: 95px;height: 27px; border: none; font-weight: 700;">Subcribe</button>
                    </form>
                </div>

                <div class="column2" style="padding-top: 35px;">
                    <h1>Information</h1>
                    <div class="infor__breakline""></div>
                    <ul>
                        <li><div class="list__type"></div><a href="">About Us</a></li>
                        <li><div class="list__type"></div><a href="">More Search</a></li>
                        <li><div class="list__type"></div><a href="">Blogs</a></li>
                        <li><div class="list__type"></div><a href="">Events</a></li>
                    </ul>
                </div>

                <div class="column3" style="padding-top: 35px;">
                    <h1>Helpful Links</h1>
                    <div class="infor__breakline""></div>
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
        </div> -->
        <!-- END: Footer
    </div>
</body>
</html>