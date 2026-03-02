<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Profile</title>
        <link rel="stylesheet" href="style.css">

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
    ?>

    <script>
        function validate()
        {
            //taking input from drop down menu
            var columns = document.getElementById("update_column");
            var selected_column = columns.options[columns.selectedIndex].value;

            //patterns
            var pattern_email = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+)\.([a-z]+)(\.[a-z]+)?$/;
            var pattern_phoneNumber = /^[789]{1}[0-9]{9}$/;
            var pattern_dob = /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/;

            //input
            var entered_value = document.getElementById("update_value").value;

            //validate the input
            if(selected_column == "firstName")                              //first name
            {
                if(entered_value == "")
                {
                    alert("Enter Your First Name To Update.");
                    return false;
                }
            }
            else if(selected_column == "lastName")
            {
                if(entered_value == "")
                {
                    alert("Enter Your Last Name To Update.");
                    return false;
                }
            }
            else if(selected_column == "email")
            {
                if(entered_value == "")
                {
                    alert("Enter Your Email To Update.");
                    return false;
                }
                else if(pattern_email.test(entered_value) == false)
                {
                    alert("Enter Valid Email");
                    return false;
                }
            }
            else if(selected_column == "phoneNumber")
            {
                if(entered_value == "")
                {
                    alert("Enter Your Phone Number To Update.");
                    return false;
                }
                else if(pattern_phoneNumber.test(entered_value) == false)
                {
                    alert("Enter Valid Phone Number");
                    return false;
                }
            }
            else if(selected_column == "location")                              //first name
            {
                if(entered_value == "")
                {
                    alert("Enter Your Adrress To Update.");
                    return false;
                }
            }
            
            return true;

        
        }
    </script>

    </head>
    <body>
        
        <div class="box">
            <h1>Update Profile</h1>
            <form onsubmit="return validate()" action="updateprofile.php" method="post">
                <input type="hidden" name="username" value="<?php echo $user; ?>">
                
                <label for="update_column">Select What you want To Update</label>
                    <select name="update_column" id="update_column">
                        <option>Select column</option>
                        <option value="firstName">First Name</option>
                        <option value="lastName">Last Name</option>
                        <option value="email">Email</option>
                        <option value="phoneNumber">Phone Number</option>
                        <option value="location">Location</option>
                    </select>

                    <label for="update_value">Enter New value</label>
                    <input type="text" name="update_value" id="update_value">
                <input type="submit" value="Update">
            </form>
        </div>

    </body>
    </html>

    