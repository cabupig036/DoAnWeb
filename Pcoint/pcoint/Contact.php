<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Contact</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- css about -->

</head>
<!-- body -->

<body class="main-layout">
   <!-- header_banner -->

   <?php
   include 'header_banner.php';
   ?>
   <!-- end haeder_banner -->

   <!-- request -->
   <div id="contact" class="request">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Members list</h2>
                  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>
                     incididunt ut labore et dolore magna</span>
               </div>
            </div>
         </div>
         <div class="row">
            <?php

            $con = mysqli_connect("localhost", "root", "", "registersystem");
            // Check connection
            if (mysqli_connect_errno()) {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $sql = "SELECT * FROM `users`";

            $result = mysqli_query($con, $sql);

            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($data as $r) {
            ?>


               <div class="col-4 align-middle">
                  <div class="mane_img">
                     <div class="container_ov ">
                        <figure> <img src="../../Admin/images/user/<?php echo $r["img"] ?>" alt="#" class="image_ov" /></figure>
                        <div class="overlay">
                           <div class="text_ov"><?php echo $r["description"] ?></div>
                        </div>
                     </div>
                  </div>
                  <div class="text_name"><?php echo $r['username'] ?></div>
                  <button class="btn_ctn"> <a href="<?php echo $r["info"] ?>" class="btn_ctn_fb">info</a></button>
               </div>
            <?php } ?>
         </div>
      </div>
   </div>

   </div>
   </div>
   </div>
   <!-- end request -->
   <!-- two_box section -->
   <div class="two_box">
      <div class="container-fluid">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="two_box_img">
                  <figure><img src="images/leptop.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-6">
               <div class="two_box_img">
                  <h2><span class="offer">15% </span>0ffer everyday</h2>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end two_box section -->
   <!-- testimonial -->
   <div class="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Testimonial</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="test_box">
                                       <h3>Michl ro</h3>
                                       <p><i class="padd_rightt0"><img src="images/te1.png" alt="#" /></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <i class="padd_leftt0"><img src="images/te2.png" alt="#" /></i> <br>form, by injected humour, or randomised words which don't look even slightly believable</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="test_box">
                                       <h3>Michl ro</h3>
                                       <p><i class="padd_rightt0"><img src="images/te1.png" alt="#" /></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <i class="padd_leftt0"><img src="images/te2.png" alt="#" /></i> <br>form, by injected humour, or randomised words which don't look even slightly believable</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="test_box">
                                       <h3>Michl ro</h3>
                                       <p><i class="padd_rightt0"><img src="images/te1.png" alt="#" /></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <i class="padd_leftt0"><img src="images/te2.png" alt="#" /></i> <br>form, by injected humour, or randomised words which don't look even slightly believable</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end testimonial -->
   <!--  footer -->
   <footer>
      <?php
      include 'footer.php';
      ?>
      <!-- end footer -->
      <!-- Javascript files-->

</body>

</html>