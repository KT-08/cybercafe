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

    $user = $_POST['username'];
    $column = $_POST['update_column'];
    $value = $_POST['update_value'];
     $q1 = "update users set $column = '$value' where userName = '$user'";
     $r1 = mysqli_query($conn,$q1);

            if($r1)
            {
                echo "<script>
                            alert('profile updated');
                            location.href='userProfile.php?username=$user';
                        </script>";
                        exit;
            }

            mysqli_close($conn);
        ?>