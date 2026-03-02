<?php
    $conn = mysqli_connect("localhost","root","","cybercafe_db");

    if($conn)
    {
        echo "connected";
    }
    else
    {
        echo "connection failed";
    }

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $q1 = "SELECT * FROM users WHERE userName = '$user' AND password = '$pass'";

    $r1 = mysqli_query($conn,$q1);

    if($r1)
    {
        $n = mysqli_num_rows($r1);

        if($n > 0)
        {
            header("location: user_dashboard.php?username=$user");
            exit();
        }
        else
        {
            echo"<script>alert('invalid credential'); location.href='signin.html';</script>";
        }
    }

        mysqli_close($conn);
?>