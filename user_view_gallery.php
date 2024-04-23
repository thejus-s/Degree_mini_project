<?php include 'user_header.php'; ?>
<div class="Modern-Slider">
    <div class="item">
        <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br></div>
    </div>
</div>
<br><br>
<center>
    <h2>Slots Details</h2><br>
    <div class="card-container">
        <?php
        $q = "SELECT *,owner_first_name AS turf_name FROM turfs INNER JOIN login USING (login_id) WHERE usertype='turf'";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
            <div class="card">
                <div class="card-header">
                    <h3><?php echo $row['turf_name'] ?></h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-success" href="user_view_turf_gallery.php?turf_id=<?php echo $row['turf_id'] ?>&image_type=game&tname=<?php echo $res[0]['turf_name'] ?>">Game</a>
                    <a class="btn btn-success" href="user_view_turf_gallery.php?turf_id=<?php echo $row['turf_id'] ?>&image_type=infrastructure&tname=<?php echo $res[0]['turf_name'] ?>">Infrastructure</a>
                    <a class="btn btn-success" href="user_view_turf_gallery.php?turf_id=<?php echo $row['turf_id'] ?>&image_type=facility&tname=<?php echo $res[0]['turf_name'] ?>">Facility</a>
                </div>
                <div class="card-footer">
                    <a class="btn btn-success feedback-btn" href="user_send_feedback.php?turf_id=<?php echo $row['turf_id'] ?>&tname=<?php echo $row['turf_name'] ?>">Add Feedback</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</center>
<br><br>

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
        font-size: 24px;
    }

    .card-container {
        /* Add styles for the card container */
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        /* Add styles for the individual card */
        border: 1px solid #ccc;
        border-radius: 5px;
        margin: 10px;
        max-width: 300px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .card-header {
        /* Add styles for the card header */
        background-color: #f2f2f2;
        padding: 10px;
        text-align: center;
    }

    .card-body {
        /* Add styles for the card body */
        padding: 10px;
        text-align: center;
    }

    .card-footer {
        /* Add styles for the card footer */
        padding: 10px;
        text-align: center;
    }

    .btn-success {
        /* Add styles for the success button */
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px; /* Add space around the buttons */
    }

    .feedback-btn {
        /* Style for the feedback button */
        background-color: #3498db; /* Change the color for the feedback button */
    }

    /* Add more CSS styles as needed */
</style>

<?php include 'footer.php'; ?>
