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
         
 
          
          <?php 
         
              
          
          foreach($statement as $row){
              
        ?>
              <div class="list_item">
          <div class="item_img">
            <a href="searchmap.php?pro_name=<?php echo $row['pro_name']?>"><img src="<?php echo $row['pro_pic']?>"></a>
          </div>
          <div class="item_name text-center">
            <p><?php echo $row['pro_name']?></p>
          </div>
            
        </div>
              
         <?php 
          } 
          
          ?>
        
      </div>
      <!--返回上一頁-->
      <a href="index.php" class="back">
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