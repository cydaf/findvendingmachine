<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WEVEN - 客服聯繫</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="manifest" href="manifest.json" />

    <!--animation.css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

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
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>
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
                    <div class="single-blog-content clearfix">
                    <h3 class="our-title">客服聯繫</h3>
                        <br>
                        <hr size="10px" class="our-hr">
                            <table class="lightSpeedIn cs-content" style="animation-duration:1.3s">
                                <tr>
                                    <td>信箱</td>
                                    <td>tty09183@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>電話</td>
                                    <td>02-89302156</td>
                                </tr>
                                <tr>
                                    <td>住址</td>
                                    <td>新北市中正路514巷96號</td>
                                </tr>
                            </table>
                            <a href="QA.php"  class="btn btn-outline-dark">常見問題</a>

                            <p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!--chatrobot-->
    <script src="//code.tidio.co/jsr6b61vrobwzh2zqgab6h1rquc51x6y.js" async></script>
</body>

</html>