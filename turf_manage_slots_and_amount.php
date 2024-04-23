<?php include 'turf_header.php';
$turf_id=$_SESSION['turf_id']; 
extract($_GET);


if (isset($_POST['submit'])) {
	extract($_POST);
	$q2="INSERT INTO `slots` VALUES(NULL,'$turf_id','$day','$ftime','$ttime','$amt','$date_time',Now())";
	insert($q2);
	alert(" Successfull");
	return redirect('turf_manage_slots_and_amount.php');
 } 


if (isset($_GET['dlt_id'])) {
	extract($_GET);
	echo$dlt_id="DELETE FROM `slots` WHERE `slot_id`='$dlt_id'";
	delete($dlt_id);
	alert("Deleted successfull");
	return redirect('turf_manage_slots_and_amount.php');
	// code...
}


if (isset($_POST['submit_update'])) {
	extract($_POST);
	$q3="UPDATE `slots` SET `day`='$day',from_time='$ftime',date_time='$date_time',date=now(),to_time='$ttime',amount='$amt' where `slot_id`='$update_id' ";
	update($q3);
	alert("Update Successfull");
	return redirect('turf_manage_slots_and_amount.php');
}
 ?>
<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br><center>
	<form method="post" enctype="multipart/form-data">
	<?php 


		if (isset($_GET['update_id'])) {
			$qa="SELECT * FROM slots WHERE slot_id='$update_id'";
			$res=select($qa);
		 ?>
		 <h1>Update Slots and Amount</h1><br>
	<table>
		<tr>
			<td>Date</td>
			<td><input type="date" value=" <?php echo$res[0]['date_time'] ?>" required class="form-control" name="date_time"></td>
		</tr>
		<tr>
			<td>Day</td>
			<td>
				<select required="" class="form-control" name="day">
					<option><?php echo$res[0]['day'] ?></option>
					<option>Sunday</option>
					<option>Monday</option>
					<option>Tuesday</option>
					<option>Wednseday</option>
					<option>Thursday</option>
					<option>Friday</option>
					<option>Saturday</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>From Time</td>
			<td><input type="time" value=" <?php echo$res[0]['from_time'] ?>" required class="form-control" name="ftime"></td>
		</tr>
		<tr>
			<td>To Time</td>
			<td><input type="time" value=" <?php echo$res[0]['to_time'] ?>" required class="form-control" name="ttime"></td>
		</tr>
		<tr>
			<td>Amount</td>
<td><input type="text" value="<?php echo $res[0]['amount'] ?>" class="form-control" required name="amt" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
</tr>

		<!-- <tr>
			<td>Amount</td>
			<td><input type="text" pattern="[0-9]{10}" value=" <?php echo$res[0]['amount'] ?>" class="form-control" required name="amt"></td>
		</tr> -->
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="submit_update" value="Update"></td>
		</tr>
	</table>
<?php  } 

else { ?>
	<h1>Add Slots and Amount</h1><br><br>
	<table>
		<tr>
			<td>Date</td>
			<td><input type="date" required class="form-control" name="date_time"></td>
		</tr>
		<tr>
			<td>Day</td>
			<td>
				<select required="" class="form-control" name="day">
					<option>Sunday</option>
					<option>Monday</option>
					<option>Tuesday</option>
					<option>Wednseday</option>
					<option>Thursday</option>
					<option>Friday</option>
					<option>Saturday</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>From Time</td>
			<td><input type="time" required class="form-control" name="ftime"></td>
		</tr>
		<tr>
			<td>To Time</td>
			<td><input type="time" required class="form-control" name="ttime"></td>
		</tr>
		<tr>
			<td>Amount</td>
			<td><input type="number" class="form-control" required name="amt"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-primary" name="submit" value="Add"></td>
		</tr>
	</table>
	<?php } ?>
</form>

<br>

<h2>Slots Details</h2><br>
<table class="table" style="width:750px; text-align: center">
	<tr>
		
		<th>Date</th>
		<th>Day</th>
		<th>From Time</th>
		<th>To Time</th>
		<th>Amount</th>
		<th>Update time</th>
		<th colspan="3"></th>
	</tr>
	<?php 

		$q="SELECT * FROM `slots` WHERE turf_id ='$turf_id'";
    	$res=select($q);

foreach ($res as $i) {
		 ?>
	<tr>
		<td><?php echo $i ['date_time'] ?></td>
		<td><?php echo $i ['day'] ?></td>
		<td><?php echo $i ['from_time'] ?></td>
		<td><?php echo $i ['to_time'] ?></td>
		<td><?php echo $i ['amount'] ?></td>
		<td><?php echo $i ['date'] ?></td>
	<td><a href="?update_id=<?php echo $i ['slot_id'] ?>" class="btn btn-primary">Update</a></td>
	<td><a href="?dlt_id=<?php echo $i ['slot_id'] ?>" class="btn btn-primary">Remove</a></td>
	</tr>
		<?php 

	} ?>
</table>

</center><br><br>
<?php include 'footer.php'; ?>