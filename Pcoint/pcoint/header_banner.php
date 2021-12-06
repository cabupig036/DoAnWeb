
<?php if(!isset($_SESSION))session_start();?>
<!DOCTYPE html>
<html lang="en">

      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>pcoint</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
      <!-- style css -->
      <link rel="stylesheet" href="./Pcoint/pcoint/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="./Pcoint/pcoint/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../pcoint/css/style.css">
    <link rel="stylesheet" href="./css/AE_Contact.css">

    <link rel="stylesheet" href="../pcoint/css/dinhdo/gird.css">
    <link rel="stylesheet" href="../pcoint/css/dinhdo/responsive.css">
    <link rel="stylesheet" href="../pcoint/css/dinhdo/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
   <link rel="stylesheet" href="./css/AE_header_banner.css"
      
</head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
<!--       <div class="loader_bg">
         <div class="loader"><img src="./images/loading.gif" alt="#" /></div>
      </div> -->
      <!-- end loader -->
      <!-- header -->

         <!-- header inner -->
         <header>
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
                                    <a class="nav-link" href="./Homepage.php" style="color:black;"> HomePage </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="./Product.php" style="color:black;">Product</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="./About.php"style="color:black;">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="./Contact.php" style="color:black;">Contact us</a>
                                 </li>
                                 
                                 </ul>
                                  <div class="user_btn">  
                                  <?php
                 /*   hello user */
                       
                       if(isset($_SESSION['email']))
                        {
                                 include '../logout_sessionuser/config.php';
                           
                              $email=$_SESSION['email'];
                           $sql = "SELECT username FROM  `users` WHERE  email = '$email' ";
                           $result=mysqli_query($con,$sql);
                           $data=mysqli_fetch_object($result);
                           foreach($data as $username){
                           echo 'Hello'." ".($username);
                           }
                        }
          ?>  
        <!--   end    -->
       <!--    Logout -->
                     </div>
                       <?php  if(isset($_SESSION['email'])) {
                  echo '<div class="sign_btn"><a class="buy" href="../logout_sessionuser/logout.php">Logout</a></div>';
                   }
                  /*  session khong ton tai thi login */
                   if(!isset($_SESSION['email'])) {
                     echo  ' <div class="sign_btn"><a href="../../login-form-v1/Login_v1/Login.php">Sign in</a></div>';
                   }
                  ?>
                 <!--  end logout -->
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
</body>
       <!-- Javascript files-->
       <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->
      </html>