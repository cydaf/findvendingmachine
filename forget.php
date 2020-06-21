<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WEVEN - 忘記密碼</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="manifest" href="manifest.json" />

    <!--animation.css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

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
   
        if($_GET['situation']=="complete"){
    ?> <script>   
           alert('密碼更改成功！');  
       </script>
    <?php
        }
       if($_GET['situation']=="wrongpassword"){?>
    <script>  
           alert('密碼輸入錯誤，請重新確認！');  
    </script>
    <?php
        }
    
?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>
    
    <!-- Header -->
    <header class="header-area"></header>

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-40 clearfix" style="text-align: center;">
        <div class="container">
            <div>
                <!-- Single Blog Area -->
                <div class="single-blog-area clearfix">
                    <!-- Blog Content -->
                    <form method="post" action="forget_process.php">
                        <div class="single-blog-content">
                        <h4 style="font-weight: bold; text-align: center;">忘記密碼</h4>
                            <p style="padding-top:70px">
                                帳&emsp;&emsp;號&emsp;&emsp;<input type="email" name="account" value="m22104416@gmail.com"size="20" class="text lightSpeedIn" readonly  style="animation-duration: 1.5s">
                                <br><br>
                                新的密碼&emsp;&emsp;<input type="password" name="password1" size="20" class="text lightSpeedIn" placeholder="password" required style="animation-duration: 2s">
                                <br><br> 
                                確認密碼&emsp;&emsp;<input type="password" name="password2" size="20" class="text lightSpeedIn" placeholder="password" required style="animation-duration: 2.5s">
                                <br><br>
                            </p>            
                            <a href="login.php" class="post-tag" style="margin-bottom:40px">沒有忘記密碼?請回到登入畫面</a>
                            <button type="submit" class="btn btn-outline-dark" style="background-color: ghostwhite;">提交</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="title-bg">
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
</body>

</html>