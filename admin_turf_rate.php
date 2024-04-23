<?php include 'admin_header.php';
extract($_GET) ?>
<div class="Modern-Slider">
    <div class="item">
        <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br></div>
    </div>
</div>
<br><br>
<center>
    <h1>Reviews and Ratings</h1><br>
    <h3>Turf Name: <?php echo $tname ?></h3><br>
    <table class="table" style="width: 80%; text-align: center; margin: 0 auto;">
        <tr>
            <th>Sl.No</th>
            <th>User Name</th>
            <th>Rate</th>
            <th>Review</th>
        </tr>
        <?php
        $q = "SELECT *,CONCAT(first_name,' ',last_name) AS name FROM ratings INNER JOIN users USING(user_id) WHERE turf_id='$tid' ORDER BY rate";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
            <tr>
                <td><?php echo $sino++; ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['rate'] ?></td>
                <td><?php echo $row['review'] ?></td>
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

    /* Add more CSS styles as needed */
</style>

<?php include 'footer.php'; ?>
