<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>After Sorting</title>
</head>
<body>
   <h2>Those are all bus trips after sorting:</h2><br>
   <!-- 
      Sort all bus trip by trip name or country name
   -->
   <?php
          include 'connectdb.php';
          $whichName = $_POST["Name"]; //get name of what is the order by
          $whichOrder = $_POST["order"]; // get kind of order

          $query = "SELECT * FROM bustrip ORDER BY $whichName $whichOrder";
          $result = mysqli_query($connection, $query); 
          if (!$result) {
             die("databases query on bus trip failed. ");
          }
          echo "<ol>"; 
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>";
            echo "' " . $row[tripname] . " '" ."  Start: ".$row[startdate] . "  End: ".$row[enddate]."  Country: ".$row[country]."</li>";
         }
         echo "</ol>"; 
         mysqli_free_result($result);
   ?>
   
</body>
</html>



