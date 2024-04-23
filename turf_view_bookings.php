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
  padding:20px;">VIEW BOOKING DETAILS</h1>
	<!-- {% if data['booking'] %} -->
	<table class="table" style="border-spacing: 1; 
  border-collapse: collapse;
  background:white; 
  border-radius:6px;
  overflow:hidden;
  max-width:1000px; 
  width:100%;
  margin:0 auto;
  position:relative;">
		<tr>
			<th style="background:#00FA9A;">Sl.No</th>
			<th style="background:#00FA9A;">Customer Name</th>
			<th style="background:#00FA9A;">Selected day</th>
			<th style="background:#00FA9A;">Selected Time</th>
			<th style="background:#00FA9A;">Selected date</th>
			<th style="background:#00FA9A;">Status</th>
			<th style="background:#00FA9A;">Payment details</th>
			
		</tr>
		<?php
        $q = "select *,concat(first_name,' ',last_name)as name,bookings.date_time as dt from bookings inner join users using(user_id) inner join slots using(slot_id) where turf_id='$turf_id'";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
		<tr>
			 <td><?php echo $sino++; ?></td>
       <td><?php echo $row['name'] ?></td>
       <td><?php echo $row['day'] ?></td>
      	<td><?php echo $row['from_time'] ?>  <?php echo $row['to_time'] ?></td>
      	<td><?php echo $row['date_time'] ?></td>
      	<td><?php echo $row['status'] ?></td>
			<td><a class="btn btn-success" href="turf_view_payment.php?book_id=<?php echo $row['book_id'] ?>">View Payment info</a></td>
		</tr>
		<?php
        }
        ?>
	</table>
<!-- 	{% else %}<br><br>
	<h2 style="color: orange">No Booking History</h2>
	{% endif %} -->
<br>
<!-- {% if data['ct'] < 3%}
<p style="color:black;font-size: 15px; font:'Calibri','Arial'">TOTAL BOOKING FOR THE LAST WEEK:{{data['ct']}}</p>
<p style="color: red;font-size: 15px;font:'Calibri','Arial'">"Attention Turf Owner! We noticed a decrease in bookings this week. Boost your turf's appeal with special offers and promotions to attract more customers and fill up your schedule!"</p>
{% else %}
<p style="color: green;font-size: 15px; font:'Calibri','Arial'">"Congratulations! Your turf is in high demand, and bookings have surged this week. Keep up the excellent work and ensure your facilities are ready to provide an outstanding experience for all our customers!"</p>
{% endif %}
<br> -->
<!-- {% if data['booking'] %}
<p>Total Bookings for the Last Week: {{ data['booking']|length }}</p>
{% if data['booking']|length < 10 %}
<p style="color: red;">Low Booking for the Last Week</p>
{% else %}
<p style="color: green;">Great Week! High Booking for the Last Week</p>
{% endif %}   
{% endif %}
 -->



</center><br><br>
<?php include 'footer.php'; ?>