<?php
  
        $whichTrip = $_POST["selectTrip"];

        $query = "SELECT * FROM bustrip WHERE tripid=" .$whichTrip;
        $result = mysqli_query($connection,$query);
        //echo $query."<br>";
        if (!$result) {
          die("databases query failed.");
        }
        while ($row = mysqli_fetch_assoc($result)) {
         if($row[urlImage] != NULL){
        echo  "<img src=".$row[urlImage].">";
        }else{
        echo "No image for this busTrip";
        }


        }
         mysqli_free_result($result);

         mysqli_close($connection);
?>