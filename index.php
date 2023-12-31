<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
  </head>
  <body style="height: 3000px">
    <!-- Navbar -->
    <?php include "navbar.php";?>
    <!-- End Navbar -->
    <div class="container-lg">
      <div class="row">
        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- End Side -->
        <!-- Content -->
        <?php 
        if(isset($_GET['x']) && $_GET['x']=='home'){
          include "home.php";
        }elseif(isset($_GET['x']) && $_GET['x']=='order'){
          include "order.php";
        }elseif(isset($_GET['x']) && $_GET['x']=='product'){
          include "product.php";
        }elseif(isset($_GET['x']) && $_GET['x']=='customer'){
          include "customer.php";
        }elseif(isset($_GET['x']) && $_GET['x']=='report'){
          include "report.php";
        }
        ?>
        <!-- End Content -->
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
