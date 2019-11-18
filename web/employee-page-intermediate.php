<?php

mysql_connect("silva.computing.dundee.ac.uk", "19ac3u05", "abc123") or die(mysql_error());
mysql_select_db("19ac3d05") or die(mysql_error());


$username = $_POST['inputted-username'];
$password = $_POST['inputted-password'];
$hashedpw = hash('sha256', $password);

$data = mysql_query("SELECT `Employee ID`, Role FROM Employees WHERE Email=\"$username\" AND Password=\"$hashedpw\"") or die(mysql_error('No Records Found'));

while ($info = mysql_fetch_array($data)) {


    $role = $info['Role'];
    $id = $info['Employee ID'];

    session_start();

    $_SESSION['varname'] = $id;
    $_SESSION['varname2'] = $role;
}


if ($role == NULL) { ?>
    <script type="text/javascript">
        window.location.href = "error-page.php";
    </script>
<?php } else if ($role == "Manager") { ?>
    <script type="text/javascript">
        window.location.href = "manager-page.php";
    </script>
<?php } else if ($role == "Sales Assistant") { ?>
    <script type="text/javascript">
        window.location.href = "assistant-page.php";
    </script>
<?php } else if ($role == "HR Manager") { ?>
    <script type="text/javascript">
        window.location.href = "hrmanager-page.php";
    </script>
<?php } else if ($role == "Product Manager") { ?>
    <script type="text/javascript">
        window.location.href = "productmanager-page.php";
    </script>
<?php }


?>