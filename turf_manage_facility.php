<?php include 'turf_header.php';
$turf_id=$_SESSION['turf_id']; 
extract($_GET);


if (isset($_POST['submit'])) {
	extract($_POST);
	$dir = "facility_images/";
    $file = basename($_FILES['img']['name']);
    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $target = $dir.uniqid("image_").".".$file_type;
    echo $target;
    move_uploaded_file($_FILES['img']['tmp_name'], $target);
    // $dir = "image/";
	$q2="INSERT INTO `facilities` VALUES(NULL,'$turf_id','$fac','$des','$target',curdate())";
	insert($q2);
	alert(" Successfull");
	return redirect('turf_manage_facility.php');
 } 


if (isset($_GET['dlt_id'])) {
	extract($_GET);
	echo$dlt_id="DELETE FROM `facilities` WHERE `facility_id`='$dlt_id'";
	delete($dlt_id);
	alert("Deleted successfull");
	return redirect('turf_manage_facility.php');
	// code...
}


if (isset($_POST['submit_update'])) {
	extract($_POST);
	$dir = "facility_images/";
    $file = basename($_FILES['img']['name']);
    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $target1 = $dir.uniqid("image_").".".$file_type;
    move_uploaded_file($_FILES['img']['tmp_name'], $target1);
    // $dir = "image/";

	$q3="UPDATE `facilities` SET `facility`='$fac',description='$des',date=curdate(),image='$target1' where `facility_id`='$update_id' ";
	update($q3);
	alert("Update Successfull");
	return redirect('turf_manage_facility.php');
}
 ?>






<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br><center>
	<h2>Manage Facilities</h2>
<form method="post" enctype="multipart/form-data">

		<?php 


		if (isset($_GET['update_id'])) {
			$qa="SELECT * FROM facilities WHERE facility_id='$update_id'";
			$res=select($qa);
		 ?>


	<h2>Update Facility</h2><br>
	<table>
		<tr>
			<td>Facility Name</td>
			<td><input type="text" class="form-control" required="" name="fac" value=" <?php echo$res[0]['facility'] ?>"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" value=" <?php echo$res[0]['description'] ?>" required class="form-control" name="des"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" value="<?php echo$res[0]['image'] ?>" name="img" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input class="btn btn-success" type="submit" name="submit_update" value="Update"></td>
		</tr>
	</table><br>

<?php  } 

else { ?>


	<h2>Add Facility</h2><br>
	<table>
		<tr>
			<td>Facility Name</td>
			<td><input type="text" required class="form-control" name="fac"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" required class="form-control" name="des"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="img" required class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-primary" name="submit" value="Add"></td>
		</tr>
	</table>
	<?php } ?>
</form>
<br>

<h2>Facility Details</h2><br>
<table class="table" style="width:500px">
	<tr>
		<th>Sl.No</th>
		<th>Facility</th>
		<th>Description</th>
		<th>Image</th>
		<th>Updated date</th>
		<th colspan="2"></th>
	</tr>
		<?php 

		$q="SELECT * FROM `facilities` WHERE turf_id ='$turf_id'";
    	$res=select($q);

foreach ($res as $i) {
		 ?>
	<tr>
		<td><?php echo $i ['facility'] ?></td>
		<td><?php echo $i ['description'] ?></td>
		<td><a href="<?php echo $i ['image'] ?>"></a><img src="<?php echo $i ['image'] ?>" width="50" height="50"></a></td>
				<td><a href="?update_id=<?php echo $i ['facility_id'] ?>" class="btn btn-primary">Update</a></td>
				<td><a href="?dlt_id=<?php echo $i ['facility_id'] ?>" class="btn btn-primary">Remove</a></td>
	</tr>
		<?php 

	} ?>
</table>
</center><br><br>
<?php include 'footer.php'; ?>