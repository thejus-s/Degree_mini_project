<?php include 'user_header.php';
extract($_GET);
?>

<div class="Modern-Slider">
    <div class="item">
        <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br></div>
    </div>
</div>
<br><br>
<center>
    <form method="post" enctype="multipart/form-data">
        <br>

        <h2>Facility Details</h2><br>
        <h3>Turf Name: <?php echo $tname ?></h3><br>
        <div class="card-container">
            <?php
            $q = "SELECT * FROM `facilities` WHERE turf_id ='$turf_id'";
            $res = select($q);
            $sino = 1;

            foreach ($res as $i) {
                ?>
                <div class="card">
                    <h3>Facility <?php echo $sino++; ?></h3>
                    <p><strong>Facility:</strong> <?php echo $i['facility'] ?></p>
                    <p><strong>Description:</strong> <?php echo $i['description'] ?></p>
                    <div class="facility-image">
                        <img src="<?php echo $i['image'] ?>" width="100" height="100">
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </form>
</center><br><br>
<style>
    /* Add your CSS styles here */

    .Modern-Slider {
        /* Add styles for your slider */
    }

    .Modern-Slider .item {
        /* Add styles for individual slider items */
    }

    h2 {
        /* Add styles for the heading */
        color: #333;
        font-size: 28px;
    }

    h3 {
        /* Add styles for the subtitle */
        color: #777;
        font-size: 18px;
    }

    .card-container {
        /* Add styles for the card container */
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .card {
        /* Add styles for individual cards */
        border: 1px solid #ccc;
        padding: 20px;
        width: 300px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .facility-image {
        /* Add styles for the facility image */
        text-align: center;
        margin-top: 10px;
    }

    .facility-image img {
        /* Add styles for the facility image */
        max-width: 100%;
        max-height: 100%;
    }

    /* Add more CSS styles as needed */
</style>

<?php include 'footer.php'; ?>
