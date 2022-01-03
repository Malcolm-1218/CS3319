<!-- 
      Allow user to add a new bus trip 
-->
<?php
   include 'connectdb.php';
   $newId = $_POST["newId"];
   $newName = $_POST["newName"];
   $newStart = $_POST["newSdate"];
   $newEnd = $_POST["newEdate"];
   $newCountry = $_POST["newCountry"];
   $newBus = $_POST["assignBus"];
   $newImage = $_POST["newImage"];

   $query = "INSERT INTO bustrip (tripid, tripname, startdate, enddate, country, assignedbus, urlImage) VALUES ('$newId', '$newName', '$newStart', '$newEnd', '$newCountry', '$newBus', '$newImage')";
  
   if (!mysqli_query($connection,$query)) {
      die("databases query failed. You cannot input an existing Trip ID");
   }
   else {
      echo "<h3>"."New Bus Trip Added"."</h3>";
      echo "<h3>"."Please go back to main page, refresh and check it!"."</h3>";
      
   }

   mysqli_close($connection);

?>


