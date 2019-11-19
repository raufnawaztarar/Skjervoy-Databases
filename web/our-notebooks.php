<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>

  <!-- Tab Title-->
  <title>Skjervoy Notebooks</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <!-- Bootstrap Link-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Our External Style Sheet-->
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Icon Libary-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <!-- Top Banner Colors-->
  <div class="rainbow_group">
    <div class="bluebar"></div>
    <div class="whitebar"></div>
    <div class="redbar"></div>
  </div>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="col-xs-4 navbar-nav mx-auto justify-content-center">
        <li class="nav-item"><a href="our-pens.php" class="nav-link">Our Pens</a></li>
        <li class="nav-item"><a href="our-notebooks.php" class="nav-link">Our Notebooks</a></li>
        <li class="nav-item"><a href="our-locations.php" class="nav-link">Our Stores</a></li>
      </ul>
    </div>
    <img class="col-xs-4 justify-content-center" src="resources/black_logo.png" alt="logo" height="10%" width="10%" data-toggle="null" data-target="null" onclick="window.location.href = 'index.php';">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="col-xs-4 navbar-nav mx-auto justify-content-center">
        <li class="nav-item"><a href="shopping-cart.php" class="nav-link">&#128722; Your Cart </a></li>
        <?php if (!isset($_SESSION['name'])) { ?>
          <li class="nav-item"><a href="login.php" class="nav-link">&#x1F464; Login </a></li>
        <?php } else { ?>
          <li class="nav-item"><a href="index.php?action=logout" class="nav-link">&#x1F464; Logout </a></li>
        <?php } ?>
        <li>
        <form action="search.php" method="GET" class="form-inline">
          <input class="form-control form-control-sm ml-3 w-75" name="query" type="text" placeholder="Search" aria-label="Search">
        </form>
        </li>
      </ul>
    </div>
  </nav>

  <div class="splash-container">
    <img class="splash" src="resources/notebooks2.jpg" alt="black and white fjord" style="width:100%;">
  </div>


  <!-- Notebooks Product Category-->

  <div class="product_block">

    <div class="row">
      <div class="row mb-5 justify-content-center">

        <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="resources/fjord-nb.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3 style="font-size: 3vh;">Fjord Series</h3>
              <h3 style="font-size: 2vh; color: #002868">We offer a large range of stunning premium notebooks of the highest quality from our hand picked partners. We ensure the best products are chosen and pride our self's on ensuring no defects are found.</h3>
              <h2 style="font-size: 1.5vh"></h2>
              <p class="mb-4"> </p>
              <div>
                <a href="#fjord-series" class="btn btn-black mr-1 rounded-0">View Collection</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="resources/excellence-nb.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3 style="font-size: 3vh;">Excellence Series</h3>
              <h3 style="font-size: 2vh; color: #002868">We offer a large range of stunning premium notebooks of the highest quality from our hand picked partners. We ensure the best products are chosen and pride our self's on ensuring no defects are found.</h3>
              <h2 style="font-size: 1.5vh"></h2>
              <p class="mb-4"> </p>
              <div>
                <a href="#excellence-series" class="btn btn-black mr-1 rounded-0">View Collection</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="resources/elite-nb.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3 style="font-size: 3vh;">Elite Series</h3>
              <h3 style="font-size: 2vh; color: #002868">We offer a large range of stunning premium notebooks of the highest quality from our hand picked partners. We ensure the best products are chosen and pride our self's on ensuring no defects are found.</h3>
              <h2 style="font-size: 1.5vh"></h2>

              <p class="mb-4"> </p>
              <div>
                <a href="#elite-series" class="btn btn-black mr-1 rounded-0">View Collection</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="site-section" id="products-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-6 text-center">
          <h3 class="section-sub-title" id="fjord-series">Explore Our</h3>
          <h2 class="section-title mb-3">Fjord Series</h2>
        </div>
      </div>
      <div class="row">
        <?php

        
        require_once("dbcontroller.php");
        $db_handle = new DBController();

        $product_array = $db_handle->runQuery("SELECT * FROM Products WHERE Type=\"Notebook\" AND Series=\"Fjord\" ORDER BY Name ASC") or die(mysql_error('No Records Found'));
        if (!empty($product_array)) { 
          foreach($product_array as $key=>$value){
          $name = $product_array[$key]["Name"];
          $price = $product_array[$key]["Selling Price"];
          $series = $product_array[$key]["Series"];
          $pictures = $product_array[$key]["Picture"]; ?>

          <div class="col-lg-4 col-md-6 mb-5">
            <form class="form" method="post" action="shopping-cart.php?action=add&Name=<?php echo $product_array[$key]["Name"]; ?>">
              <div class="product-item">
                <figure>
                  <img src="<?php echo $pictures; ?>" alt="Image" class="img-fluid">
                </figure>
                <div class="px-4">
                  <h3 style="font-size: 3vh;"><?php echo $name; ?></h3>
                  <h3 style="font-size: 2vh; color: #002868">£<?php echo $price; ?></h3>
                  <h2 style="font-size: 1.5vh"><?php echo $series; ?> Series</h2>
                  <div class="form-group">
                  <select class="form-control" name="quantity">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                  <div>
                    <input class="btn btn-black mr-1 rounded-0" type="submit" value="Add to Cart" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        <?php } } ?>
      </div>
    </div>
  </div>

  <div class="site-section" id="products-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-6 text-center">
          <h3 class="section-sub-title" id="excellence-series">Explore Our</h3>
          <h2 class="section-title mb-3">Excellence Series</h2>
        </div>
      </div>
      <div class="row">
        <?php

        
        require_once("dbcontroller.php");
        $db_handle = new DBController();

        $product_array = $db_handle->runQuery("SELECT * FROM Products WHERE Type=\"Notebook\" AND Series=\"Excellence\" ORDER BY Name ASC") or die(mysql_error('No Records Found'));
        if (!empty($product_array)) { 
          foreach($product_array as $key=>$value){
          $name = $product_array[$key]["Name"];
          $price = $product_array[$key]["Selling Price"];
          $series = $product_array[$key]["Series"];
          $pictures = $product_array[$key]["Picture"]; ?>

          <div class="col-lg-4 col-md-6 mb-5">
            <form class="form" method="post" action="shopping-cart.php?action=add&Name=<?php echo $product_array[$key]["Name"]; ?>">
              <div class="product-item">
                <figure>
                  <img src="<?php echo $pictures; ?>" alt="Image" class="img-fluid">
                </figure>
                <div class="px-4">
                  <h3 style="font-size: 3vh;"><?php echo $name; ?></h3>
                  <h3 style="font-size: 2vh; color: #002868">£<?php echo $price; ?></h3>
                  <h2 style="font-size: 1.5vh"><?php echo $series; ?> Series</h2>
                  <div class="form-group">
                  <select class="form-control" name="quantity">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                  <div>
                    <input class="btn btn-black mr-1 rounded-0" type="submit" value="Add to Cart" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        <?php } } ?>
      </div>
    </div>
  </div>

  <div class="site-section" id="products-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-6 text-center">
          <h3 class="section-sub-title" id="elite-series">Explore Our</h3>
          <h2 class="section-title mb-3">Elite Series</h2>
        </div>
      </div>
      <div class="row">
        <?php

        
        require_once("dbcontroller.php");
        $db_handle = new DBController();

        $product_array = $db_handle->runQuery("SELECT * FROM Products WHERE Type=\"Notebook\" AND Series=\"Elite\" ORDER BY Name ASC") or die(mysql_error('No Records Found'));
        if (!empty($product_array)) { 
          foreach($product_array as $key=>$value){
          $name = $product_array[$key]["Name"];
          $price = $product_array[$key]["Selling Price"];
          $series = $product_array[$key]["Series"];
          $pictures = $product_array[$key]["Picture"]; ?>

          <div class="col-lg-4 col-md-6 mb-5">
            <form class="form" method="post" action="shopping-cart.php?action=add&Name=<?php echo $product_array[$key]["Name"]; ?>">
              <div class="product-item">
                <figure>
                  <img src="<?php echo $pictures; ?>" alt="Image" class="img-fluid">
                </figure>
                <div class="px-4">
                  <h3 style="font-size: 3vh;"><?php echo $name; ?></h3>
                  <h3 style="font-size: 2vh; color: #002868">£<?php echo $price; ?></h3>
                  <h2 style="font-size: 1.5vh"><?php echo $series; ?> Series</h2>
                  <div class="form-group">
                  <select class="form-control" name="quantity">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                  <div>
                    <input class="btn btn-black mr-1 rounded-0" type="submit" value="Add to Cart" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        <?php } } ?>
      </div>
    </div>
  </div>

  <!-- Section Divider -->
  <div class="black_box_desc_div">
  </div>

  <!-- Find Other Locations Card-->
  <div class="product_block">
    <div class="row mb-2 ">
      <div class="col-sm d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 1000px;">
          <div class="row no-gutters">
            <h5 class="card-title">Find one of our establishments</h5>
          </div>
          <div class="row no-gutters">
            <div class="col-md-7">
              <img src="resources/shop_scene.png" class="card-img" alt="shop_scene">
            </div>
            <div class="col-md-5">
              <div class="card-body">
                <p class="card-text">We offer a large range of stunning premium notebooks of the highest quality from our hand picked partners. We ensure the best products are chosen and pride our self's on ensuring no defects are found.</p>
                <div class="card_button">
                  <button type="button" class="btn btn-black mr-1 rounded-0">View Locations</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Bottom Banner Colors-->
  <div class="bluebar"></div>
  <div class="whitebar"></div>
  <div class="redbar"></div>

  <!-- Footer-->
  <footer id="footer" class="footer-1">
    <div class="main-footer widgets-dark typo-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col text-left">
            <div class="widget">
              <h5 class="widget-title">
                <font face="javanese-text">Quick Links</font><span></span>
              </h5>
              <ul class="thumbnail-widget">
                <li>
                  <div class="thumb-content"><a href="#.">Home</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="#.">Products</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="#.">Store Guide</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="#.">Track Orders</a></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col text-center">
            <p><img class="logo" src="resources/Skjervoy@3x.png" alt="Skjervoy logo white" height="50%" width="50%"><br>
              <font face="kollektif">Store Opening Hours<br>
                Mon - Fri: 9 AM - 6 PM<br>
                Sat - Sun: 10 AM - 5 PM<br>
              </font>
            </p>
            <img class="flag" src="resources/flag.png" alt="norsk flag" height=auto width=auto>
            <p>
              <font face="kollektif">Made with &#128149 by Team 5 &copy <?php echo date("Y"); ?></font>
            </p>
          </div>
          <div class="col text-right">
            <div class="widget">
              <h5 class="widget-title">
                <font face="javanese-text">Company Information</font><span></span>
              </h5>
              <ul class="thumbnail-widget">
                <li>
                  <div class="thumb-content"><a href="#.">Privacy Policy</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="employee-access.php">Employee Access</a></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>