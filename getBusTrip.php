<!-- List All Bus Trip -->
<?php
   $query = "SELECT * FROM bustrip";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("databases query failed.");
   }
   echo "<ol>";
   while ($row = mysqli_fetch_assoc($result)) {
       echo "<li>";
        echo "Trip ID: ". $row[tripid]. " '".$row[tripname]."' "." Start: ".$row[startdate]." End: ".$row[enddate]." Country: ".$row[country];
        echo "</li>";

   }
   mysqli_free_result($result);
   echo "</ol>";

   
?>