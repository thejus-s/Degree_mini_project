<?php include 'user_header.php';
// $turf_id=$_SESSION['turf_id']; 
extract($_GET); 

if (isset($_GET['image_type'])) {
    $imageType = $_GET['image_type'];
    // Now $imageType contains the value 'game' from the URL query parameter.
} else {
    // The 'image_type' parameter is not set in the URL.
}

?>
<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br><center>

 <!-- {% if data['img'] %} -->


<center>  <h3>Turf Name: <?php echo $tname ?></h3><br></center>
<br><br>

 <h1>


   
<?php 
if(  $image_type =="game"){ ?>

GAME

<?php    }
else if( $image_type =="infrastructure"){  ?>

  INFRASTRUCTURE

  <?php    }
else if( $image_type =="facility"){  ?>

  FACILITY

     <?php    }
 ?>


 </h1>


  <?php 

    $q="SELECT * FROM `images` WHERE turf_id ='$turf_id' and image_type='$imageType'";
      $res=select($q);

foreach ($res as $i) {
     ?>
     <td><a href="<?php echo $i ['image'] ?>"></a><img src="<?php echo $i ['image'] ?>" width="150" height="150"></a></td>
  <?php 

  } ?>
</center><br><br>
<?php include 'footer.php'; ?>