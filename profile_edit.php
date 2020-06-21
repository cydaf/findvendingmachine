<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WEVEN - 修改資料</title>

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
                    <form action="profile_edit_process.php" METHOD="POST">
                    <div class="single-blog-content">
                        <h3 style="font-weight: bold; text-align: center;">個人資訊</h3>
                        <br>
                        <hr size="10px" class="our-hr">
                            <p style="text-align:left;" class="ml-56 lightSpeedIn">
                                <br>
                                <?php foreach($rows as $user){ ?>
                                    &emsp;帳號:&ensp;<input type="text" name="account" size="18" class="text lightSpeedIn" placeholder="name" style="animation-duration:1.5s" required readonly disabled value="<?=$user->account?>"/><br /><br />
                                    &emsp;暱稱:&ensp;<input type="text" name="name" size="18" class="text lightSpeedIn" placeholder="name" style="animation-duration:1.5s" required value="<?=$user->name?>"/><br /><br/>
                                    &emsp;性別:&ensp;<?php
                                    if($user->gender=="男"){
                                    ?>
                                    
                                     <input type="radio" name="gender" value="男" checked="true" />男&emsp;&emsp;
                                <input type="radio" name="gender" value="女" />女&emsp;&emsp;&emsp;&emsp;&ensp;
                                    <?php
                                    }
                                       ?>
                                    
                                    <?php
                                     if($user->gender=="女"){
                                    ?>
                                     <input type="radio" name="gender" value="男"  />男&emsp;&emsp;
                                <input type="radio" name="gender" value="女" checked="true"/>女&emsp;&emsp;&emsp;&emsp;&ensp;
                                    <?php
                                    }
                                       ?><br><br>
                                    &emsp;職業:&ensp;<select name="job" class="down">
                    <option class="dropdown-item" value="" disabled selected hidden>請選擇</option>
                    <option value="<?=$user->job?>" selected><?=$user->job?></option>
                    
                    <option value="農牧業">農牧業</option>
                    <option value="漁業" >漁業</option>
                    <option value="木材森林業">木材森林業</option>
                    <option value="礦業採石業">礦業採石業</option>
                    <option value="交通運輸業">交通運輸業</option>
                    <option value="餐旅業">餐旅業</option>
                    <option value="製造業">製造業</option>
                    <option value="新聞廣告業">新聞廣告業</option>
                    <option value="衛生保健業">衛生保健業</option>
                    <option value="娛樂業">娛樂業</option>
                    <option value="文教機構">文教機構</option>
                    <option value="宗教團體">宗教團體</option>
                    <option value="公共事業">公共事業</option>
                    <option value="一般商業">一般商業</option>
                    <option value="服務業">服務業</option>
                    <option value="家庭管理">家庭管理</option>
                    <option value="治安人員">治安人員</option>
                    <option value="軍人">軍人</option>
                    <option value="資訊業">資訊業</option>
                    <option value="運動人員">運動人員</option>
                  </select> 
                                <?php }?>
                            </p>
                        
                     
                        <div class="otherselection">
                        <a href="profile.php" class="btn g-bt">取消</a>
                        <button  type="submit" class="btn y-bt">送出</button>
                        </div>

                </div>
                    </form>
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
    <!-- Optional JavaScript -->

</body>

</html>