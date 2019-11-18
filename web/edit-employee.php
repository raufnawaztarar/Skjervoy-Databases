<!DOCTYPE html>
<html>

<head>

  <!-- Tab Title-->
  <title>Skjervoy Pens</title>

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
        <li href="#"><i class="nav-link fa fa-fw fa-search"></i> Search</li>
        <li href="#"><i class="nav-link fa fa-shopping-cart"></i> Your Cart</li>
        <li href="#"><i class="nav-link fa fa-fw fa-user"></i> Login</li>
      </ul>
    </div>
  </nav>

  <div class="splash-container">
    <img class="splash" src="resources/fjord.jpg" alt="black and white fjord" style="width:100%;">
  </div>

  <?php
  $server = "silva.computing.dundee.ac.uk";
  $user = "19ac3u05";
  $pass = "abc123";
  $database = "19ac3d05";


  $mysql = new PDO("mysql:host=" . $server . ";dbname=" . $database, $user, $pass);
  //not sure what the next line is, from
  //https://www.w3schools.com/php/php_mysql_prepared_statements.asp
  $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  ?>

  <?php
  try {

    //$mysql = new mysqli($server, $user, $pass, $database);
      if(isset($_POST['employee-id-button'])) {
          $datafound = true;
      $stmt = $mysql->prepare(
        "SELECT `Employee ID`, Name, Email, Phone, Salary, Role, `Bank Details`, 
        Picture, Building FROM Employees WHERE `EMPloyee ID`=:EmpID"
        //"SELECT * FROM Employees WHERE `Employee ID`=:EmpID"
      );
      $stmt->bindParam(':EmpID', $employee_ID);
      $employee_ID = $_POST['employee-id-button'];
      $stmt->execute();

      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $emp_id_emp = $row['Employee ID']; 
      $name_emp = $row['Name'];
      $email_emp = $row['Email'];
      $phone_emp = $row['Phone'];
      $salary_emp = $row['Salary'];
      $role_emp = $row['Role'];
      $bank_details_emp = $row['Bank Details'];

      
      
     } else {
        $datafound = false;
    }
  } catch (PDOException $e) {
      $datafound = false;
  }
  ?>

  <form name="Edit Employee" action="" method="post">
      <?php if($datafound) { ?>
    <?php echo $emp_id_emp; ?><br/>
    Name: <input type="text" name="name" value="<?php echo $name_emp ?>"> <br />
    <!-- Series: <input type="text" name="series" value="Elite"> <br /> -->
    Email: <input type="text" name="email" value="<?php echo $email_emp ?>"> <br />
    Phone: <input type="text" name="phone" value="<?php echo $phone_emp ?>"> <br />
    Salary: <input type="text" name="salary" value="<?php echo $salary_emp ?>">£ <br />
    Role: <input type="text" name="role" value="<?php echo $role_emp ?>"> <br />
    Bank Details: <input type="text" name="bank_details" value="<?php echo $bank_details_emp ?>"> <br />
    <input type="hidden" name="emp_id" value="<?php echo $emp_id_emp ?>" />
    <input type="submit" name="submit_edit_emp" value="Submit" /> <br />
      <?php } ?>
  </form>

  <?php 
    if (isset($_POST['submit_edit_emp']) ) {
      

        $name_new = $_POST['name'];
        $email_new = $_POST['email'];
        $phone_new = $_POST['phone'];
        $salary_new = $_POST['salary'];
        $role_new = $_POST['role'];
        $bank_details_new = $_POST['bank_details'];
        $emp_id = $_POST['emp_id'];

        $stmt = $mysql->prepare("UPDATE `Employees`
        SET `Name` = :Name_new, `Email` = :Email_new, `Phone` = :Phone_new, 
            `Salary` = :Salary_new, `Role` = :Role_new, `Bank Details`=:Bank_new
        WHERE `Employee ID`=:Emp_ID");
        
        // $stmt = $mysql->prepare("SELECT * FROM `Employees`
        // WHERE `Employee ID`=:Emp_ID");
        $stmt->bindParam(":Name_new", $name_new);
        $stmt->bindParam(":Email_new", $email_new);
        $stmt->bindParam(":Phone_new", $phone_new);
        $stmt->bindParam(":Salary_new", $salary_new);
        $stmt->bindParam(":Role_new", $role_new);
        $stmt->bindParam(":Bank_new", $bank_details_new);
        $stmt->bindParam(":Emp_ID", $emp_id);
      
      $succ = $stmt->execute();
      
      if($succ) {
        echo "$name_new updated successfully.<br/>";
        echo "<a href=\"#\" onclick=\"window.close();return false;\">Close this tab.</a>
        Hit refresh on the employee details page to see changes";
      } else {
        echo "Something went wrong ¯\_(ツ)_/¯ <br/>";
      }
      
    }
  ?>

  </div>



  <!-- Bottom Banner Colors-->
  <div class="bluebar"></div>
  <div class="whitebar"></div>
  <div class="redbar"></div>

  <!-- Footer -->
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