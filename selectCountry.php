<!-- options from table country -->
<?php
   $query = "SELECT DISTINCT country FROM bustrip";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("databases query failed.");
   }

   while ($row = mysqli_fetch_assoc($result)) {
       echo "<option value=". $row[country] . ">" . $row[country] . "</option>";
   }
   mysqli_free_result($result);

   
?>
