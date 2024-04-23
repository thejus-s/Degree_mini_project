<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints and Reply</title>
    
    <!-- Link to external CSS file -->
    <link rel="stylesheet" type="text/css" href="/static/css/styles.css"> <!-- Replace with the actual path to your CSS file -->

    <style>
        /* Inline CSS styles can be added here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        table {
            width: 1000px;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        /* Add more styles as needed */
    </style>
</head>
<body>
    <?php include 'admin_header.php'; ?>
    <div class="Modern-Slider">
        <div class="item">
            <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
            <div class="text-content"><br></div>
        </div>
    </div>
    <br><br>
    <center>
        <h1>Complaints and Reply</h1><br>
        <form method="post">
            <table class="table">
                <tr>
                    <th>Sl.No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Complaint</th>
                    <th>Reply</th>
                </tr>
                <?php
                $q = "SELECT *,CONCAT(first_name,' ',last_name) AS username FROM complaints INNER JOIN users USING(user_id)";
                $res = select($q);
                $sino = 1;

                foreach ($res as $row) {
                ?>
                <tr>
                    <td><?php echo $sino; ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['complaint'] ?></td>
                    <td>
                        <?php
                        if ($row['reply'] == "pending") {?>
                        <input class="form-control" type="text" name="reply<?php echo $sino; ?>">
                        <input class="form-control" type="hidden" value="<?php echo $row['complaint_id'] ?>" name="complaint_id<?php echo $sino; ?>">
                        <input type="submit" class="btn btn-primary" name="submit<?php echo $sino; ?>">
                        <?php } else { ?>
                            <?php echo $row['reply'] ?>
                        <?php } ?>
                    </td>
                </tr>
                <?php
                if (isset($_POST['submit'.$sino])) {
                    $r = $_POST['reply'.$sino];
                    $c = $_POST['complaint_id'.$sino];

                    echo $q2 = "UPDATE `complaints` SET `reply`='$r' WHERE `complaint_id`='$c'";
                    update($q2);
                    // You can add success/failure handling or redirection here as needed.
                    alert("Update Successful");
                    return redirect('admin_view_complaints_and_reply.php');
                }
                $sino++;
                }
                ?>
            </table><br><br>
        </form>
    </center>
    <br><br>
    <?php include 'footer.php'; ?>
</body>
</html>
