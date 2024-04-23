<?php include 'admin_header.php'; 

extract($_GET);

?>


<div class="Modern-Slider">
    <div class="item">
        <img src="/static/assets/images/slide-01.jpg" width="100%" height="70px">
        <div class="text-content"><br></div>
    </div>
</div>
<br><br>
<center>
    <h1>Slots Details</h1><br>
    <h3>Turf Name: <?php echo $tname ?></h3><br>
    <table class="table" style="width: 80%; text-align: center; margin: 0 auto;">
        <tr>
            <th>Sl.No</th>
            <th>Day</th>
            <th>From Time</th>
            <th>To Time</th>
            <th>Amount</th>
            <th>Updated Date</th>
        </tr>
        <?php
        $q = "SELECT *, CONCAT(owner_first_name,' ',owner_last_name) AS turf_name FROM slots INNER JOIN turfs USING(turf_id) WHERE turf_id='$tid'";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
            <tr>
                <td><?php echo $sino++; ?></td>
                <td><?php echo $row['day'] ?></td>
                <td><?php echo $row['from_time'] ?></td>
                <td><?php echo $row['to_time'] ?></td>
                <td><?php echo $row['amount'] ?></td>
                <td><?php echo $row['date_time'] ?></td>
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
