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

    $admin_username = $_POST['username'];
    $admin_password = $_POST['password'];

    if($admin_username == 'admin' && $admin_password == '1234')
    {
        header("location: admin_dashboard.html");
        exit();
    }
    else
    {
        echo "<script>alert('invalid credential'); location.href='admin_login.html';</script>";
    }

    mysqli_close($conn);
?>