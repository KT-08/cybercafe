<?php
    $comp_ID = $_POST["comID"];
    $memory = $_POST["mem"];
    $processor = $_POST["processor"];
    $com_status = $_POST["status"];
    $os = $_POST["os"];
    $storage = $_POST["storage"];
    $network = $_POST["net"];
    $location = $_POST["loc"];
    $purch_price = $_POST["price"];
    $purch_date = $_POST["purchaseDate"];
    $warr_exp_date = $_POST["warrantyExp"];
    $maintenance_date = $_POST["maintenanceDate"];
    $supplier = $_POST["supplier"];
    $pc_color = $_POST["color"];
    $password = $_POST["password"];
    $additional_notes = $_POST["notes"];

    
    $conn = mysqli_connect("localhost","root","","cybercafe_db");

    if($conn)
    {
        echo "connected";
    }
    else
    {
        echo "connection failed";
    }

    $q1 = "insert into computer values('$comp_ID','$memory','$processor','$os','$storage','$network','$location','$purch_price','$purch_date','$warr_exp_date','$maintenance_date','$supplier','$pc_color','$password','$additional_notes','$com_status')";
    $r1 = mysqli_query($conn,$q1);

    if($r1)
    {
        header("Location: computerList.php");
    }
    else
    {
        echo"<script>alert('insertion failed'); location.href='signup.html';</script>";
    }

    mysqli_close($conn);
?>