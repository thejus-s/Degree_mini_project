<?php include 'admin_header.php'; ?>
<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br><center>
	<h1>Registered Customer Details</h1>
	<table class="table">
		<tr>
			<th>Sl.No</th>
			<th>Name</th>
			<th>House Name</th>
			<th>Place</th>
			<th>Pincode</th>
			<th>Phone</th>
			<th>Email</th>
		</tr>
			<?php 
           $q="select *,concat(first_name,' ',last_name)as name from users inner join login using (login_id)";
           $res=select($q);
           $sino=1;

           foreach ($res as $row) {?>
		<tr>
			<td><?php echo $sino++; ?></td>
			<td><?php echo $row['first_name'] ?></td>
				<td><?php echo $row['house_name'] ?></td>
					<td><?php echo $row['place'] ?></td>
						<td><?php echo $row['pincode'] ?></td>
							<td><?php echo $row['phone'] ?></td>
								<td><?php echo $row['email'] ?></td>
<!-- 			<td><a class="btn btn-success" href="?action=accept&tid={{row['login_id']}}">Accept</a></td>
 -->		
<!--  	{% if row['usertype']=='rejected' %}
			<td><a class="btn btn-success" href="?action=accept&tid={{row['login_id']}}">Approve</a></td>
			{% elif row['usertype']=='user' %}
			<td><a class="btn btn-danger" href="?action=reject&tid={{row['login_id']}}">Block</a></td>
			
 -->

  <?php }


			 ?>



		</tr>
	</table>
</center><br><br>
<?php include 'footer.php'; ?>