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
        <li class="nav-item"><a href="shopping-cart.php" class="nav-link">&#128722; Your Cart </a></li>
        <li class="nav-item"><a href="login.php" class="nav-link">&#x1F464; Login </a></li>
        <li>
          <form action="search.php" method="GET" class="form-inline">
            <input class="form-control form-control-sm ml-3 w-75" name="query" type="text" placeholder="Search" aria-label="Search">
          </form>
        </li>
      </ul>
    </div>
  </nav>

  <!-- First Black Description Box-->
  <div class="black_box_desc_employee">
    <p class="center_box_heading_employee">
      <font face="javanese-text" ->- Employee Login -</font>
    </p>
  </div>

  <?php

  mysql_connect("silva.computing.dundee.ac.uk", "19ac3u05", "abc123") or die(mysql_error());
  mysql_select_db("19ac3d05") or die(mysql_error());

  session_start();

  //preventing direct link access

  if (isset($_SESSION['varname2'])) {
    $id = $_SESSION['varname'];
    $role = $_SESSION['varname2'];

    if ($role != "Sales Assistant") {
      ?>
      <script type="text/javascript">
        window.location.href = "error.php";
      </script>
    <?php
      }
    } else {
      ?> <script type="text/javascript">
      window.location.href = "error.php";
    </script> <?php
              }

              $data = mysql_query("SELECT * FROM Employees WHERE `Employee ID` = \"$id\"") or die(mysql_error('No Records Found'));

              while ($info = mysql_fetch_array($data)) {


                $name = $info['Name'];
                $role = $info['Role'];
                $id = $info['Employee ID'];
                $building = $info['Building'];
                $picture = $info['Picture'];
              }

              $bldg = mysql_query("SELECT * FROM Buildings WHERE `Building Id` = \"$building\"") or die(mysql_error('No Records Found'));

              while ($info2 = mysql_fetch_array($bldg)) {

                $addressid = $info2['Address'];
                $type = $info2['Type'];
              }

              $address = mysql_query("SELECT * FROM Addresses WHERE `Address Id` = \"$addressid\"") or die(mysql_error('No Records Found'));

              while ($info3 = mysql_fetch_array($address)) {

                $firstline = $info3['First Line of Address'];
                $secondline = $info3['Second Line of Address'];
                $postcode = $info3['Postcode'];
                $city = $info3['City'];
                $country = $info3['Country'];
              }

              ?>

  <!-- Avatar -->
  <div class="avatar-box">
    <img class="avatar" src="<?php echo $picture ?>" alt="Avatar">
  </div>

  <!-- Section Divider -->
  <div class="black_box_desc_div">
  </div>

  <!-- First Section-->
  <div class="box_desc_employee">
    <p class="center_box_desc_employee">
      <font face="javanese-text" ->- Your Details -</font>
    </p>
    <p class="center_box_text_employee">Name - <?php echo $name; ?></p>
    <p class="center_box_text_employee">ID - <?php echo $id; ?> </p>
  </div>

  <!-- Section Divider -->
  <div class="black_box_desc_div">
  </div>

  <!-- Second Section-->
  <div class="box_desc_employee">
    <p class="center_box_desc_employee">
      <font face="javanese-text" ->- Your Role -</font>
    </p>
    <p class="center_box_text_employee">Position - <?php echo $role; ?> </p>
    <p class="center_box_text_employee">Workplace Type - <?php echo $type; ?></p>


    <!-- Section Divider -->
    <div class="black_box_desc_div">
    </div>

    <!-- Third Section-->
    <div class="box_desc_employee">
      <p class="center_box_desc_employee">
        <font face="javanese-text" ->- Workplace Address -</font>
      </p>
      <p class="center_box_text_employee">
        <?php echo $firstline; ?>
        <?php
        if ($secondline == "") { } else { ?> <br> <?php
                                                    echo $secondline;
                                                  } ?><br>
        <?php echo $city; ?><br>
        <?php echo $postcode; ?><br>
        <?php echo $country; ?><br>
      </p>
    </div>

    <!-- Section Divider -->
    <div class="black_box_desc_div">
    </div>

    <!-- Third Section-->
    <div class="box_desc_employee">
      <p class="center_box_desc_employee">
        <font face="javanese-text" ->- Database Access -</font>
      </p>

      <div class="flex container">
        <table style="width:100%">
          <tr>
            <th>Product ID</th>
            <th>Type</th>
            <th>Series</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Buying Price</th>
            <th>Selling Price</th>
            <th>Minimum Required</th>
            <th>Order</th>
          </tr>

          <tr>
            <?php

            $invdata = mysql_query("SELECT * FROM Inventory WHERE `Building` = \"$building\"") or die(mysql_error('No Records Found'));

            while ($inv = mysql_fetch_array($invdata)) {

              $productid = $inv['Product ID'];
              $quantity = $inv['Quantity'];
              $minquantity = $inv['Minimum Required Quantity'];

              $productdata = mysql_query("SELECT * FROM Products WHERE `Product ID` = \"$productid\"") or die(mysql_error('No Records Found'));
              while ($prod = mysql_fetch_array($productdata)) {
                $productname = $prod['Name'];
                $producttype = $prod['Type'];
                $productseries = $prod['Series'];
                $buyingprice = $prod['Buying Price'];
                $sellingprice = $prod['Selling Price'];
                $supplier = $prod['Supplier'];


                ?>


                <td><?php echo $productid; ?></td>
                <td><?php echo $producttype; ?></td>
                <td><?php echo $productseries; ?></td>
                <td><?php echo $productname; ?></td>
                <td><?php echo $quantity; ?></td>
                <td><?php echo $buyingprice; ?></td>
                <td><?php echo $sellingprice; ?></td>
                <td><?php echo $minquantity; ?></td>
                <td>

                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#<?php echo $productname; ?>">
                    Order More
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="<?php echo $productname; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $productname; ?>Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="<?php echo $productname; ?>Label"><?php echo $productname; ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php
                              $supplierdata = mysql_query("SELECT * FROM Suppliers WHERE `Name` = \"$supplier\"") or die(mysql_error('No Records Found'));
                              while ($sup = mysql_fetch_array($supplierdata)) {
                                $supname = $sup['Name'];
                                $supaddress = $sup['Address'];
                                $supemail = $sup['Email'];

                                $supplieraddress = mysql_query("SELECT * FROM Addresses WHERE `Address ID` = \"$supaddress\"") or die(mysql_error('No Records Found'));
                                while ($supaddr = mysql_fetch_array($supplieraddress)) {
                                  $firstlinesup = $supaddr['First Line of Address'];
                                  $secondlinesup = $supaddr['Second Line of Address'];
                                  $postcodesup = $supaddr['Postcode'];
                                  $citysup = $supaddr['City'];
                                  $countrysup = $supaddr['Country'];
                                }

                                ?>
                            <h1>Supplier: </h1><?php echo $supname; ?><br><br>
                            <h2>Address: </h2><?php echo $firstlinesup; ?><br>
                            <?php echo $secondlinesup; ?><br>
                            <?php echo $postcodesup; ?><br>
                            <?php echo $citysup; ?><br>
                            <?php echo $countrysup; ?><br><br>
                            <h2>Email: <br></h2><?php echo $supemail; ?><br>

                          <?php } ?>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>

          </tr>

      <?php }
      } ?>
        </table>
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