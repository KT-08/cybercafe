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

    $userName = $_POST['userName'];
    $billAmount = $_POST['bill_amount'];
    $date = $_POST['bill_date'];
    $totalTime = $_POST['totalTime'];
    

    $q1 = "insert into bills (userName,bill_amount,bill_date,Total_time) values('$userName','$billAmount','$date','$totalTime')";
    $r1 = mysqli_query($conn,$q1);

    if($r1)
    {
        echo"<script>alert('Bill Generated'); location.href='billListAdmin.php';</script>";
    }
    else
    {
        echo "<script>alert('could not Generate Bill'); location.href='generateBills.html';</script>";
    }

    mysqli_close($conn);
?>