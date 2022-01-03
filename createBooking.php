<!-- 
      Allow user to create a booking for a trip
-->
<?php
   include 'connectdb.php';
   $whichPassenger = $_POST["selectPassenger"];
   $whichTrip = $_POST["selectTrip"];
   $whatPrice = $_POST["price"];

   $query = "INSERT INTO booking (passengerid, tripid, price) VALUES ('$whichPassenger', '$whichTrip', '$whatPrice')";
   
   if (!mysqli_query($connection,$query)) {
      die("databases query failed.");
   }
   else {
      echo "<h3>"."New Booking Added"."</h3>";
   }

   $query2 = "SELECT * FROM booking";
   $result = mysqli_query($connection,$query2);
   if (!$result) {
      die("databases query failed.");
   }

   echo "<ul>";
   while ($row = mysqli_fetch_assoc($result)) {
      echo "<li>";
        
       echo "Passenger ID: ".$row[passengerid]. " Trip ID: ".$row[tripid]. " Price:".$row[price];
       
       echo "</li>";
   }
   echo "<ul>";

   mysqli_free_result($result);

   mysqli_close($connection);
?>