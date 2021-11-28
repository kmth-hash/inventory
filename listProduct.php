<?php
include 'sqlFiles/retreive.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>   
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <meta charset="utf-8" />    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/nucleo-svg.css" rel="stylesheet">
    <link href="assets/css/nucleo-icons.css" rel="stylesheet">
    <link href="assets/css/material-dashboard.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript" src="ajax-calls/ajax-script.js"></script>
    <style>
        .async-hide {
          opacity: 0 !important
        }

        @font-face {
          font-family: 'Material Icons';
          font-style: normal;
          font-weight: 400;
          src: url(https://example.com/MaterialIcons-Regular.eot); /* For IE6-8 */
          src: local('Material Icons'),
          local('MaterialIcons-Regular'),
          
        }

        .material-icons {
          font-family: 'Material Icons';
          font-weight: normal;
          font-style: normal;
          font-size: 24px;  /* Preferred icon size */
          display: inline-block;
          line-height: 1;
          text-transform: none;
          letter-spacing: normal;
          word-wrap: normal;
          white-space: nowrap;
          direction: ltr;

          /* Support for all WebKit browsers. */
          -webkit-font-smoothing: antialiased;
          /* Support for Safari and Chrome. */
          text-rendering: optimizeLegibility;

          /* Support for Firefox. */
          -moz-osx-font-smoothing: grayscale;

          /* Support for IE. */
          font-feature-settings: 'liga';
        }

    </style>

</head>

<body class="g-sidenav-show  bg-gray-200">
  
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="index2.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Purchases</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Items</span>
          </a>
        </li>
        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Settings</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-up.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" type="button">Sh3kzy D3V Team</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Products</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <?php
              $res = retreiveProducts();
              if(mysqli_num_rows($res)>0){
?>
<div id="dynamicTable" class="table-responsive p-0" style="overflow-y: hidden;">
  <table style="table-layout : fixed;" class="table align-items-center mb-0">
    <thead>
      <tr>
      
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Name</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php
                  $res = retreiveProducts();
                  $i=1;
                  $j=0;
      while($arr=mysqli_fetch_assoc($res)){
          ?>
          <tr>
              <td>
                <div class="d-flex px-2 py-1">
                  <div class="d-flex flex-column justify-content-center">
                    <h6 style="margin-left: 5px;" class="mb-0 text-sm"><?php echo $i++ ?></h6>
                    <!-- <p class="text-xs text-secondary mb-0">
                      <a href="#" >ID : 3215</a>
                    </p> -->
                  </div>
                </div>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0" ><?php echo $arr['name'] ?></p>
                <!--<p class="text-xs text-secondary mb-0">Organization</p>-->
              </td>
              <td >
                <p style="margin-left: 20px;z-index: 10;" class="text-xs font-weight-bold mb-0" ><?php echo $arr['qty'] ?></p>
              </td>
              <td>
              <?php
                      $prod_id = $arr['id'];
                      $prod_name = $arr['name'];
                  ?>
                  <button onclick="showTable('<?php echo $j ?>')" class="btn btn-primary btn-sm">View Items</button>
                  <button onclick="updateMe('<?php echo $prod_id ?>','<?php echo $prod_name ?>')" class="btn btn-primary btn-sm">Update</button>
                  <button onclick="deleteStuffs('<?php echo $prod_id ?>')" class="btn btn-primary btn-sm">Delete</button>
              </td>
            </tr>
            <tr>
               <td colspan="4" style="width: 100%;">
                <table id="item<?php echo $j ?>" style="border: none;border:0px; table-layout : fixed; visibility: collapse; " class="table mb-0">
                    <thead>
                      <tr>
                        <th style="margin-top: 30px;padding: 0px;">
                            <button id="closeTablebtn<?php echo $j ?>" onclick="closeTable('<?php echo $j++ ?>')" class="btn btn-danger" style="z-index: 5; padding:0px;height: 24px; width: 24px; border-radius: 12px;font-size: 8px;display: block;">x</button>
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding: 0px;">Item Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                        <th class="text-secondary opacity-7"></th>

                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $res2 = retreiveproductItems($arr['id']);
                            while($arr2=mysqli_fetch_assoc($res2)){
                                ?>
                                <tr>
                                    <td></td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0" ><?php echo $arr2['name'] ?></p>
                                    </td>
                                    <td>
                                        <p style="padding-left: 25px;" class="text-xs font-weight-bold mb-0" ><?php echo $arr2['qty'] ?><span>
                                        <?php echo $arr2['category'] ?>
                                        </span></p>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
               </td> 
            </tr>
          <?php
      }
      ?>                    
    </tbody>
  </table>
</div>
<?php
              }
              else{
                ?>
                <div style=" text-align: center;" class="col-md-12">
                  <label for="">No products to show</label>
                </div>
                <?php
              }
              ?>
              
              
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/perfect-scrollbar.min.js"></script>
  <script src="assets/js/smooth-scrollbar.min.js"></script>
  <script>
    function updateMe(i,j){
      window.location.href = 'http://localhost/inventory/addProduct.php?prodId='+i+'&prodName='+j;
    }
      function showTable(i){
          document.getElementById('item'+i).style.visibility = 'visible';
          document.getElementById('closeTablebtn'+i).style.display = 'block';
      }
      function closeTable(i){
        document.getElementById('item'+i).style.visibility = 'collapse';
        document.getElementById('closeTablebtn'+i).style.display = 'none';
      }
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
  <script src="assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>