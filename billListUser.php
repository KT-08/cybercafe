<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

        $user = $_GET['username'];
        $q1 = "SELECT * FROM bills WHERE userName = '$user'";
        $r1 = mysqli_query($conn,$q1);
    ?>
    
</head>
<body>
    <div>
        <h1>My Bills</h1>
        <button style="width: fit-content"; onclick="location.href='user_dashboard.php?username=<?php echo $user; ?>'">Back</button>

        <table border="1">
            <tr>
                <th>Bill Id</th>
                <th>Bill Amount</th>
                <th>Bill Date</th>
                <th>Total Time</th>
            </tr>
            <?php
                if($r1)
                {
                    while($info = mysqli_fetch_array($r1))
                    {
                        echo "<tr>
                                <td>{$info['bill_id']}</td>
                                <td>{$info['bill_amount']}</td>
                                <td>{$info['bill_date']}</td>
                                <td>{$info['Total_time']}</td>
                            </tr>";
                    }
                }
            ?>
        </table>

    </div>
</body>
</html>