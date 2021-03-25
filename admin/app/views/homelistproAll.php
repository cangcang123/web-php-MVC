<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sleek - Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
   <base href="http://localhost/php-mvc/admin/">
  <!-- PLUGINS CSS STYLE -->
  <link href="./public/assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="./public/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="./public/assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="./public/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="./public/assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="./public/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="./public/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="./public/assets/css/sleek.css" />
 <!-- FAVICON -->
  <link href="./public/assets/img/favicon.png" rel="shortcut icon" />
  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="./public/assets/plugins/nprogress/nprogress.js"></script>
</head>
  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <?php include_once "./app/views/blocks/menu.php" ?>
      <div class="page-wrapper">
                  <!-- Header -->
        <?php include_once "./app/views/blocks/header.php" ?>
            <div class="row">
              <div class="col-xl-4 col-lg-6 col-12"> 
                  <!-- Top Sell Table -->
                 
</div>
              <div class="col-xl-4 col-12">
                        <!-- Notification Table -->
</div>
            </div>
            <div class="row">
              <div class="col-12"> 
                  <!-- Recent Order Table -->
</div>
            </div>
            <?php include_once"./app/views/pages/homelistproAll.php" ?>
</div>
        </div>
                  <footer class="footer mt-auto">          
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="./public/assets/plugins/jquery/jquery.min.js"></script>
<script src="./public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./public/assets/plugins/toaster/toastr.min.js"></script>
<script src="./public/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="./public/assets/plugins/charts/Chart.min.js"></script>
<script src="./public/assets/plugins/ladda/spin.min.js"></script>
<script src="./public/assets/plugins/ladda/ladda.min.js"></script>
<script src="./public/assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="./public/assets/plugins/select2/js/select2.min.js"></script>
<script src="./public/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="./public/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="./public/assets/plugins/daterangepicker/moment.min.js"></script>
<script src="./public/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="./public/assets/plugins/jekyll-search.min.js"></script>
<script src="./public/./public/assets/js/sleek.js"></script>
<script src="./public/assets/js/chart.js"></script>
<script src="./public/assets/js/date-range.js"></script>
<script src="./public/assets/js/map.js"></script>
<script src="./public/assets/js/custom.js"></script>
  </body>
</html>
