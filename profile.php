<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WEVEN - 個人資訊</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="manifest" href="manifest.json" />

    <!--animation.css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <!--service worker-->
    <script>
        if ("serviceWorker.js" in navigator) {
            console.log("Will service worker register?");
            navigator.serviceWorker
                .register("service-worker.js")
                .then(function(reg) {
                    console.log("yes it did.");
                })
                .catch(function(err) {
                    console.log("No it didn,t This happened: ", err);
                });
        }
    </script>

    <?php 
    error_reporting(0);  
    if(isset($_GET['situation'])){?>
    <script>     
           alert('密碼更改完畢！');  
    </script>
    <?php
    }
 include("profile_user_process.php");?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- Header -->
    <header class="header-area">
        <?php include("sidebar.php")?>
    </header>
    
    <!-- ##### Blog Wrapper Start ##### -->
    
    <div class="blog-wrapper section-padding-50 clearfix" style="text-align: center;">
        <div class="container">
            <div>
                <!-- Single Blog Area -->
                <div class="single-blog-area clearfix">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <h3 class="our-title">個人資訊</h3>
                        <br>
                        <hr size="10px" class="our-hr">
                            <p style="text-align:left; animation-duration:1.5s" class="ml-56 lightSpeedIn">
                                <br>
                                <?php foreach($rows as $user){ ?>
                                    &emsp;帳號:&ensp;<?=$user->account?><br /><br />
                                    &emsp;暱稱:&ensp;<?=$user->name?><br /><br/>
                                    &emsp;性別:&ensp;<?=$user->gender?><br><br>
                                    &emsp;職業:&ensp;<?=$user->job?> 
                                <?php }?>
                            </p>
                        
                        <br>
                            
                         <hr size="10px" width="100%">
                        <a href="edit_password.php" style="text-decoration:underline;animation-duration:3s"class="post-tag animated pulse" onclick="">重設密碼</a> 
                    <hr size="10px" width="100%"> </div>
                    <img style="position: absolute;
                    top:70%;
  bottom: 1em;
  right: 1em;" src="img/edit.svg" width="30px"onclick="javascript:location.href='profile_edit.php'">
                </div>
            </div>
        </div>
    </div>
    

    <!-- ##### Footer Area Start ##### -->
   
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Optional JavaScript -->

</body>

</html>