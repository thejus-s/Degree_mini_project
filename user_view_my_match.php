<?php include 'user_header.php';
$u_id=$_SESSION['user_id'];
extract($_GET)
?>
<div class="Modern-Slider">
    <div class="item">
        <img src="/static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br>
        </div>
    </div>
</div>
<br><br>
<center>
    <h1>My Match Request</h1>
    <br>
    <div class="card-container">
        <?php 
        $q="select *,concat(users.first_name,'',users.last_name) as user_name,concat(turfs.owner_first_name,'',turfs.owner_last_name) as owner_name from bookings inner join slots using(slot_id) inner join turfs using(turf_id) inner join matches using(book_id) inner join users on users.user_id=matches.opp_user_id where bookings.user_id ='$u_id' ";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
        ?>
        <div class="card">
            <h3>Name: <?php echo $row['user_name'] ?></h3>
            <p><strong>Owner Name:</strong> <?php echo $row['owner_name'] ?></p>
            <p><strong>Place:</strong> <?php echo $row['place'] ?></p>
            <p><strong>Pincode:</strong> <?php echo $row['pincode'] ?></p>
            <p><strong>Phone:</strong> <?php echo $row['phone'] ?></p>
            <p><strong>Email:</strong> <?php echo $row['email'] ?></p>
            <p style="color:red;"><strong>Status:</strong> <?php echo $row['status'] ?></p>
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

    /* Add more CSS styles as needed */
</style>

<?php include 'footer.php'; ?>
