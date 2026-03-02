<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="style.css?v=5">
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

        $q1 = "SELECT * FROM users ";
        $r1 = mysqli_query($conn,$q1);

        $n = mysqli_num_rows($r1);
    ?>
</head>
<body>
    <div>
        <h1 style="text-align: center;">USER LIST</h1>
        <button style="width: fit-content; height: fit-content;" onclick="location.href='admin_dashboard.html'">back</button>
        <button style="width: fit-content;">total users : <?php echo $n ?></button>

        <table border="1">
            <tr>
                <th>User Photo</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Username</th>
                <th>Account Type</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
            <?php
                if($r1)
                {
                    while($info =  mysqli_fetch_array($r1))
                    {
                        echo "<tr>
                                <td><img src='{$info['image']}' alt='user photo' width='100px' height='100px'></img></td>
                                <td>{$info['firstName']}</td>
                                <td>{$info['lastName']}</td>
                                <td>{$info['gender']}</td>
                                <td>{$info['userName']}</td>
                                <td>{$info['account']}</td>
                                <td>{$info['phoneNumber']}</td>
                                <td>{$info['email']}</td>
                                <td>{$info['location']}</td>
                            </tr>";
                    }
                }
            ?>
        </table>

    </div>
    
</body>
</html>