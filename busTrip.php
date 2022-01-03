<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Worldwide Bus Trips</title>
</head>
<body>
	<?php
		include 'connectdb.php';
	?>

	<h1>Bus Trips Of The World</h1>
	<h3>Those are all bus trips:</h3>
	<!-- 
		List All Bus Trip
	-->

	<?php
		include 'getBusTrip.php';
	?>

	<!-- 
		Sort all bus trip by trip name or country name
	-->
	<form action="sortTrip.php" method="post">
		<p>Order By:</p>
		<input type="radio" name="Name" value="tripname">Trip Name
		<input type="radio" name="Name" value="country">Country
		<p>Select your type of order:</p>
		<input type="radio" name="order" value="ASC">Ascending
		<input type="radio" name="order" value="DESC">Descending

		<input type="submit" value="Sorting Bus Trip">
	</form><br>
	<hr>

	<!-- 
		Allow user to select a bus trip and change it
	-->
	<h3>Update Bus trip</h3>
	<form action="changeTrip.php" method="post" enctype="multipart/form-data">
		<p>Select one of the Bus Trip you want to change:</p>
		<select name="selectTrip" id="selectTrip">
		<option value="selection">Select Here</option>
		<?php
		 include "selectTrip.php";
		?>
		</select><br><br>

		Change trip name: <input type="text" id="tname" name="tname"><br><br>
		Change start date: <input type="date" id="sdate" name="sdate"><br><br>
		Change end date: <input type="date" id="edate" name="edate"><br><br>
		Add Image: <input type="text" name="newImage"><br><br>
		<input type="submit" value="Change Bus Trip">

	</form><br>
	<hr>

	<!-- 
		Allow user to select a bus trip and delete it
	-->
	<h3>Delete Bus trip</h3>
	<form action="deleteTrip.php" method="post">
		<p>Select one of the Bus Trip you want to delete:</p>
		<select name="selectTrip" id="selectTrip">
		<option value="selection">Select Here</option>
		<?php
		 include "selectTrip.php";
		?>
		</select><br><br>
		<input type="submit" value="Delete Bus Trip" onclick="return confirm('Are you sure you want to delete this item')">
	</form><br>
	<hr><br>

	<!-- 
		Allow user to add a new bus trip 
	-->
	<h3>Add Bus trip</h3>
	<form action="addNewTrip.php" method="post">
		New Trip Id: <input type="text" name="newId"><br><br>
		New Trip Name: <input type="text" name="newName"><br><br>
		New Start Date: <input type="date" name="newSdate"><br><br>
		New End Date: <input type="date" name="newEdate"><br><br>
		New Country: <input type="text" name="newCountry"><br><br>
		New Assigned Bus: <select name="assignBus" id="assignBus">
			<option value="select">Select Here</option>
			<?php
		 		include "selectBus.php";
			?>
		</select><br><br>
		New URL Image: <input type="text" name="newImage"><br><br>
		<input type="submit" value="Add A New Bus Trip">
	</form><br>
	<hr>

	<!-- 
		Allow user to select a country to see all the bus trip from that country 
	-->
	<h3>Display Trip By Country</h3>
	<form action="displayTripFromCountry.php" method="post">
		<p>Select one of the country you want to see all the bus trip from that country:</p>
		<select name="selectCountry" id="selectCountry">
		<option value="1">Select Here</option>
		<?php
		 include "selectCountry.php";
		?>
		</select><br><br>
		<input type="submit" value="Submit">
	</form><br>
	<hr><br>

	<!-- 
		Allow user to create a booking for a trip
	-->
	<h3>Create a booking</h3>
	<form action="createBooking.php" method="post">
		Select a passenger:<select name="selectPassenger" id="selectPassenger">
		<option value="selection">Select Here</option>
		<?php
		 include "selectPassenger.php";
		?>
		</select><br><br>
		Select a trip: <select name="selectTrip" id="selectTrip">
		<option value="selection">Select Here</option>
		<?php
		 include "selectTrip.php";
		?>
		</select><br><br>
		Enter a price: <input type="text" name="price"><br><br>
		<input type="submit" value="Create a Booking">
	</form><br>
	<hr><br>

	<!-- 
		List all the info about the passengers including passport info in order by last name
	-->
	<h3>Those are all passengers in order by last name:</h3>
	<?php
		include 'getPassengers.php';
	?>
	<hr><br>

	<!-- 
		Select a passenger and see all of her/his booking
	-->
	<h3>Display a booking</h3>
	<form action="seeBookings.php" method="post">
		<p>Select a passenger and see all of her/his booking:</p>
		<select name="selectPassenger" id="selectPassenger">
		<option value="1">Select Here</option>
		<?php
		 include "selectPassenger.php";
		?>
		</select><br><br>
		<input type="submit" value="Submit">
	</form><br>
	<hr><br>

	<!-- 
		Allow user to delete a booking
	-->
	<h3>Delete a booking</h3>
	<form action="deleteBooking.php" method="post">
		Select a passenger:<select name="selectPassenger" id="selectPassenger">
		<option value="selection">Select Here</option>
		<?php
		 include "selectPassenger.php";
		?>
		</select><br><br>
		Select a trip: <select name="selectTrip" id="selectTrip">
		<option value="selection">Select Here</option>
		<?php
		 include "selectTrip.php";
		?>
		</select><br><br>
		<input type="submit" value="Delete Bus Trip" onclick="return confirm('Are you sure you want to delete this item')">
	</form><br>
	<hr><br>

	<!-- 
		List all the bus trips that don't any booking yet
	-->
	<h3>Those are all trips that don't any booking yet:</h3>
	<?php
		include 'getNonBookingTrip.php';
	?>
	<hr><br>



</body>
</html>