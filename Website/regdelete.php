<!DOCTYPE html>
<html lang="en">

<head>
  <title>AP :: Registered Delete</title>
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
  <h1>Apricot Phones Delete</h1>
  <br>


<form action="regdelete.php" method="post">

    PhoneID: <input type="text" name="PhoneID">
    <input type="submit">
</form>

<?php
   include "info.php";
   $servername = "localhost";
   $db = "Team_350_Fall18_Apricot";
   $connection = mysqli_connect($servername, $username, $password, $db);

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $PhoneID = $_POST["PhoneID"];


     if (!empty($PhoneID)) {
       $sql_select = "DELETE FROM Phone WHERE PhoneID = '" . $PhoneID . "' ";
       mysqli_query($connection, $sql_select);

       $sql_select = "UPDATE Phone SET PhoneID = '" . $PhoneID . "' -1";

       mysqli_query($connection, $sql_select);

   }

   }
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
