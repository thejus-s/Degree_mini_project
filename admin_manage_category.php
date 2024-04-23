<?php include 'admin_header.php';

extract($_GET);


if (isset($_POST['submit'])) {
	extract($_POST);
	$q2="INSERT INTO `category` VALUES(NULL,'$fac')";
	insert($q2);
	alert(" Successfull");
	return redirect('admin_manage_category.php');
 } 


if (isset($_GET['dlt_id'])) {
	extract($_GET);
	echo$dlt_id="DELETE FROM `category` WHERE `category_id`='$dlt_id'";
	delete($dlt_id);
	alert("Deleted successfull");
	return redirect('admin_manage_category.php');
	// code...
}


if (isset($_POST['submit_update'])) {
	extract($_POST);	

	$q3="UPDATE `category` SET `category_name`='$fac' where `category_id`='$update_id' ";
	update($q3);
	alert("Update Successfull");
	return redirect('admin_manage_category.php');
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
			$qa="SELECT * FROM category WHERE category_id='$update_id'";
			$res=select($qa);
		 ?>


	<h2>Update Category</h2><br>
	<table>
		<tr>
			<td>Category Name</td>
			<td><input type="text" class="form-control" required="" name="fac" value=" <?php echo$res[0]['category_name'] ?>"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input class="btn btn-success" type="submit" name="submit_update" value="Update"></td>
		</tr>
	</table><br>

<?php  } 

else { ?>


	<h2>Add Category</h2><br>
	<table>
		<tr>
			<td>Category Name</td>
			<td><input type="text" required class="form-control" name="fac"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-primary" name="submit" value="Add"></td>
		</tr>
	</table>
	<?php } ?>
</form>
<br>

<h2>Category Details</h2><br>
<table class="table" style="width:500px">
	<tr>
		<th>Category Name</th>
	
		<th colspan="2"></th>
	</tr>
		<?php 

		$q="SELECT * FROM `category`";
    	$res=select($q);

foreach ($res as $i) {
		 ?>
	<tr>
		<td><?php echo $i ['category_name'] ?></td>
	</td>
				<td><a href="?update_id=<?php echo $i ['category_id'] ?>" class="btn btn-primary">Update</a></td>
				<td><a href="?dlt_id=<?php echo $i ['category_id'] ?>" class="btn btn-primary">Remove</a></td>
	</tr>
		<?php 

	} ?>
</table>
</center><br><br>
<?php include 'footer.php'; ?>