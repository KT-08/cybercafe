<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill List</title>
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

        $q1 = "SELECT * FROM bills";
        $r1 = mysqli_query($conn,$q1);
    ?>

</head>
<body>
    <div>
        <h1 style="text-align: center;">BILL LIST</h1>
        <Button style="width: fit-content" onclick="location.href='admin_dashboard.html'">Back</Button>
        <Button style="width: fit-content" onclick="location.href='generateBills.html'">Generate Bill</Button>
        <Button style="width: fit-content" onclick="location.href='deleteBill.html'">Delete Bill</Button>
        
    <table border="1">
        <tr>
            <th>User Name</th>
            <th>Bill Id</th>
            <th>Bill Amount</th>
            <th>Bill Date</th>
            <th>Total Hours</th>
        </tr>
        <?php
            if($r1)
            {
                while($info = mysqli_fetch_array($r1))
                {
                    echo "<tr>
                            <td>{$info['userName']}</td>
                            <td>{$info['bill_id']}</td>
                            <td>{$info['bill_amount']}</td>
                            <td>{$info['bill_date']}</td>
                            <td>{$info['Total_time']}</td>
                        </tr>";
                }
            }
            else
            {
                echo "<script>
                        alert('failed to display bills');
                        location.href='admin_dashboard.html';
                    </script>";
            }
            
            mysqli_close($conn);
        ?>
        
    </table>
    </div>
</body>
</html>