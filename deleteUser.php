<?php
    $conn = mysqli_connect("localhost","root","","cybercafe_db");

    if($conn)
    {
        //echo "connected";
    }
    else
    {
        echo "connection failed";
    }


    $user = $_GET['username'];
        
    $q1 = "Delete FROM users where userName = '$user'";
    $r1 = mysqli_query($conn,$q1);

    if($r1)
    {
        echo "<script>
                    alert('account Deleted successsfully!');
                    location.href='signin.html';
                </script>";
    }
    else
    {
        echo "<script>
                    alert('account cannot be Deleted.\nYOUR BILLS ARE PENDING!');
                    location.href='billListUser.php';
                </script>";
    }

    mysqli_close($conn);
?>