<!-- options from table bus -->
<?php
   $query = "SELECT * FROM bus ORDER BY licenseplate";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("databases query failed.");
   }

   while ($row = mysqli_fetch_assoc($result)) {
       echo "<option value=". $row[licenseplate] . ">" . $row[licenseplate] . "</option>";
   }
   mysqli_free_result($result);

   
?>