<!-- 
      Allow user to select a country to see all the bus trip from that country 
-->
<?php
   include 'connectdb.php';
   $selectedCountry = $_POST["selectCountry"];

   $query = "SELECT * FROM bustrip WHERE country = '$selectedCountry'";
   $result = mysqli_query($connection, $query);
    if (!$result) {
       die("databases query on bus trip failed. ");
    }
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<li>";
      echo "Country: ".$row[country]. ", Trip Name: "." ' " . $row[tripname] . " '" ."</li>";
   }
   echo "</ul>";
   mysqli_free_result($result);

   mysqli_close($connection);
?>
