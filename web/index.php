<!DOCTYPE html>
<html>

<head>

  <!-- Tab Title-->
  <title>Skjervoy</title>

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
        <li>

          <form action="search.php" method="GET">
            <input type="text" name="query" value="" />
            <input type="submit" class="submit-btn" value="Search" />
          </form>

        </li>
        <li href="#"><i class="nav-link fa fa-shopping-cart"></i> Your Cart</li>
        <li href="#"><i class="nav-link fa fa-fw fa-user"></i> Login</li>
      </ul>
    </div>
  </nav>

  <!-- Splash Home Screen Image-->
  <div class="splash_container">
    <img class="splash" onclick="window.location.href = 'our-notebooks.php';" src="resources/front_page.jpg" alt="notepad with pen" style="width:100%;">
  </div>

  <!-- First Black Description Box-->
  <div class="black_box_desc">
    <p class="center_box_heading">
      <font face="javanese-text" ->- Our Products -</font>
    </p>
  </div>

  <!-- First List Of Product Category-->

  <div class="product_block">
    <div class="row mb-2">
      <div class="col-sm d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 1000px;">
          <div class="row no-gutters">
            <h5 class="card-title">Our Pen Collection</h5>
          </div>
          <div class="row no-gutters">
            <div class="col-md-7">
              <img src="resources/cat_pens.png" class="card-img" alt="Pen Category">
            </div>
            <div class="col-md-5">
              <div class="card-body">
                <p class="card-text">We offer a large range of stunning premium pens of the highest quality from our hand picked partners. We ensure the best products are chosen and pride our self's on ensuring no defects are found.</p>
                <div class="card_button">
                  <button type="button" class="btn btn-outline-dark" style="color:white" onclick="window.location.href = 'our-pens.php';">View Collections</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-2 ">
      <div class="col-sm d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 1000px;">
          <div class="row no-gutters">
            <h5 class="card-title">Our Notebook Collection</h5>
          </div>
          <div class="row no-gutters">
            <div class="col-md-7">
              <img src="resources/cat_notebook.png" class="card-img-top" alt="Notebook Category">
            </div>
            <div class="col-md-5">
              <div class="card-body">
                <p class="card-text">We offer a large range of stunning premium notebooks of the highest quality from our hand picked partners. We ensure the best products are chosen and pride our self's on ensuring no defects are found.</p>
                <div class="card_button">
                  <button type="button" class="btn btn-outline-dark" style="color:white" onclick="window.location.href = 'our-notebooks.php';">View Collections</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Story Of Company Description-->
  <div class="black_box_desc">
    <p class="center_box_heading">- The Story of Skjerv&oslash;y -</p>
    <p class="center_box_desc">Our story begins in 1925 when our beloved founder, Frank, first discovered the fine art of pen craftsmanship. Using only the best and highest quality materials he began to experiment with different designs. His unique sense of style and unparalleled eye for quality lead to him establishing a store and distribution chain which would become far greater then he could ever imagine.</p>
    <img class="flag" src="resources/flag.png" alt="norsk flag" height=auto width=auto>
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
                  <button type="button" class="btn btn-outline-dark" style="color:white">View Locations</button>
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