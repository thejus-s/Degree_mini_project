<?php include 'turf_header.php';
$turf_id=$_SESSION['turf_id']; 
extract($_GET); ?>

<!-- <style type="text/css">
	th{
		text-align: right;
	}
</style> -->
<style>


</style>





<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br>
<center>
	<h1 style="font:400 35px 'Calibri','Arial';
  padding:20px;">TURF MATCH DETAILS</h1>
	
	<!-- <h4>{{ data['user'][0]['name'] }} V/S {{data['match'][0]['name']}}</h4><BR> -->
	<table style="border-collapse: collapse; width: 73%; border: 1px solid #ccc;">

<?php
$qry = "SELECT *, CONCAT(first_name, ' ', last_name) AS name, bookings.date_time AS dt FROM matches INNER JOIN bookings USING(book_id) INNER JOIN users ON users.user_id = matches.opp_user_id INNER JOIN slots USING(slot_id) WHERE match_id = '$match_id' AND matches.status = 'accepted'";
$match = select($qry);

// // Check if there are rows in the result
// if ($result && count($result) > 0) {
//     foreach ($result as $row) {
//         // Access and display individual fields from the row
//         echo "Name: " . $row['name'] . "<br>";
//         echo "Date and Time: " . $row['dt'] . "<br>";
//         // Add more fields as needed
//     }
// } else {
//     // Handle the case where no results were found
//     echo "No results found.";
// }
?>


		<tr>
			<th >Selected Day</th>
			<td>:  <?php echo $match[0]['day'] ?></td>
		</tr>
		<tr>
			<th>Selected Time</th>
			<td>: <?php echo $match[0]['from_time'] ?>  to <?php echo $match[0]['to_time'] ?></td>
		</tr>
		<tr>
			<th>Amount</th>
			<td>:  <?php echo $match[0]['amount'] ?></td>
		</tr>
		<tr>
			<th>Match Updated date</th>
			<td>: 	 <?php echo $match[0]['dt'] ?></td>
		</tr>
	</table>
	<br>

	<div class="container">
	<div class="table">
	<div class="table-header">



<?php
$qry1 = "select *,concat(first_name,' ',last_name)as name from users where user_id='$user_id'";
$user = select($qry1);

// // Check if there are rows in the result
// if ($result && count($result) > 0) {
//     foreach ($result as $row) {
//         // Access and display individual fields from the row
//         echo "Name: " . $row['name'] . "<br>";
//         echo "Date and Time: " . $row['dt'] . "<br>";
//         // Add more fields as needed
//     }
// } else {
//     // Handle the case where no results were found
//     echo "No results found.";
// }
?>



	<table  style="border-collapse: collapse; width: 100%; border: 1px solid #ccc;">
		<tr>
			<th  style="border: 1px solid #ccc; padding: 8px; background-color: #00FA9A;">USER</th>
			<th style="border: 1px solid #ccc; padding: 8px; background-color: #00FA9A;">OPPONENT</th>
			</tr>
		<tr>



			<th style="border: 1px solid #ccc; padding: 8px; background-color: #f2f2f2;"> <?php echo $user[0]['name'] ?>  </th>
			<th style="border: 1px solid #ccc; padding: 8px; background-color: #f2f2f2;"><?php echo $match[0]['name'] ?></th>
		</tr>
		<tr>
			<td  style="border: 1px solid #ccc; padding: 8px;"><?php echo $user[0]['house_name'] ?> </td>
			<td  style="border: 1px solid #ccc; padding: 8px;"> <?php echo $match[0]['house_name'] ?></td>
		</tr>
		<tr>
			<td  style="border: 1px solid #ccc; padding: 8px;"><?php echo $user[0]['place'] ?></td>
			<td  style="border: 1px solid #ccc; padding: 8px;"> <?php echo $match[0]['house_name'] ?></td>
		</tr>
		<tr>
			<td  style="border: 1px solid #ccc; padding: 8px;"><?php echo $user[0]['pincode'] ?></td>
			<td  style="border: 1px solid #ccc; padding: 8px;"><?php echo $match[0]['house_name'] ?></td>
		</tr>
		<tr>
			<td  style="border: 1px solid #ccc; padding: 8px;"> <?php echo $user[0]['email'] ?></td>
			<td style="border: 1px solid #ccc; padding: 8px;"><?php echo $match[0]['house_name'] ?></td>
		</tr>
		<tr>
			<td style="border: 1px solid #ccc; padding: 8px;"><?php echo $user[0]['phone'] ?></td>
			<td style="border: 1px solid #ccc; padding: 8px;"><?php echo $match[0]['house_name'] ?></td>
		</tr>
	</table>

</center><br><br>
<?php include 'footer.php'; ?>