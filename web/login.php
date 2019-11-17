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
    <div class ="rainbow_group">
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
          <li class="nav-item"><a href="#" class="nav-link">Our Pens</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Our Notebooks</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Our Stores</a></li>
        </ul>
      </div>
      <img class ="col-xs-4 justify-content-center" src="resources/black_logo.png" alt="logo" height="10%" width="10%" data-toggle="null" data-target="null">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="col-xs-4 navbar-nav mx-auto justify-content-center">
          <li href="#"><i class="nav-link fa fa-fw fa-search"></i> Search</li>
          <li href="#"><i class="nav-link fa fa-shopping-cart"></i> Your Cart</li>
          <li href="#"><i class="nav-link fa fa-fw fa-user"></i> Login</li>
        </ul>
      </div>
    </nav>

    <!-- First Black Description Box-->
    <div class="black_box_desc_employee">
      <p class="center_box_heading_employee"><font face="javanese-text"->- Login -</font></p>
    </div>

    <!-- Login Box From https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=simple-login-form-->
    <div class="login-form">
      <form action="/examples/actions/confirmation.php" method="post">      
          <div class="form-group">
              <input type="text" class="form-control" placeholder="Username" required="required">
          </div>
          <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" required="required">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Log in</button>
          </div>
          <div class="clearfix">
              <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
              <a href="#" class="pull-right">Forgot Password?</a>
          </div>        
      </form>
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
            <h5 class="widget-title"><font face="javanese-text">Quick Links</font><span></span></h5>
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
          <p><img class ="logo" src="resources/Skjervoy@3x.png" alt="Skjervoy logo white" height="50%" width="50%"><br>
            <font face="kollektif" >Store Opening Hours<br>
            Mon - Fri: 9 AM - 6 PM<br>
            Sat - Sun: 10 AM - 5 PM<br>
            </font>
          </p>
          <img class = "flag" src="../web/resources/flag.png" alt="norsk flag" height=auto width=auto>
        </div>
        <div class="col text-right">
          <div class="widget">
            <h5 class="widget-title"><font face="javanese-text">Company Information</font><span></span></h5>
            <ul class="thumbnail-widget">
              <li>
                <div class="thumb-content"><a href="#.">Privacy Policy</a></div>
              </li>
              <li>
                <div class="thumb-content"><a href="#.">Employee Access</a></div>
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