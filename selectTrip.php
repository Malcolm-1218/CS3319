<!-- options from table bustrip -->
<?php
   $query = "SELECT * FROM bustrip";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("databases query failed.");
   }

   while ($row = mysqli_fetch_assoc($result)) {
       echo "<option value=". $row[tripid] . ">" . $row[tripid].".".$row[tripname] . "</option>";
   }
   mysqli_free_result($result);

  

?>