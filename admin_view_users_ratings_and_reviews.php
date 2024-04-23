<?php include 'admin_header.php'; ?>

<div class="Modern-Slider">
    <div class="item">
        <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br></div>
    </div>
</div>
<br><br>
<center>
    <h2>Ratings and Reviews</h2><br>
    <table class="table" style="width: 80%; text-align: center; margin: 0 auto;">
        <tr>
            <th>Sl.No</th>
            <th>Turf Name</th>
            <th></th>
        </tr>
        <?php
        $q = "SELECT *, CONCAT(owner_first_name,' ',owner_last_name) AS turf_name FROM turfs INNER JOIN login USING (login_id) WHERE usertype='turf'";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
            <tr>
                <td><?php echo $sino++; ?></td>
                <td><?php echo $row['turf_name'] ?></td>
                <td><a class="btn btn-success" href="admin_turf_rate.php?tid=<?php echo $row['turf_id'] ?>&tname=<?php echo $row['turf_name'] ?>">View Details</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
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
