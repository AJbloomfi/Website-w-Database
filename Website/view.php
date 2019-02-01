<!DOCTYPE html>
<html lang="en">

<head>
  <title>AP :: View</title>
  <link rel="stylesheet" type="text/css" href="style.css" <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

  <div class="navbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href=" http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=PhoneID">View</a></li>
    </ul>
    <div class="login">
      <form action ="regindex.html">
        <input type="text" placeholder="Username" name="username">
        <input type="type" placeholder="Password" name="password">
        <button type="submit">Login</button>
      </form>
    </div>
    <br>
  </div>
  <br><br>
  <h1>Apricot Phones View</h1>
  <br>
  <br>


  <?php

               include "info.php";
               $servername = "localhost";
               $db = "Team_350_Fall18_Apricot";
               $connection = mysqli_connect($servername, $username, $password, $db);

               /*if(!$connection){
                       echo "Connection failed";
               }else{
                       echo"Connected";
               }*/

              //Select
              $sql_select = "SELECT * FROM Phone";
              $result = mysqli_query($connection, $sql_select);
              $numRows = mysqli_num_rows($result);
              //echo $numRows;



              //sort table headers
              $sort = "SELECT * FROM Phone ORDER BY ";

              if($_GET['sort'] == 'PhoneID'){
                      $sort .= "PhoneID";
              }elseif($_GET['sort'] == 'PhoneName'){
                      $sort .= "PhoneName";
              }elseif($_GET['sort'] == 'CompanyName'){
                      $sort .= "CompanyName";
              }elseif($_GET['sort'] == 'Model'){
                        $sort .= "Model";
              }elseif($_GET['sort'] == 'BatterySize'){
                      $sort .= "BatterySize";
              }elseif($_GET['sort'] == 'YearMade'){
                      $sort .= "YearMade";
              }elseif($_GET['sort'] == 'UnitPrice'){
                      $sort .= "UnitPrice";
              }elseif($_GET['sort'] == 'OS'){
                      $sort .= "OS";
              }elseif($_GET['sort'] == 'NumRAM'){
                      $sort .= "NumRAM";
              }elseif($_GET['sort'] == 'Color'){
                      $sort .= "Color";
              }elseif($_GET['sort'] == 'HeadPhoneJack'){
                      $sort .= "HeadPhoneJack";
              }



                     //echo $sort;
                     $sort_connection = mysqli_query($connection, $sort);


                     echo "<table align=center>";
                     echo "<thread>";

                     echo "<tr>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=PhoneID>" .  PhoneID . "</a>". "</th>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=PhoneName>" .  PhoneName . "</a>" . "</th>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=CompanyName>" . CompanyName . "</a>" . "</th>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=Model>" . Model . "</a>" . "</th>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=BatterySize>" . BatterySize . "</a>" . "</th>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=YearMade>" . YearMade . "</a>" . "</th>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=UnitPrice>" .  UnitPrice . "</a>". "</th>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=OS>" .  OS . "</a>" . "</th>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=NumRAM>" . NumRAM . "</a>" . "</th>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=Color>" . Color . "</a>" . "</th>";
                                     echo "<th>" . "<a href = http://cs.umw.edu/~mkarp/GroupProject/view.php?sort=HeadPhoneJack>" . HeadPhoneJack . "</a>" . "</th>";

                    echo "</tr>";
                     echo "</thread>";
                     echo "<tbody>";
                             while($row = mysqli_fetch_array($sort_connection)){
                                     echo "<tr>";
                                     echo "<td>" . $row["PhoneID"] . "</td>";
                                     echo "<td>" . $row["PhoneName"] . "</td>";
                                     echo "<td>" . $row["CompanyName"] . "</td>";
                                     echo "<td>" . $row["Model"] . "</td>";
                                     echo "<td>" . $row["BatterySize"] . "</td>";
                                     echo "<td>" . $row["YearMade"] . "</td>" ;
                                     echo "<td>" . $row["UnitPrice"] . "</td>";
                                     echo "<td>" . $row["OS"] . "</td>";
                                     echo "<td>" . $row["NumRAM"] . "</td>";
                                     echo "<td>" . $row["Color"] . "</td>";
                                     echo "<td>" . $row["HeadPhoneJack"] . "</td>" ;
                                     echo "</tr>";
                             }
                     echo "</tbody>";
                     echo '</table>';

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
  </section>




</body>

</html>
