<!-- 
      List all the info about the passengers including passport info in order by last name
-->
<?php
    $query = "SELECT * FROM passenger, passport WHERE passenger.passengerid = passport.passengerid ORDER BY lastname";
    $result = mysqli_query($connection,$query);
    if (!$result) {
       die("databases query failed.");
    }
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
         echo "Passenger ID: ".$row[passengerid].", Name: ".$row[firstname]." ".$row[lastname].", Passenger Number: ".$row[passportnum].", Citizenship: ".$row[citizenshipcountry].", Expire Date: ".$row[expireydate].", Birthdate: ".$row[birthdate];
         echo "</li>";

    }
    mysqli_free_result($result);
    echo "</ul>";
   
?>
