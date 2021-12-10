<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About PCOINT</title>
    <link rel="icon" href="https://themify.me/wp-content/themes/themify-v32/favicon.png" type="image/gif" sizes="16x16">

    <!-- link => tab -->
    <link rel="stylesheet" href="../../Pcoint/pcoint/css/AE_About.css">
    <link rel="stylesheet" href="./js/AE_About.js">
    <link rel="stylesheet" href="./fonts/themify-icons/themify-icons.css">

    
</head>

<body>
    <div id="main">
<<<<<<< Updated upstream
      
 <!-- header_banner -->
   
 <?php
      include 'header_banner.php';
      ?>
   <!-- end haeder_banner -->
=======
    <?php
    // include 'config.php';
    $conn = mysqli_connect('localhost','root','','biding') or die('Error connecting to mysql: '. mysqli_error());
    mysqli_set_charset($conn,"utf8");
    $sql = "SELECT * FROM `post`";
    $posts = mysqli_query($conn, $sql);
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
                                    <a class="nav-link"  href="./Homepage.php"> HomePage </a>
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
                           <h1>Pcoint MoG <br>Zen 3</h1>
                           <strong style="color: #1FD793; font-weight:bold; ">799.99$</strong>
                           <strong style="text-decoration:line-through; font-size:16px"> 1,099.99 $</strong>
                           <span>Sale Off 30%</span>
                           <a href="./ProductDetail.php">Buy Now</a>
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
      <!-- end banner -->
>>>>>>> Stashed changes


        <div id="content">
            <!-- About section -->
            <div id="band" class="content-section">
                <h2 class="section-heading">ABOUT US</h2>
                <p class="section-sub-heading">One Of The Best</p>
                <p class="about-text">PCOINT was founded in 2020 in SaiGon, VietNam. After many years of trying to try 
                    the store model inside the store but failed. Realizing that it was necessary to improve the retail 
                    display of the company's products, in 2021, we began an effort to reform the retail program to improve 
                    relationships with consumers.<br>
                    The media initially speculated that Pcoint would flop, but their stores were very successful, outperforming 
                    competing sales of nearby stores and within three years reaching 1 billion. dollars in annual sales, becoming 
                    the fastest retailer in history to do it. Over the years, Pcoint has expanded the number of retail locations and 
                    their geographic reach, with 506 stores across 25 countries worldwide as of 1/2021. High product sales have put Pcoint 
                    in the ranks. group of leading retailers, with sales of more than 16 billion US dollars globally in 11/2021.
                </p>
                <div class="members-list">
                    <div class="member-item">
                        <p class="member-name">Choose fast, free delivery courier delivery.</p>
                        <img src="./images/AE_About-img/delivery.jpg" alt="ảnh band" class="img">
                    </div>
                    <div class="member-item">
                        <p class="member-name">Convenient options for your schedule.</p>
                        <img src="./images/AE_About-img/schedul.jpg" alt="ảnh band" class="img">
                    </div>
                    <div class="member-item">
                        <p class="member-name">Pay in full or pay over time. Your choice.</p>
                        <img src="./images/AE_About-img/payment.jpg" alt="ảnh band" class="img">
                    </div>
                    <!-- mẹo dùng thẻ float -->
                    <div class="clean"></div>
                </div>
            </div>
            <!-- Tour section -->
            <div id="tour" class="tour-section">
                <div class="content-section">
                    <h2 class="section-heading ">PCOINT STORY</h2>
                    <p class="section-sub-heading ">Our Journey. Look</p>

                
                    <!-- place list -->
                    <div class="place-list">
                    <?php foreach ($posts as $post) { ?>
                        <div class="place-item s-col-ful mt-16">
                            <img  src="../../Admin/images/PostList/<?php echo $post['image'] ?>" class="place-img">
                            <div class="place-body">
                                <p class="place-text"><?php echo $post['post_content'] ?></p>
                                <a class="place-btn js-buy-ticket s-full-width">SEE MORE</a>
                            </div>
                        </div>
                    <?php } ?>

                        

                        <div class="clean"></div>
                    </div>
                </div>
            </div>

          
            </div>
            <div class="map-section">
                <!-- <img src="./images/AE_About-img/thumb2.jpg" alt="Map" class="map-img"> -->
                <img src="./images/AE_About-img/RtIR1.jpg" alt="Map" class="map-img">

            </div>


           
            <footer>
<<<<<<< Updated upstream
     <?php include'footer.php';?>
=======
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
                        <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> PCOINT</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
>>>>>>> Stashed changes
      </footer>
            <!-- Buy Tickets -->
            <div class="modal js-modal">
                <div class="modal-container js-modal-container">
                    <div class="modal-close js-modal-close">
                        <i class="ti-close"></i>
                    </div>

                    <header class="model-header">
                        <i style="margin-right: 10px; "class="ti-wordpress"></i>
                        STORY
                    </header>

                    <div class="modal-body">
                        <!-- <img  src="../../Admin/images/CCapture-(2)_edited.jpg" alt="" class="modal-img"> -->
                        <p>Máy tính xách tay hay máy vi tính xách tay (Tiếng Anh: laptop computer hay laptop PC) là một chiếc máy tính cá nhân nhỏ gọn có thể mang xách được. ... Để sử dụng máy tính người sử dụng sẽ mở tách hai phần trên dưới của máy. Laptop khi không dùng đến sẽ được gấp lại, và do đó nó thích hợp cho việc sử dụng khi di chuyển.</p>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <!-- <button class="close js-modal-close">Close</button> -->
                        <p class="modal-help" style="margin-left:15px;">Need <a href="#">help?</a></p>
                    </div>
                    <div class="clean"></div>
                </div>
            </div>
        </div>

        <!-- Javascript buy tickets-->
         <script>
            const buyBtns = document.querySelectorAll('.js-buy-ticket')
            const modalOpen = document.querySelector('.js-modal')
            const modalCloses = document.querySelectorAll('.js-modal-close')
            const modalContainer = document.querySelector('.js-modal-container')


            //Hàm show modal mua vé (thêm class open của modal)
            function showBuyTickets() {
                // alert("SHOW") 
                modalOpen.classList.add('open')
            }
            //Hàm ẩn modal mua vé (gỡ bỏ class open của modal)
            function hideBuyTickets() {
                modalOpen.classList.remove('open')
            }


            //Lặp qua từng thẻ btn và nghe hành vi click
            for (const buyBtn of buyBtns) {
                buyBtn.addEventListener('click', showBuyTickets)
            }
            for (const modalClose of modalCloses) {
                modalClose.addEventListener('click', hideBuyTickets)
            }
            modalOpen.addEventListener('click', hideBuyTickets)
            modalContainer.addEventListener('click', function (event) {
                event.stopPropagation()
            })

        </script> 


        <!-- Javascript menu mobile -->
         <script>
            var header = document.getElementById('header');
            var mobileMenu = document.getElementById('mobile-menu');
            var headerHeight = header.clientHeight;//cách 1 là phải xoá dòng này
            // console.log(mobileMenu);

            //Đóng mở mobile menu
            mobileMenu.onclick = function () {
                // alert('Thong Bao!');
                // console.log(header.clientHeight);
                // var isClose=header.clientHeight==46;//cách 1 
                var isClose = header.clientHeight == headerHeight;//cách 2

                if (isClose) {
                    header.style.height = 'auto';
                } else {
                    header.style.height = null;
                }
            }

            //Tự động đóng khi chọn menu
            var menuItems = document.querySelectorAll('#nav li a[href*="#"]');
            // console.log(menuItems);
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.onclick = function (event) {
                    var isParentMenu = this.nextElementSibling && this.nextElementSibling.classList.contains('subnav');
                    // console.log(this);
                    if (isParentMenu) {
                        event.preventDefault();
                    } else {
                        header.style.height = null;
                    }
                }
            }
        </script> 
</body>
    
</html>