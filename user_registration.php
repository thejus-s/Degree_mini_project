<?php include 'homeheader.php'; 

if(isset($_POST['submit']))
{
	extract($_POST);
	$q="SELECT * FROM  `login`  WHERE `username`='$uname' AND `password`='$passs'";
	$res=select($q);
	if (sizeof($res)>0)
	{
	alert("The username or password you entered already Exists. Please choose a different username and password .");
    return redirect("user_registration.php");
 	 }

  else
  {
  	$q1="INSERT INTO `login` VALUES(NULL,'$uname','$passs','user')";
  	$log_id=insert($q1);
  	$q2="INSERT INTO `users` VALUES(NULL,'$log_id','$fname','$lname','$land_mark','$turf_place','$pincode','$phone','$email')";
  	insert($q2);
  	alert("your Registration Successfull. ");
    return redirect("login.php");
  }
	
}

 ?> 

<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br>
	<center>
		<br>
		<h1>NEW USER REGISTRATION</h1>
		<br><br>
	<form method="post" enctype="multipart/form-data">
	<table>
<tr>
	<td>
		<table><tr>
			<th>First Name</th>
			<td><input type="text" name="fname" required class="form-control"></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" name="lname" required class="form-control"></td>
		</tr>
		<tr>
			<th> Place</th>
			<td><input type="text" name="turf_place" pattern="[A-Za-z]+$" required class="form-control"></td>
		</tr>
		<tr>
			<th>House  Name</th>
			<td><input type="text" name="land_mark" required class="form-control"></td>
		</tr>
		<tr>
			<th>Pincode</th>
			<td><input type="text" name="pincode" required class="form-control" pattern="[0-9]{6}"></td>
		</tr>
		<tr>
			<th>Phone Number</th>
			<td><input type="text" name="phone" class="form-control" maxlength="10" pattern="[0-9]{10}" required oninput="validatePhone(this);">
    <span id="phoneAlert" style="color: red;"></span></td>
		</tr>
		<tr>
			<th>email</th>
		<td>	<input type="email" name="email" class="form-control" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
        <span id="emailAlert" style="color: red;"></span></td>
		</tr>
		<tr>
			<th>Username</th>
			<td><input type="text" name="uname" required class="form-control" pattern="[0-9a-zA-Z]{0,30}"></td>
		</tr>
		<tr>
    <th>Password</th>
    <td>
        <input type="password" name="passs" class="form-control" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$">
        <span id="pwdAlert" style="color: red;"></span>
    </td>
</tr>
<tr>
    <th>Tick to Confirm</th>
    <td>
        <input type="checkbox" name="tick" required>
        <label for="tick">I confirm the password requirements.</label>
    </td>
</tr><td><br></td></tr>
		<tr>
			<th align="center" colspan="2"><input class="btn btn-success" type="submit" name="submit" value="Register"></th>
		</tr>


	</table>
	</td>
	<td><div id="dvMap" style="width: 600px; height: 400px"></div></td>
</tr>
</table>
		
	</form>
	</center><br><br><br>

	<script>
    // function validatePin(input) {
    //     var pinValue = input.value;
    //     var pinAlert = document.getElementById('pinAlert');

    //     if (pinValue.length !== 6) {
    //         pinAlert.textContent = 'Pincode must be exactly 6 digits.';
    //     } else {
    //         pinAlert.textContent = '';
    //     }
    // }


      function validatePhone(input) {
        var phoneValue = input.value;
        var phoneAlert = document.getElementById('phoneAlert');

        if (phoneValue.length !== 10) {
            phoneAlert.textContent = 'Phone Number must be exactly 10 digits.';
        } else {
            phoneAlert.textContent = '';
        }
    }

     document.querySelector('input[name="email"]').addEventListener('input', function() {
        var emailValue = this.value;
        var emailAlert = document.getElementById('emailAlert');

        if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(emailValue)) {
            emailAlert.textContent = 'Enter a valid email address.';
        } else {
            emailAlert.textContent = '';
        }
    });


      document.querySelector('input[name="pwd"]').addEventListener('input', function() {
        var pwdValue = this.value;
        var pwdAlert = document.getElementById('pwdAlert');

        if (!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test(pwdValue)) {
            pwdAlert.textContent = 'Password must have at least one uppercase letter, one lowercase letter, one digit, and be at least 8 characters long.';
        } else {
            pwdAlert.textContent = '';
        }
    });
</script>
<?php include 'footer.php'; ?>