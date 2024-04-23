<?php include 'user_header.php';
$user_id = $_SESSION['user_id'];
extract($_GET);

if (isset($_GET['cancel'])) {
    extract($_GET);
    $q = "UPDATE `bookings` SET `status` ='cancel' WHERE `book_id`='$cancel'";
    update($q);
    alert('Successfully Cancel');
    return redirect('user_view_booking.php');
}
?>

<div class="table">
    <div class="item">
        <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br></div>
    </div>
</div>
<br><br>

<center>
    <h1 style="font:400 35px 'Calibri', 'Arial'; padding:20px;">VIEW BOOKING DETAILS</h1>

    <div class="table-list-container">
        <?php
        $q = "SELECT *, CONCAT(turfs.owner_first_name, ' ', turfs.owner_last_name) AS owner_name FROM bookings 
             INNER JOIN slots USING(slot_id) 
             INNER JOIN turfs USING(turf_id) 
             WHERE user_id='$user_id'";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
            <div class="list-item">
                <h3>Turf Name: <?php echo $row['owner_name'] ?></h3>
                <ul>
                    <li><strong>Selected day:</strong> <?php echo $row['day'] ?></li>
                    <li><strong>Selected Time:</strong> <?php echo $row['from_time'] ?> to <?php echo $row['to_time'] ?></li>
                    <li><strong>Status:</strong> <?php echo $row['status'] ?></li>
                    <?php
                    if ($row['status'] == "paid") {
                        ?>
                        <li><a class="btn btn-success"
                               href="user_schedule_match_other_users.php?book_id=<?php echo $row['book_id'] ?>">View Teams</a>
                        </li>
                        <li><a class="btn btn-success" href="?cancel=<?php echo $row['book_id'] ?>">Cancel Booking</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <?php
        }
        ?>
    </div>
</center>
<br><br>

<style>
/* Add your CSS styles here */

.Modern-slider {
    /* Add styles for your slider */
}

.Modern-Slider .item {
    /* Add styles for individual slider items */
}

h1 {
    /* Add styles for the heading */
    font: 400 35px 'Calibri', 'Arial';
    color: #333;
    padding: 20px;
}

.Table-list-container {
    /* Center the list container horizontally */
    display: table;
    justify-content: table;
    align-items: center;
}

.list-item {
    /* Add styles for individual list items */
    border: 1px solid #ccc;
    padding: 20px;
    width: 300px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 10px 0;
    text-align: center; /* Center list item content */
}

.list-item ul {
    /* Style the list within each list item */
    list-style: none;
    padding: 0;
    text-align: left;
}

.list-item li {
    /* Style list items within each list */
    margin: 5px 0;
}

.list-item a {
    /* Style the buttons within each list item */
    display: table;
    text-align: center;
    margin-top: 10px;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-success {
    /* Add styles for the success button */
    background-color: #4CAF50;
    color: white;
    border: none;
    font-size: 16px;
}

/* Add more CSS styles as needed */
</style>

<?php include 'footer.php'; ?>