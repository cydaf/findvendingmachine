<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  
  <!-- Title -->
  <title>商品搜尋結果</title>
  
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css" />

  <link rel="manifest" href="manifest.json" />

  <!-- Vue.js --> 
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  
</head>
<body>  
    <header class="header-area">
       <?php include("sidebarsearch.php");
        include("search.php");?>
    </header>
    
  <div class="container">
    <div class="col-12" id="result_block">
      <div class="row" id="result_list"> 
         
 <img src="img/worry.png" width="100px" style="position: absolute;top:30%;
  left:35%;">
          <p style="position: absolute;top:50%;
  left:24%;font-size:15px">
     偶找不到...
              換個關鍵字吧！</p>
              
        
        
      </div>
      <!--返回上一頁-->
      <a href="index.php" class="btn btn-outline-light back">
        <img src="img/back.svg">     
      </a>
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


</body>
</html>