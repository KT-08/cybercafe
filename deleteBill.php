<?php
    $conn = mysqli_connect("localhost","root","","cybercafe_db");

    if($conn)
    {
        echo "connected";
    }
    else
    {
        echo "failed to connect";
    }

    $user = $_POST['username'];
    $bill_id = $_POST['bill_id'];

    $q1 = "DELETE FROM bills WHERE bill_id = '$bill_id'";
    $r1 = mysqli_query($conn,$q1);

    if($r1)
    {
        echo "<script>
                alert('Bill Deleted Successfully');
                location.href='billListAdmin.php';
            </script>";
    }

    mysqli_close($conn);
?>