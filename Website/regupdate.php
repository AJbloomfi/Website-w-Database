<!DOCTYPE html>
<html lang="en">

<head>
  <title>AP :: Registered Update</title>
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
  <h1>Apricot Phones Update</h1>
  <br>


  <form action="regupdate.php" method="post">

    PhoneID: <input type="text" name="PhoneID">
    <br>
    PhoneName: <input type="text" name="PhoneName">
    <br>
    Model: <input type="text" name="Model">
    <br>
    BatterySize: <input type="text" name="BaterySize">
    <br>
    YearMade: <input type="text" name="YearMade">
    <br>
    UnitPrice: <input type="text" name="UnitPrice">
    <br>
    OS: <input type="text" name="OS">
    <br>
    NumRAM: <input type="text" name="NumRAM">
    <br>
    Color: <input type="text" name="Color">
    <br>
    HeadPhoneJack: <input type="text" name="HedPhoneJack">
    <br>
    <input type="submit">
</form>

  <?php
    include "info.php";
		$servername = "localhost";
		$db = "Team_350_Fall18_Apricot";
		$connection = mysqli_connect($servername, $username, $password, $db);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $PhoneID = $_POST["PhoneID"];
      $PhoneName = $_POST["PhoneName"];
      $Model = $_POST["Model"];
      $BatterySize = $_POST["BatterySize"];
      $YearMade = $_POST["YearMade"];
      $UnitPrice = $_POST["UnitPrice"];
      $OS = $_POST["OS"];
      $NumRAM = $_POST["NumRAM"];
      $Color = $_POST["Color"];

      if (!empty($PhoneName) && !empty($PhoneID)) {
	      $sql_select = "UPDATE Phone SET PhoneName = '" . $PhoneName . "' WHERE PhoneID = '" . $PhoneID . "' ";
	      mysqli_query($connection, $sql_select);

    }
	else if(!empty($Model) && !empty($PhoneID)){
		 $sql_select = "UPDATE Phone SET Model = '" . $Model . "' WHERE PhoneID = '" . $PhoneID . "' ";
		mysqli_query($connection, $sql_select);
	    }
	else if(!empty($BatterySize) && !empty($PhoneID)){
		$sql_select = "UPDATE Phone SET BatterySize = '" . $BatterySize . "' WHERE PhoneID = '" . $PhoneID . "' ";
		mysqli_query($connection, $sql_select);
	}

	else if(!empty($YearMade) && !empty($PhoneID)){
		$sql_select = "UPDATE Phone SET YearMade = '" . $YearMAde . "' WHERE PhoneID = '" . $PhoneID . "' ";
		mysqli_query($connection, $sql_select);
	}

	else if(!empty($UnitPrice) && !empty($PhoneID)){
		$sql_select = "UPDATE Phone SET UnitPrice = '" . $UnitPrice . "' WHERE PhoneID = '" . $PhoneID . "' ";
		mysqli_query($connection, $sql_select);
	}

	else if(!empty($OS) && !empty($PhoneID)){
		$sql_select = "UPDATE Phone SET OS = '" . $OS . "' WHERE PhoneID = '" . $PhoneID . "' ";
		mysqli_query($connection, $sql_select);
	}

	else if(!empty($NumRAM) && !empty($PhoneID)){
		$sql_select = "UPDATE Phone SET NumRAM = '" . $NumRAM . "' WHERE PhoneID = '" . $PhoneID . "' ";
		mysqli_query($connection, $sql_select);
	}

	else if(!empty($Color) && !empty($PhoneID)){
		$sql_select = "UPDATE Phone SET Color = '" . $Color . "' WHERE PhoneID = '" . $PhoneID . "' ";
		mysqli_query($connection, $sql_select);
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
