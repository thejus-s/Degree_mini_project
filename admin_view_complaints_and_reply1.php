<?php include 'admin_header.php'; ?>
<div class="Modern-Slider">
          <div class="item">
                <img src="/static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br>
<center>
	<h1>Complaints and Reply</h1><br>
	<form method="post">
		<table class="table">
			<tr>
				<th>Sl.No</th>
				<th>Name</th>
				<th>Phone</th>
				<th>mail</th>
				<th>Complaint</th>
				<th>Reply</th>
			</tr>
			 <?php
        $q = "SELECT *,CONCAT(first_name,' ',last_name) AS username FROM complaints INNER JOIN users USING(user_id)";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
        	 ?>
			<tr>
				<td><?php echo $sino; ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['complaint'] ?></td>
				<td>
					<?php

          if ($row['reply'] == "pending") {?>
					<input class="form-control" type="text" name="reply<?php echo $sino; ?>">
					<input class="form-control" type="hidden" value="<?php echo $row['complaint_id'] ?>" name="complaint_id<?php echo $sino; ?>">
					<input type="submit" class="btn btn-primary" name="submit<?php echo $sino; ?>">

					 <?php } else {
                    ?>
                    <td><?php echo $row['reply'] ?></td>

                <?php }
                if (isset($_POST['submit'.$sino])) {
									extract($_POST);
									echo $r='$reply'.$sino;
									echo $c='$complaint_id'.$sino;

									echo$q2="UPDATE `Complaint` SET `reply`='$r' WHERE `complaint_id`='$c'";
									update($q2);
									// alert("Update Successfull");
									// return redirect('admin_complaints.php');
								 } 


                  $sino++;
                }

                ?>

				</td>
			</tr>
		</table><br><br>
	</form>

</center>
<br><br>
<?php include 'footer.php'; ?>