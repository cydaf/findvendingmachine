<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WEVEN - your vending machine</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!--manifest.json-->
    <link rel="manifest" href="manifest.json" />

    <!--animation-->

    <script>
        if ('serviceWorker' in navigator) {
            console.log("Will service worker register?");
            navigator.serviceWorker
                .register("./service-worker.js")
                .then(function(reg) {
                    console.log("yes it did.");
                })
                .catch(function(err) {
                    console.log("No it didn,t This happened: ", err);
                });
        }
        navigator.serviceWorker.getRegistrations().then(function(registrations) {
            for (let registration of registrations) {
                registration.unregister()
            }
        })
       
    </script>

    <!-- margin是調整border外的邊界；padding則是調整border內到內文之間的距離-->
    <style type="text/css">
        html,
        body,
        #map {
            height: 96.3%;
            margin: 0;
            padding: 20;
        }
         #allData,#favorite{
            display: none;
        }
    </style>
    <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>

    <script type="text/javascript" src="js/googlemap.js"></script>
</head>

<body>
    <header class="header-area">
       <?php include("sidebarsearch.php");
       ?>
    </header>   
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>
    <div class="container">
        <?php 
           $pro_name= $_GET["pro_name"];
            require 'get_value.php';
           
           
            $val = new get_value;
            $val -> setpro_name($pro_name);
            $allData = $val->getSearchMachines() ;
            $allData = json_encode($allData, true);

        
            echo '<div id="allData">' . $allData . '</div>';	  
            $favorite= new get_value;
            $favorite -> setaccount($account); 
            $favorite= $favorite->fav();
            $favorite=json_encode($favorite, true);
          echo '<div id="favorite">' . $favorite . '</div>';
        
        ?>
    </div>
    

    <!--Map-->
    <div id="map"></div>
 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ver">商品清單</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php include("ven-info.php"); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ver">販賣機故障回報</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="result">
                    <?php include("contact.php"); ?>
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
        <script src="js/contact.js"></script>
    <!--include html-->
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script>
        w3.includeHTML();
    </script>
</body>
<!---The async attribute allows the browser to render the page while the API loads--->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBstjRsNEnzJo4CYLYDSMu7lJ_Bu-A9w4c&libraries=places&callback=loadMap">
    </script>
    

</html>