<?php include 'user_header.php';
$u_id=$_SESSION['user_id'];
extract($_GET);

if (isset($_POST['submit'])) {
	extract($_POST);
	$qin="INSERT INTO `Complaints` VALUES(NULL,'$u_id','$com','pending',CURDATE())";
	insert($qin);
	// code...
}
 ?>

<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br><center>
<center>
<form method="post">
	<h2>User Complaints</h2>
	<table class="table table-striped" style="width: 1000px; background: whitesmoke;  box-shadow: 2px 2px 5px rgba(0, 0, 0, 5)">
		<tr>
			<th>Complaint</th>
			<td><input type="text" name="com" required class="form-control"></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"><input type="submit" class="btn btn-success" name="submit" value="ADD"></td>
		</tr>
		
	</table>

	<table class="table  table-hover" style="width: 1000px; background: whitesmoke;  box-shadow: 2px 2px 5px rgba(0, 0, 0, 5)">
	<tr>

			<th>Complaint</th>
			<th>Date</th>
			<th>reply</th>
		</tr>
				<?php 

 $qview="SELECT * FROM `complaints` WHERE `user_id`='$u_id'";
 $result=select($qview);
 foreach ($result as $i) {
 	// code...

			 ?>
			<tr>
				<td><?php echo $i['complaint']; ?></td>
				
				<td><?php echo $i['date_time']; ?></td>	
				<td> <?php echo $i['reply']; ?></td>		
				
			</tr>

		<?php } ?>
	</table>
</form>
</center>
<?php include 'footer.php' ?>