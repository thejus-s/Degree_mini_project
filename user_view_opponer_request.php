<?php include 'user_header.php';
$u_id=$_SESSION['user_id'];
extract($_GET);

if (isset($_GET['update'])) {
    extract($_GET);
    $q = "update matches set status='accept' where match_id='$update'";
    update($q);
    alert('Successfully Accepted');
    return redirect('user_home.php');
}

if (isset($_GET['delete'])) {
    extract($_GET);
    $q = "update matches set status='rejected' where match_id='$delete'";
    update($q);
    alert('Successfully Rejected');
    return redirect('user_home.php');
}
?>

<div class="Modern-Slider">
    <div class="item">
        <img src="/static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br></div>
    </div>
</div>
<br><br>
<center>
    <h1>Opponent Request Details</h1>
    <br>
    <div class="card-container">
        <?php
        $q = "SELECT *, CONCAT(users.first_name, ' ', users.last_name) AS user_name, CONCAT(turfs.owner_first_name, ' ', turfs.owner_last_name) AS owner_name FROM bookings 
             INNER JOIN slots USING(slot_id) 
             INNER JOIN turfs USING(turf_id) 
             INNER JOIN matches USING(book_id) 
             INNER JOIN users ON users.user_id = bookings.user_id 
             WHERE opp_user_id ='$u_id'";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
            <div class="card">
                <h3>Name: <?php echo $row['user_name'] ?></h3>
                	<br>
                <p><strong>Owner Name:</strong> <?php echo $row['owner_name'] ?></p>
                <p><strong>Day:</strong> <?php echo $row['day'] ?></p>
                <p><strong>From time:</strong> <?php echo $row['from_time'] ?></p>
                <p><strong>To Time:</strong> <?php echo $row['to_time'] ?></p>

                <?php
                if ($row['status'] == "pending") {?>
                    <a class="btn btn-success" href="?update=<?php echo $row['match_id'] ?>">Accept</a>
                    <a class="btn btn-success" href="?delete=<?php echo $row['match_id'] ?>">Reject</a>
                <?php } else { ?>
                    <p><strong>Status:</strong> <?php echo $row['status'] ?></p>
                <?php }
                ?>
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
