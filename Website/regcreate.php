<!DOCTYPE html>
<html lang="en">

<head>
  <title>AP :: Registered Create</title>
  <link rel="stylesheet" type="text/css" href="style.css" <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

  <div class="navbar">
    <ul>
      <li><a href="regindex.html">Home</a></li>
      <li><a href="regview.php?sort=PhoneID">View</a></li>
      <li><a href="regcreate.php">Create</a></li>
      <li><a href="regupdate.php">Update</a></li>
      <li><a href="regdelete.php">Delete</a></li>
    </ul>
    <br>
  </div>
  <br><br>
  <h1>Apricot Phones Create</h1>
  <br>

  <form action="regcreate.php" method="post">
                  Phone Name: <input type="text" name="PhoneName">
                  <br>
                  Company Name: <input type="text" name="CompanyName">
                  <br>
                  Model: <input type="text" name="Model">
                  <br>
                  Battery Size: <input type="text" name="BatterySize">
                  <br>
                  Year Made: <input type="text" name="YearMade">
                  <br>
                  Unit Price: <input type="text" name="UnitPrice">
                  <br>
                  OS: <input type="text" name="OS">
                  <br>
                  Number of RAM: <input type="text" name="NumRAM">
                  <br>
                  Color: <input type="text" name="Color">
                  <br>
                  HeadPhone Jack: <input type="text" name="HeadPhoneJack">
                  <br>
                  <input type="submit">
  </form>


<?php


               // Variables for connection
               include "info.php";
               $servername = "localhost";
               $db = "Team_350_Fall18_Apricot";
               $connection = mysqli_connect($servername, $username, $password, $db);

               // Create connection
               /*
               if (!$connection) {
                       echo "MySQL database connection failed.";
               } else {
                       echo "MySQL database connection success!";
               }
               */

               if($_SERVER["REQUEST_METHOD"] == "POST"){
                                      $PhoneName = $_POST["PhoneName"];
                                      $CompanyName = $_POST["CompanyName"];
                                      $Model = $_POST["Model"];
                                      $BatterySize = $_POST["BatterySize"];
                                      $YearMade = $_POST["YearMade"];
                                      $UnitPrice = $_POST["UnitPrice"];
                                      $OS = $_POST["OS"];
                                      $NumRAM = $_POST["NumRAM"];
                                      $Color = $_POST["Color"];
                                      $HeadPhoneJack = $_POST["HeadPhoneJack"];

                                      if(!empty($PhoneName) && !empty($CompanyName) && !empty($Model) && !empty($BatterySize) && !empty($YearMade) && !empty($UnitPrice) && !empty($OS) && !empty($NumRAM) && !empty($Color) && !empty($HeadPhoneJack)){

                                              $sql_insert="INSERT INTO Phone ( PhoneName, CompanyName, Model, BatterySize, YearMade, UnitPrice, OS, NumRAM, Color, HeadPhoneJack ) VALUES ('" . $PhoneName . "','" . $CompanyName . "','" . $Model . "',
                                                '" . $BatterySize . "', '" .$YearMade . "' ,'" . $UnitPrice . "','" . $OS . "','" . $NumRAM ."','" . $Color . "','" . $HeadPhoneJack . "')";

                                              //echo $sql_insert . "<br>";

                                              mysqli_query($connection, $sql_insert);

                                      }
              }

                  //close
                  mysqli_close($connection);

?>


  <br>
  <br>
  <br>
  <br>
  <br>
  <section class="footer">
    <br>
    <p>THANK YOU FOR VISITING OUR SITE!</p>
    <p><a href="index.html">Sign Out</a></p>
  </section>




</body>

</html>
