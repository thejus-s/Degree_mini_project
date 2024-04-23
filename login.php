<?php include 'homeheader.php'; 

 
  
if (isset($_POST['submit'])) 
{
	extract($_POST);
	



  





	$q="select * from login where username='$uname' and password='$pwd'";
	$res=select($q);

	if (sizeof($res)>0) {
		$_SESSION['logid']=$res[0]['login_id'];
		          $lid=$_SESSION['logid'];

		if ($res[0]['usertype']=="admin") 
		{
			return redirect('admin_home.php');
		}elseif($res[0]['usertype']=="turf")
		{
			$q="select * from turfs where login_id='$lid'";
			$r=select($q);
			if (sizeof($res)>0) {
				$_SESSION['turf_id']=$r[0]['turf_id'];
				$turf_id=$_SESSION['turf_id'];
			}

			
	      return redirect('turf_home.php');
        }elseif ($res[0]['usertype']=="user") {
        	$q="select * from users where login_id='$lid'";
        	$r=select($q);
        	 if (sizeof($res)>0) {
        		$_SESSION['user_id']=$r[0]['user_id'];
        		$_SESSION['email']=$r[0]['email'];

        		$user_id=$_SESSION['user_id'];
        		$email=$_SESSION['email'];
        		
        	}
        	return redirect('user_home.php');
        }else{
            alert('invalid username & password');
        }

	}

	      
	
}


 ?>
<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br><br>


<center>
	<h2>Login</h2>
	<form method="post">
        <table class="table" style="width: 500px">
            <tr>
                <td>Username</td>
                <td><input type="text" class="form-control" required name="uname"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <div style="position: relative;">
                        <input type="password" required class="form-control" name="pwd" id="password">
                        <!-- Add the eye icon for password visibility toggle -->
                        <span class="eye-icon" id="togglePassword">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
  <text x="10" y="30" font-size="20">&#128065;</text>
</svg>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input class="btn btn-success" type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>
	<script>
        // JavaScript to toggle password visibility
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('togglePassword');

        togglePasswordButton.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>

</center><br><br><br>
<?php include 'footer.php'; ?>