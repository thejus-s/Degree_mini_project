<?php include 'admin_header.php'; ?>
<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
				<h2 align="center">Feedback</h2><br>
<center>
	<table class="table" style="width:800px">
		<tr>
			<th>Feedback ID</th>
			<th>User ID</th>
			<th>Feedback Description</th>
			<th>Reply Description</th>
			<th>Datetime</th>
		</tr>
		{% for row in data['feedback'] %}
		<tr>
			<td>{{row['feedback_id']}}</td>
			<td>{{row['user_id']}}</td>
        	<td>{{row['feedback_description']}}</td>
        	<td>{{row['reply_description']}}</td>
        	<td>{{row['Datetime']}}</td>
        </tr>
        {% endfor %}
	</table><br><br>
</center>
<?php include 'footer.php'; ?>