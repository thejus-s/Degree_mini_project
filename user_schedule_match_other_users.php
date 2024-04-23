<?php include 'user_header.php';
$u_id=$_SESSION['user_id'];

extract($_GET);
if (isset($_GET['opponer_id'])) {
    extract($_GET);
    $q="SELECT * FROM `matches` WHERE `opp_user_id`='$opponer_id' AND `date`=CURDATE()";
    $res=select($q);
    if (sizeof($res)>0)
    {
        alert("the opponent is already in a match.");
        return redirect("user_home.php");
    }
    else {
        $qin = "INSERT INTO `matches` VALUES(NULL,'$book_id','$opponer_id','pending',CURDATE())";
        insert($qin);
        alert("your opponent request  Successfull. ");
        return redirect("user_home.php");
    }
}
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
    <h1>Team Details</h1>
    <div class="card-container">
        <?php
        $q = "SELECT *, CONCAT(users.first_name,' ',users.last_name) AS name FROM users WHERE login_id!='$u_id'";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
            <div class="card">
                <h3><?php echo $row['name'] ?></h3>
                <p><strong>Place:</strong> <?php echo $row['place'] ?></p>
                <p><strong>Pincode:</strong> <?php echo $row['pincode'] ?></p>
                <p><strong>Phone:</strong> <?php echo $row['phone'] ?></p>
                <p><strong>Email:</strong> <?php echo $row['email'] ?></p>
                <a class="btn btn-success" href="?opponer_id=<?php echo $row['user_id'] ?>&book_id=<?php echo $book_id; ?>">Request Match</a>
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
