<!-- 
    Select a passenger and see all of her/his booking
-->
<?php
          include 'connectdb.php';
          $whichPassenger = $_POST["selectPassenger"]; 

          $query = "SELECT firstname, lastname, tripname, price FROM passenger, bustrip, booking WHERE passenger.passengerid = booking.passengerid AND bustrip.tripid = booking.tripid AND passenger.passengerid ='$whichPassenger'";
          $result = mysqli_query($connection, $query); 
          if (!$result) {
             die("databases query on bus trip failed. ");
          }

          echo "<ul>"; 
          while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<li>";
            echo "Name: ".$row[firstname]." ".$row[lastname].",  Trip: ".$row[tripname].", Price: ".$row[price];
            echo "</li>";
         }
         echo "</ul>"; 
         mysqli_free_result($result);

        
   ?>