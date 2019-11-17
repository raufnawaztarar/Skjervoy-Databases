<?php

session_start();

                mysql_connect("silva.computing.dundee.ac.uk", "19ac3u05", "abc123") or die(mysql_error());
                mysql_select_db("19ac3d05") or die(mysql_error());


                $username = $_POST['inputted-username'];
                $password = $_POST['inputted-password'];
                $hashedpw = hash('sha256', $password);

                echo $username;
                echo $hashedpw;



                $data = mysql_query("SELECT * FROM Employees WHERE Email=\"$username\"") or die(mysql_error('No Records Found'));
                while ($info = mysql_fetch_array($data))
                {
                    $name = $info['Name'];
                    $email = $info['Email'];
                    $role = $info['Role'];
                    $phone = $info['Phone'];

                    echo $name;
                    echo $email; 
                    echo $role; 
                    echo $phone; 
                }


                    
                    ?>