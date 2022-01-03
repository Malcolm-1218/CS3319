<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Updated trips</title>
</head>
<body>
<?php
   include 'connectdb.php';
   
?>
<h1>Here are your new trip:</h1>
<!-- 
    Allow user to select a bus trip and change it
-->
<?php
  
        $whichTrip = $_POST["selectTrip"];
        $tripName = $_POST["tname"];
        $startDate = $_POST["sdate"];
        $endDate = $_POST["edate"];
        $image = $_POST["newImage"];

        $query1 = "UPDATE bustrip SET tripname= '". $tripName. "', ". "startdate= '". $startDate. "', "."enddate= '".$endDate."', "." urlImage= '". $image."' ". " WHERE tripid=". $whichTrip;

        //echo $query1."<br>";
        if (!mysqli_query($connection, $query1)) {
        die("databases query failed. ");
        }else{
        echo "<h3>"."New Bus Trip Updated"."</h3>";
        echo "<h3>"."Please go back to main page, refresh and check it!"."</h3>";
        }
?>

<?php
  
   include 'displayImage.php';
?>

</body>
</html>


