<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
        $q1 = "SELECT * FROM users WHERE userName = '$user'";
        $r1 = mysqli_query($conn,$q1);
    ?>

</head>
<body>
    <div>
        <h1 style="text-align: center;">MY PROFILE</h1>
        <button style="width: fit-content"; onclick="location.href='user_dashboard.php?username=<?php echo $user; ?>'">Back</button>
        <button style="width: fit-content"; onclick="location.href='deleteUser.php?username=<?php echo $user; ?>'">remove me</button>
        <button style="width: fit-content"; onclick="location.href='updateprofileForm.php?username=<?php echo $user; ?>'">Update profile</button>

        <table border="1">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Username</th>
                <th>Password</th>
                <th>Account type</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Email</th>
                <th>DOB</th>
                <th>User Photo</th>
            </tr>
            <?php
                if($r1)
                {
                    while($info = mysqli_fetch_array($r1))
                    {
                        echo "<tr>
                                <td>{$info['firstName']}</td>
                                <td>{$info['lastName']}</td>
                                <td>{$info['gender']}</td>
                                <td>{$info['userName']}</td>
                                <td>{$info['password']}</td>
                                <td>{$info['account']}</td>
                                <td>{$info['phoneNumber']}</td>
                                <td>{$info['location']}</td>
                                <td>{$info['email']}</td>
                                <td>{$info['dob']}</td>
                                <td><img src='{$info['image']}' alt='user photo' width='100px' height='100px'></img></td>
                            </tr>";
                    }
                }
            ?>
        </table>

    </div>
</body>
</html>