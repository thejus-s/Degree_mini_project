<?php include 'turf_header.php';
$turf_id=$_SESSION['turf_id']; 
extract($_GET);


if (isset($_POST['sm1'])) {
	extract($_POST);
	$dir = "facility_images/";
    $file = basename($_FILES['img1']['name']);
    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $target = $dir.uniqid("image_").".".$file_type;
    echo $target;
    move_uploaded_file($_FILES['img1']['tmp_name'], $target);
    // $dir = "image/";
	$q2="INSERT INTO `images` VALUES(NULL,'$turf_id','$target',now(),'game')";
	insert($q2);
	alert("game image Successfully added");
	return redirect('turf_add_images.php');

 } 


if (isset($_POST['sm2'])) {
	extract($_POST);
	$dir = "facility_images/";
    $file = basename($_FILES['img2']['name']);
    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $target1 = $dir.uniqid("image_").".".$file_type;
    move_uploaded_file($_FILES['img2']['tmp_name'], $target1);
    // $dir = "image/";
	$q3="INSERT INTO `images` VALUES(NULL,'$turf_id','$target1',now(),'infrastructure')";
	insert($q3);
	alert(" infrastructure image Successfully added");
	return redirect('turf_add_images.php');

 } 


if (isset($_POST['sm3'])) {
	extract($_POST);
	$dir = "facility_images/";
    $file = basename($_FILES['img3']['name']);
    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $target2 = $dir.uniqid("image_").".".$file_type;
    move_uploaded_file($_FILES['img3']['tmp_name'], $target2);
    // $dir = "image/";
	$q4="INSERT INTO `images` VALUES(NULL,'$turf_id','$target2',now(),'facility')";
	insert($q4);
	alert("facility image Successfully added");
	return redirect('turf_add_images.php');

 } 
  ?>

<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br><center>
	<h1>Make YOUR Gallery</h1>
<br><br>
		<table>
			<tr style="color:darkgrey">
				<th>Game Image</th><form method=post enctype="multipart/form-data">
				<td><input class="form-control" required="" type="file" name="img1"></td>
				<td><input class="btn btn-secondary" type="submit" name="sm1"></td></form>
			</tr>
			<tr><td><br><br></td></tr>
			<tr style="color:darkgrey">
				<th>Infrastructure Image</th><form method=post enctype="multipart/form-data">
				<td><input class="form-control" required="" type="file" name="img2"></td>
				<td><input class="btn btn-secondary" type="submit" name="sm2"></td></form>
			</tr>
			<tr><td><br><br></td></tr>
			<tr style="color:darkgrey">
				<th>Facility Image</th><form method=post enctype="multipart/form-data">
				<td><input class="form-control" required="" type="file" name="img3"></td>
				<td><input class="btn btn-secondary" type="submit" name="sm3"></td></form>
			</tr>
		</table>
<br><br>

<a class="btn btn-success" href="turf_gallery.php?image_type=game">Game</a>&nbsp;&nbsp;
<a class="btn btn-success" href="turf_gallery.php?image_type=infrastructure">Infrastructure</a>&nbsp;&nbsp;
<a class="btn btn-success" href="turf_gallery.php?image_type=facility">Facility</a>&nbsp;&nbsp;

<?php include 'footer.php'; ?>