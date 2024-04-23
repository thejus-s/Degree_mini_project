<?php include 'user_header.php';
$u_id = $_SESSION['user_id'];
extract($_GET);

if (isset($_POST['submit'])) {
    extract($_POST);
    $qin = "INSERT INTO `feedbacks` VALUES(NULL,'$u_id','$turf_id','$fee','$dis',Now())";
    insert($qin);
}
?>

<style>
    /* Add your CSS styles here */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .feedback-container {
        width: 100%;
        background: whitesmoke;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        padding: 20px;
        margin-top: 20px;
    }

    .feedback-item {
        margin-bottom: 20px;
    }

    .form-container {
        width: 100%;
        background: #fff;
        padding: 20px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        border-radius: 5px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
    }

    .center-text {
        text-align: center;
    }
</style>

<div class="container">
    <div class="Modern-Slider">
        <div class="item">
            <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
            <div class="text-content"><br></div>
        </div>
    </div>

    <div class="form-container">
        <form method="post">
            <h2 class="center-text">Dear Customer,</h2>
            <p class="center-text">Thank you for Using <strong><?php echo $tname ?>.</strong> We would like to know how we performed. Please spare some moments to give us your valuable feedback as it will help us in improving our service.</p>

            <div class="form-group">
                <label for="fee">Feedback:</label>
                <input type="text" name="fee" required class="form-control">
            </div>
            <div class="form-group">
                <label for="dis">Description:</label>
                <input type="text" name="dis" required class="form-control">
            </div>
            <div class="center-text">
                <input type="submit" class="btn btn-success" name="submit" value="ADD">
            </div>
        </form>
    </div>

    <div class="feedback-container">
        <h2>Your Feedback:</h2>
        <?php
        $qview = "SELECT * FROM `feedbacks` WHERE `user_id`='$u_id' and turf_id='$turf_id'";
        $result = select($qview);
        foreach ($result as $i) {
        ?>
            <div class="feedback-item">
                <p><strong>Complaint:</strong> <?php echo $i['title']; ?></p>
                <p><strong>Description:</strong> <?php echo $i['description']; ?></p>
                <p><strong>Date:</strong> <?php echo $i['date_time']; ?></p>
            </div>
        <?php } ?>
    </div>
</div>

<?php include 'footer.php' ?>
