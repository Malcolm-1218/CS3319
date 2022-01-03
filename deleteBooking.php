<!-- 
        Allow user to delete a booking
-->
<?php
        include 'connectdb.php';
        $whichPassenger = $_POST["selectPassenger"];
        $whichTrip = $_POST["selectTrip"];

 	$query = "DELETE FROM booking WHERE passengerid =".$whichPassenger. " AND tripid =". $whichTrip;
        
        if (!mysqli_query($connection, $query)) {
        die("databases query failed.");
        }else{
        echo "<h3>"."This Booking has been deleted"."</h3>";
        
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


        

