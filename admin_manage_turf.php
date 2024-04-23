<?php include 'admin_header.php';
extract($_GET);
if (isset($_GET['update'])) {
    extract($_GET);
    $q = "update login set usertype='turf' where login_id='$update'";
    update($q);
    alert('Successfully Accepted');
    return redirect('admin_manage_turf.php');
}

if (isset($_GET['delete'])) {
    extract($_GET);
    $q = "update login set usertype='rejected' where login_id='$delete'";
    update($q);
    alert('Successfully Rejected');
    return redirect('admin_manage_turf.php');
}
?>

<div class="Modern-Slider">
    <div class="item">
        <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br></div>
    </div>
</div>
<br><br>
<center>
    <h2>PROPERTY VERIFICATION</h2>
    <br>
    <br>

    <table class="table">
        <tr>
            <th>Sl.No</th>
            <th>Category</th>
            <th>Property Name</th>
            <th>Place</th>
            <th>Phone</th>
            <!--<th>Email</th> -->
            <th>Landmark</th>
            <th>Pincode</th>
            <th>Location</th>
            <!-- <th>Status</th> -->
        </tr>
        <?php
        $q = "SELECT *,CONCAT(owner_first_name,' ',owner_last_name) AS turf_name FROM turfs INNER JOIN login USING(login_id) inner join category using(category_id)";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
            <tr>
                <td><?php echo $sino++; ?></td>
                <td><?php echo $row['category_name'] ?></td>
                <td><?php echo $row['turf_name'] ?></td>
                <td><?php echo $row['turf_place'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <!--<td><?php echo $row['email'] ?></td>-->
                <td><?php echo $row['landmark'] ?></td>
                <td><?php echo $row['pincode'] ?></td>
                <td><a class="btn btn-primary"
                       href="http://www.google.com/maps?q=<?php echo $row['latitude'] ?>,<?php echo $row['longitude'] ?>">Location</a>
                </td>

                <?php

                if ($row['usertype'] == "pending") {?>
                    <td><a class="btn btn-success" href="?update=<?php echo $row['login_id'] ?>">Accept</a></td>
                    <td><a class="btn btn-success" href="?delete=<?php echo $row['login_id'] ?>">Reject</a></td>
                <?php } else {
                    ?>
                    <!-- <td><?php echo $row['usertype'] ?></td> -->

                <?php }
                }

                ?>
            </tr>
    </table>
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

    table {
        /* Add styles for the table */
        width: 80%;
        border-collapse: collapse;
        margin: 0 auto;
        background-color: #fff; /* Add background color */
    }

    table th,
    table td {
        /* Add styles for table header and table data cells */
        border: 1px solid #ccc;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2; /* Add background color for table header */
    }

    .btn-primary {
        /* Add styles for the primary button */
        background-color: #007bff;
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
