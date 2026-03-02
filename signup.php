<?php
    //fetching data from form
    $fn = $_POST["fname"];
    $ln = $_POST["lname"];
    $em = $_POST["email"];
    $pn = $_POST["phno"];
    $dob = $_POST["dob"];
    $loc = $_POST["location"];
    $un = $_POST["username"];
    $pw = $_POST["password"];
    $gender = $_POST['gender'];
    $account = $_POST['account'];
    
    $image_name = $_FILES['photo']['name'];
    $temp_name = $_FILES['photo']['tmp_name'];
    $folder = "user_photo/".$image_name;

    move_uploaded_file($temp_name,$folder);

    //displaying data 
    // echo "<br>first name : ".$fn;
    // echo "<br>last name : ".$ln;
    // echo "<br>email  : ".$em;
    // echo "<br>phono : ".$pn;
    // echo "<br> dob : ".$dob;
    // echo "<br> location : ".$loc;
    // echo "<br> un : ".$un;
    // echo "<br> pass : ".$pw;

    $conn = mysqli_connect("localhost","root","","cybercafe_db");
    if($conn)
    {
        //echo"<br>connected";
    }
    else{
        echo"<br>connection failed";
    }

    $q1 = "SELECT * FROM users WHERE userName = '$un'";
    $r1 = mysqli_query($conn,$q1);
    $n = mysqli_num_rows($r1);

    //check if username already exists
    if($n > 0)
    {
        echo "<script>alert('Username Already exists.'); location.href='signup.html';</script>";
    }
    else
    {
        //insert data into table
        $q2 = "insert into users values('$un','$fn','$ln','$em','$pn','$dob','$gender','$loc','$pw','$account','$folder')";
        $r2 = mysqli_query($conn,$q2);
        

        if($r2)
        {
            echo "<script>
                    alert('Form Submitted Successfully\\n\\n--Entered Details\\nFirst Name: $fn\\nLast Name: $ln\\ngender: $gender\\nAccount Type: $account\\nEmail: $em\\nPhone Number: $pn\\nDate Of Birth: $dob\\nLocation: $loc\\nUsername: $un\\nPassword: $pw');
                    location.href='signin.html';
                </script>";
        }
        else
        {
            echo"<script>alert('insertion failed'); location.href='signup.html';</script>";
        }
    }

    mysqli_close($conn);
   
?>