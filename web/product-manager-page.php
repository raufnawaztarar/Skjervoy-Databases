<!DOCTYPE html>
<html>

<head>
  <!-- Tab Title-->
  <title>Skjervoy Pens
  </title>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <!-- Our External Style Sheet-->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Icon Libary-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Top Banner Colors-->
  <div class="rainbow_group">
    <div class="bluebar">
    </div>
    <div class="whitebar">
    </div>
    <div class="redbar">
    </div>
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
      <font face="javanese-text" ->- Employee Access Portal -
      </font>
    </p>
  </div>
  <!-- Pens Product Category-->
  <div class="flex container">
    <div class="row">
      <div class="col-sm-4">
        <h1 class="center_form_heading">Add a new product
        </h1>
        <span class="center_form_span">
        </span>
        <?php
        $server = "silva.computing.dundee.ac.uk";
        $user = "19ac3u05";
        $pass = "abc123";
        $database = "19ac3d05";
        $mysql = new PDO("mysql:host=" . $server . ";dbname=" . $database, $user, $pass);
        //not sure what the next line is, from
        //https://www.w3schools.com/php/php_mysql_prepared_statements.asp
        // $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        ?>
        <?php
        try {
          //$mysql = new mysqli($server, $user, $pass, $database);
          // Check that a form has been submitted 
          if (isset($_POST['submit'])) {
            $stmt = $mysql->prepare(
              "INSERT INTO Products (`Product ID`,Name,Type,`Buying Price`,`Selling Price`,Weight, Picture, Supplier, Series)
VALUE (:Product_ID, :Name, :Type, :Buying_price, :Selling_price, :Weight, :Picture, :Supplier, :Series)"
            );
            $stmt->bindParam(":Product_ID", $product_id);
            $stmt->bindParam(":Name", $name);
            $stmt->bindParam(":Type", $type);
            $stmt->bindParam(":Buying_price", $buying_price);
            $stmt->bindParam(":Selling_price", $selling_price);
            $stmt->bindParam(":Weight", $weight);
            $stmt->bindParam(":Picture", $picture);
            $stmt->bindParam(":Supplier", $supplier);
            $stmt->bindParam(":Series", $series);
            // Insert one row 
            $product_id = $_POST['product_id'];
            $name = $_POST['name'];
            $type = $_POST['type'];
            $buying_price = $_POST['buying_price'];
            $selling_price = $_POST['selling_price'];
            $weight = $_POST['weight'];
            $picture = $_POST['picture'];
            $supplier = $_POST['supplier'];
            $series = $_POST['series'];
            $stmt->execute();
            $output_of_add = "Product added successfully: " . $name . ".";
          } else {
            // Error handling 
          }
        } catch (PDOException $e) {
          $output_of_add = "Error adding " . $name . ": " . $e->getMessage();
        }
        ?>
        <?php
        // mysql_connect("silva.computing.dundee.ac.uk", "19ac3u05", "abc123") or die(mysql_error());
        // mysql_select_db("19ac3d05") or die(mysql_error());
        // $result1 = mysql_query("SELECT MAX(`Product ID`) AS max_id FROM Products;") or die(mysql_error('No Records Found'));
        // $row1 = mysql_fetch_array($result1);
        // $new_id = number_format($row1["max_id"] + 1, 0, "", ""); //add 1 to the string number
        $stmt = $mysql->prepare("SELECT MAX(`Product ID`) AS max_id FROM Products;");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $max_id = $row['max_id'];
        $new_id = number_format($max_id + 1, 0, "", ""); //add 1 to the string number
        // $maxID = $maxID +1;
        ?>
        <div class="center_form_item">
          <form name="Add New Product" action="" method="post">
            Product ID (16 digits):
            <input type="text" name="product_id" value="<?php echo $new_id; ?>">
        </div>
        <div class="center_form_item">
          <!-- Type: <input type="text" name="type" value="Pen"> <br /> -->
          Type:
          <select name="type">
            <option value="Pen">Pen
            </option>
            <option value="Notebook">Notebook
            </option>
          </select>
        </div>
        <div class="center_form_item">
          Name:
          <input type="text" name="name">
        </div>
        <div class="center_form_item">
          <!-- Series: <input type="text" name="series" value="Elite"> <br /> -->
          Series:
          <select name="series">
            <option value="Elite">Elite
            </option>
            <option value="Fire">Fire
            </option>
            <option value="Excellence">Excellence
            </option>
            <option value="Fjord">Fjord
            </option>
            <option value="Other">Other
            </option>
          </select>
        </div>
        <div class="center_form_item">
          Buying Price:
          <input type="text" name="buying_price" value="1.99">
        </div>
        <div class="center_form_item">
          Selling Price:
          <input type="text" name="selling_price" value="899.99">
        </div>
        <div class="center_form_item">
          Weight:
          <input type="text" name="weight" value="0.8">
        </div>
        <div class="center_form_item">
          Picture Address (optional):
          <input type="text" name="picture" value="img/pen/none.jpg">
        </div>
        <div class="center_form_item">
          <!-- Supplier ID (16 digits): <input type="text" name="supplier" value="0000000000000003"> <br /> -->
          Supplier:
          <select name="supplier">
            <option value="Skjervoy">Skjervoy
            </option>
            <option value="Pilot">Pilot
            </option>
            <option value="Lamy">Lamy
            </option>
          </select>
        </div>
        <div class="center_form_item">
          <?php
          if (isset($output_of_add)) {
            echo $output_of_add;
          }

          ?>
        </div>
        <div class="center_form_item">
          <input class="btn btn-success" type="submit" name="submit" value="Submit" />
          <br />
        </div>
        </form>
      </div>
      <div class="col-sm-4">
        <div class="center_form_heading">
          <h1>Find a product ID
          </h1>
        </div>
        <span class="center_form_span">
        </span>
        <form name="Find a Product" action="" method="post">
          <div class="center_form_item">
            Name:
            <input type="text" name="name_find">
          </div>
          <div class="center_form_item">
            <input class="btn btn-success" type="submit" name="submit_find" value="Find" />
          </div>

        </form>
        <div class="container result list">
          <?php
          if (isset($_POST['submit_find'])) {
            $stmt = $mysql->prepare("SELECT * FROM Products WHERE Name LIKE concat('%', :Name_find, '%')");
            $stmt->bindParam(":Name_find", $name_find);
            $name_find = $_POST['name_find'];
            $stmt->execute();
            $found_some = false;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $found_some = true;
              $name = $row['Name'];
              $product_id_found = $row['Product ID'];
              echo "$name: $product_id_found<br/>";
            }
            if (!$found_some) {
              echo "$name_find not found 😢 <br/>";
            }
          } else {
            //handle errors
          }
          ?>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="center_form_heading">
          <h1>Delete a product
          </h1>
        </div>
        <span class="center_form_span">
        </span>
        <div class="center_form_item">
          </span>
          <form name="Delete a Product" action="" method="post">
            Product ID (16 digits):
            <input type="text" name="product_id_del">
        </div>
        <div class="center_form_item">
          <input class="btn btn-danger" type="submit" name="submit_del" value="DELETE" />
        </div>
        </form>
        <br />
        <?php
        try {
          // Include the database connection 
          $mysql = new PDO("mysql:host=" . $server . ";dbname=" . $database, $user, $pass);
          //not sure what the next line is, from
          //https://www.w3schools.com/php/php_mysql_prepared_statements.asp
          $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //$mysql = new mysqli($server, $user, $pass, $database);
          // Check that a form has been submitted 
          if (isset($_POST['submit_del'])) {
            $product_id_del = $_POST['product_id_del'];
            $stmt = $mysql->prepare("DELETE FROM Products WHERE `Product ID`=:Product_ID_del");
            $stmt->bindParam(":Product_ID_del", $product_id_del);
            // $stmt->debugDumpParams();
            $stmt->execute();
            echo "Product deleted: " . $product_id_del . ".";
          } else {
            // Error handling 
          }
        } catch (PDOException $e) {
          echo "Error deleting " . $name . ": " . $e->getMessage();
        }
        ?>
      </div>
    </div>
  </div>
  <!-- Bottom Banner Colors-->
  <div class="bluebar">
  </div>
  <div class="whitebar">
  </div>
  <div class="redbar">
  </div>
  <!-- Footer -->
  <footer id="footer" class="footer-1">
    <div class="main-footer widgets-dark typo-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col text-left">
            <div class="widget">
              <h5 class="widget-title">
                <font face="javanese-text">Quick Links
                </font>
                <span>
                </span>
              </h5>
              <ul class="thumbnail-widget">
                <li>
                  <div class="thumb-content">
                    <a href="#.">Home
                    </a>
                  </div>
                </li>
                <li>
                  <div class="thumb-content">
                    <a href="#.">Products
                    </a>
                  </div>
                </li>
                <li>
                  <div class="thumb-content">
                    <a href="#.">Store Guide
                    </a>
                  </div>
                </li>
                <li>
                  <div class="thumb-content">
                    <a href="#.">Track Orders
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col text-center">
            <p>
              <img class="logo" src="resources/Skjervoy@3x.png" alt="Skjervoy logo white" height="50%" width="50%">
              <br>
              <font face="kollektif">Store Opening Hours
                <br>
                Mon - Fri: 9 AM - 6 PM
                <br>
                Sat - Sun: 10 AM - 5 PM
                <br>
              </font>
            </p>
            <img class="flag" src="resources/flag.png" alt="norsk flag" height=auto width=auto>
            <p>
              <font face="kollektif">Made with &#128149 by Team 5 &copy
                <?php echo date("Y"); ?>
              </font>
            </p>
          </div>
          <div class="col text-right">
            <div class="widget">
              <h5 class="widget-title">
                <font face="javanese-text">Company Information
                </font>
                <span>
                </span>
              </h5>
              <ul class="thumbnail-widget">
                <li>
                  <div class="thumb-content">
                    <a href="#.">Privacy Policy
                    </a>
                  </div>
                </li>
                <li>
                  <div class="thumb-content">
                    <a href="#.">Employee Access
                    </a>
                  </div>
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