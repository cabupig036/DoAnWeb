<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
<div class="main ">

<<<<<<< Updated upstream

<body class="main-layout">
<?php
      include 'header_banner.php';
      ?>
=======
<?php
    // include 'config.php';
    $conn = mysqli_connect('localhost','root','','biding') or die('Error connecting to mysql: '. mysqli_error());
    mysqli_set_charset($conn,"utf8");
    $sql = "SELECT * FROM `product`";
    $products = mysqli_query($conn, $sql);
?>

<header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="header">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="./Homepage.php"> HomePage </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="./Product.php" style="color:gray;">Product</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="./About.php" style="color:gray;">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="./Contact.php" style="color:gray;">Contact us</a>
                                 </li>
                              </ul>
                              <div class="sign_btn"><a href="/login-form-v1/Login_v1/Login.php">Sign in</a></div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1>Computer and <br>laptop shop</h1>
                           <strong>Free Multipurpose Responsive</strong>
                           <span>Landing Page 2019</span>
                           <a href="#">Buy Now</a>
                        </div>
                     </div>
                     <div class="col-md-7 padding_right1">
                        <div class="text-img">
                           <figure><img src="images/top_img.png" alt="#"/></figure>
                           <h3>01</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
>>>>>>> Stashed changes
      <!-- end banner -->

<div class="app__container">
    <div class="grid wide">
        <div class="row">
            <div class="col l-2 m-0 c-0">
                <nav class="category">
                    <h3 class="category__heading" style="margin-top:16px"><i class="category__heading-icon fas fa-list-ul"></i>Danh Mục</h3>
                    <ul class="category-list">
                        <li class="category-item category-item--active">
                            <a href="#" class="category-item__link">MACBOOK</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">LAPTOP ASUS</a>
                        </li>
                        <li class="category-item">
                            <a href="#" class="category-item__link">LAPTOP DELL</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col l-10 m-12 c-12">
                <div class="home-filter hide-on-mobile-tablet">
                    <span class="home-filter__label">Sắp xếp theo</span>
                    <div class="home-filter__wrap">
                        <div class="select-input">
                            <div class="select-input__label">Giá</div>
                            <i class="select-input__icon fas fa-chevron-down"></i>
                            <ul class="select-input__list">
                                <li class="select-input__item">
                                    <a href="" class="select-input__link">Giá: Thấp đến Cao</a>
                                </li>
                                <li class="select-input__item">
                                    <a href="" class="select-input__link">Giá:Cao đến Thấp</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="home-product">
                    <div class="row">

                    <?php foreach ($products as $product) { ?>
                        <div class="col l-2-4 m-4 c-6" style="margin-top: 15px;">
                            <a href="#" class="home-product-item">
                                <img  src="../../Admin/images/Product/<?php echo $product['image'] ?>" alt="" class="home-product-item-img">
                                <div class="home-product-item-info-wrap">
                                    <h2 class="home-product-item-name" style="font-size:16px"><?php echo $product['product_name'] ?></h2>
                                    <div class="home-product-item-price">
                                        <div class="home-product-item-price-current">Giá: <?php echo $product['gia']?>đ</div>
                                    </div>
                                </div>
                            </a>
                        </div> <?php } ?>
                       
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!--  footer -->
<footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="cont">
                        <h3> <strong class="multi"> Free Multipurpose</strong><br>
                           Responsive Landing Page 2019
                        </h3>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="cont_call">
                        <h3> <strong class="multi"> Call Now</strong><br>
                           (+1) 12345667890
                        </h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->

</div>
</body>
</html>