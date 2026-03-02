<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Status</title>
    <link rel="stylesheet" href="style.css">

    <?php

        $conn = mysqli_connect("localhost","root","","cybercafe_db");

        if($conn)
        {
            //echo "connected";
        }
        else
        {
            echo "failed to connect";
        }

        $q1 = "SELECT * FROM computer";
        $r1 = mysqli_query($conn,$q1);

        $user = $_GET['username'];
    ?>

</head>
<body>
    <div>
        <h1>Available Computers</h1>
        <button style="width: fit-content"; onclick="location.href='user_dashboard.php?username=<?php echo $user; ?>'">Back</button>

        <table border="1">
            <tr>
                <th>ComputerId</th>
                <th>location</th>
                <th>password</th>
                <th>status</th>
            </tr>
            <?php
                if($r1)
                {
                    while($info = mysqli_fetch_array($r1))
                    {
                        echo "<tr>
                                <td>{$info['comID']}</td>
                                <td>{$info['location']}</td>
                                <td>{$info['password']}</td>
                                <td>{$info['com_status']}</td>
                            </tr>";
                    }
                }
                else
                {echo "error in displaying data";}
            ?>
        </table>

    </div>
</body>
</html>