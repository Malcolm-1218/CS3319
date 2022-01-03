<!-- 
        Allow user to select a bus trip and delete it
-->
<?php
        include 'connectdb.php';
        $whichTrip = $_POST["selectTrip"];

 	$query = "Delete FROM bustrip WHERE tripid=" .$whichTrip;
        if (!mysqli_query($connection, $query)) {
        die("Error! This bus trip can't be deleted.");
        }else{
        echo "<h3>"."This Bus Trip has been deleted"."</h3>";
        echo "<h3>"."Please go back to main page, refresh and check it!"."</h3>";
        }

        mysqli_close($connection);
        
?>
