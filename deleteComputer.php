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

    $comId = $_POST['comId'];

    $q1 = "DELETE FROM computer where comID = '$comId'";
    $r1 = mysqli_query($conn,$q1);

    if($r1 && mysqli_affected_rows($conn)>0)
    {
        echo "<script>
                alert('Deletion Successfull');
                location.href='computerList.php';
            </script>";
    }
    else
    {
        echo "<script>
                alert('Deletion Failed');
                location.href='deleteComputer.html';
            </script>";
    }
?>