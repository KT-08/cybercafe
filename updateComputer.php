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

    $comID = $_POST['comID'];
    $column = $_POST['update_column'];
    $value = $_POST['update_value'];

     $q1 = "update computer set $column = '$value' where comID = '$comID'";
     $r1 = mysqli_query($conn,$q1);

            if($r1)
            {
                echo "<script>
                            alert('Computer Details Updated');
                            location.href='computerList.php';
                        </script>";
                        exit;
            }

            mysqli_close($conn);
        ?>