<?php include 'user_header.php'; 
extract($_GET);

$user_id=$_SESSION['user_id']; 
?>

<div class="Modern-Slider">
    <div class="item">
        <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br></div>
    </div>
</div>
<br><br>
<center>
    <h1>Slots Details</h1><br>
    <div class="card-container">
        <?php
        $q = "SELECT * from      category";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
            <div class="card">
                <h3>Slot <?php echo $sino++; ?></h3>
                <p><strong>Category:</strong> <?php echo $row['category_name'] ?></p>
                <a class="btn btn-success" href="user_view_turf.php?category_id=<?php echo $row['category_id'] ?>&cate_name=<?php echo $row['category_name'] ?>">View Details</a>
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

    h1 {
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

    .card a {
        /* Add spacing between anchor tags */
        margin-top: 10px;
        display: block;
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
    }

    /* Add more CSS styles as needed */
</style>

<?php include 'footer.php'; ?>
