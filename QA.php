<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WEVEN - 常見問題</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="manifest" href="manifest.json" />

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
                    <div class="single-blog-content" width="100%" style="text-align:center">
                        <h3 class="our-title">常見問題</h3><br />
                        <hr size="10px" class="our-hr">
                        <br>
                        <div id="QandA">
                            <p class="Question">Q1: 地圖無法顯示出來</p>
                            <div class="Answer">
                                <p class="c2-color">Ans: 請先重新整理頁面，若無法，請洽客服</p>
                            </div>
                        </div>
                        <br>
                        <div id="QandA">
                            <p class="Question">Q2: 商品搜尋沒有結果</p>
                            <div class="Answer">
                                <p class="c2-color">Ans: 請更換關鍵字搜尋，若尚未添加的商品，請洽客服</p>
                            </div>
                        </div>
                        <br>
                        <div id="QandA">
                            <p class="Question">Q3: 欲修改帳號怎麼辦</p>
                            <div class="Answer">
                                <p class="c2-color">Ans: 我們僅提供修改密碼的服務，帳號無法被更新，請重新註冊</p>
                            </div>
                        </div>
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
    <!--動畫製作--->
    <script type="text/javascript">
        jQuery(function($) {

            $("p.Question").css({
                cursor: "pointer"
            }).click(function() {

                $(this).next().toggle("normal");

            });

        });
    </script>
</body>

</html>