
        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container sidebar-bg">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar">
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span
                ></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span><span class="bottom"></span>
                                </div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <!-- Sidebar information -->
                                <div class="info-top"></div>
                                <div class="sideinfo sidebar-bg">
                                    <div class="circle ml-15 mb-7">
                                        <a href="profile.php"><img src="img/vending-machine.png" /></a>
                                    </div>
                                    &emsp;
                                    <h4>
                                        <?php
                                        require 'db.php';
                                        $state = $conn->query("select name from user where account='$account'");
foreach($state as $row){
     echo "<a href='profile.php'><h4>";
                                            echo $row['name'];
                                            echo"</h4></a>";
}?>
                                        
                                    </h4>
                                </div>

                                <ul>
                                    <li>
                                        <a href="index.php"><span>首頁</span></a>
                                    </li>
                                    <li>
                                        <a href="beforefavmap.php"><span>我的最愛</span></a>
                                    </li>
                                    <li>
                                        <a href="error-record.php"><span>故障回報紀錄</span></a>
                                    </li>
                                    <li>
                                        <a href="cs.php"><span>客服聯繫</span></a>
                                    </li>
                                    <li>
                                        <a href="activity.php"><span>活動優惠</span></a>
                                    </li>
                                    <li>
                                        <a href="logout.php"><span>登出</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                        <!-- searching -->
                        <div id="searching" class="sidebar-bg">
                            <form class="sidebar-bg" name="searched" action="searching.php" method="POST">
                                <input class="sidebar-bg" type="text" name="searching_keyword" id="searching_keyword" <?php if (isset($_GET["pro_name"])){?>
                                       placeholder="<?php echo $_GET['pro_name'] ?>"
                                       <?php }
                                       else{?>
                                        placeholder="請輸入商品關鍵字"
                                       <?php } ?> autocomplete="off" required>
                                <button type="submit" id="searching_submit">
                                <img src="img/searching.svg"/>
                                </button>
                            </form>
                            <!-- form表單結構說明：https://reurl.cc/X6R4ga -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
   
        
