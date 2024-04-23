<?php include 'user_header.php';
extract($_GET); ?>

<div class="Modern-Slider">
    <div class="item">
        <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br></div>
    </div>
</div>
<br><br>
<center>
    <h2>View Details</h2>
    <br>
    <br>
    <div class="card-container">
        <?php
        $q = "SELECT *, CONCAT(owner_first_name,' ',owner_last_name) AS turf_name FROM turfs INNER JOIN login USING(login_id) inner join category USING(category_id) where category_id='$category_id'";
        $res = select($q);

        if (sizeof($res)>0) {
            foreach ($res as $row) {
            ?>
            <div class="card">
                <h3><?php echo $row['owner_first_name'] ?></h3>
                <p><strong>Owner Name:</strong> <?php echo $row['owner_last_name'] ?></p>
                <p><strong>Place:</strong> <?php echo $row['turf_place'] ?></p>
                <p><strong>Phone:</strong> <?php echo $row['phone'] ?></p>
                <p><strong>Email:</strong> <?php echo $row['email'] ?></p>
                <p><strong>Landmark:</strong> <?php echo $row['landmark'] ?></p>
                <p><strong>Pincode:</strong> <?php echo $row['pincode'] ?></p>
                <div class="btn-container">
                    <a class="btn btn-primary"
                       href="http://www.google.com/maps?q=<?php echo $row['latitude'] ?>,<?php echo $row['longitude'] ?>">Location</a>
                    <a class="btn btn-success" href="user_view_slots_and_amounts.php?tid=<?php echo $row['turf_id'] ?>&tname=<?php echo $row['turf_name'] ?>">Slots And Amounts</a>
                    <a class="btn btn-success" href="user_view_fecilities.php?turf_id=<?php echo $row['turf_id'] ?>&tname=<?php echo $row['turf_name'] ?>">View Facilities</a>
                    <a class="btn btn-success" href="user_add_rating.php?turf_id=<?php echo $row['turf_id'] ?>&tname=<?php echo $row['turf_name'] ?>">Add Rating</a>
                </div>
            </div>
        <?php } ?>
            
        <?php } else{ ?>

            <span>No more detilas available in this <?php echo $cate_name ?></span>
        <?php } ?>

        
    </div>
</center>

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
        height: 450px; /* Make the cards square by setting the height to the same as width */
        background-color: #fff; /* Add background color */
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-container {
        /* Add styles for the container of buttons */
        margin-top: 10px;
    }

    .btn-container a {
        /* Add spacing between anchor tags */
        display: block;
        margin-bottom: 10px;
    }

    .btn-primary {
        /* Add styles for the primary button */
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-success {
        /* Add styles for the success button */
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Add more CSS styles as needed */
</style>

<?php include 'footer.php'; ?>
