<?php include 'turf_header.php';
$turf_id=$_SESSION['turf_id']; 
extract($_GET); ?>
<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br><center>
	<h1 style="font:400 35px 'Calibri','Arial';
  padding:20px;">MATCH SCHEDULING</h1>

	<table class="table" style="border-spacing: 1; 
  border-collapse: collapse;
  background:white; 
  border-radius:6px;
  overflow:hidden;
  max-width:800px; 
  width:100%;
  margin:0 auto;
  position:relative;">
		<tr>
			<th style="background:#00FA9A;">Sl.No</th>
			<th style="background:#00FA9A;">Customer Name</th>
			<th style="background:#00FA9A;">Selected day</th>
			<th style="background:#00FA9A;">Selected Time</th>
			<th style="background:#00FA9A;">Match info</th>
			<th></th>
			
		</tr>
			<?php
        $q = "SELECT *,concat(first_name,' ',last_name)as name FROM matches INNER JOIN bookings USING(book_id) INNER JOIN users USING(user_id) inner join slots using(slot_id) where turf_id='$turf_id'";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
		<tr>
			 <td><?php echo $sino++; ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['day'] ?></td>
                <td><?php echo $row['from_time'] ?>    <td><?php echo $row['to_time'] ?></td>
			

			<td><a class="btn btn-success" href="turf_match_detail.php?match_id=<?php echo $row['match_id'] ?>&user_id=<?php echo $row['user_id'] ?>">View Payment info</a></td>
		</tr>
		<?php
        }
        ?>
	</table>
	
</center><br><br>
<?php include 'footer.php'; ?>