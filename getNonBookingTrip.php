<!-- 
      List all the bus trips that don't any booking yet
-->
<?php
   $query = "SELECT DISTINCT bustrip.tripid, tripname FROM bustrip, booking WHERE bustrip.tripid NOT IN (SELECT DISTINCT tripid FROM booking)";
   $result = mysqli_query($connection,$query);
   if (!$result) {
   die("databases query failed.");
   }
   echo "<ul>";
   while ($row = mysqli_fetch_assoc($result)) {
   echo "<li>";
   echo "Trip ID: ".$row[tripid].", Name: ".$row[tripname];
   echo "</li>";

   }
   echo "</ul>";
   mysqli_free_result($result);
   
   
?>

