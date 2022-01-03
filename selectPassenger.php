<!-- options from table passenger -->
<?php
   $query = "SELECT * FROM passenger";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("databases query failed.");
   }

   while ($row = mysqli_fetch_assoc($result)) {
       echo "<option value=". $row[passengerid] . ">" . $row[passengerid].". ".$row[firstname] . " ".$row[lastname]."</option>";
   }
   mysqli_free_result($result);

  

?>