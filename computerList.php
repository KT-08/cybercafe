<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer List</title>
    <link rel="stylesheet" href="style.css">
    <?php
        $conn = mysqli_connect("localhost","root","","cybercafe_db");

        if($conn)
        {
            //echo "connected";
        }
        else
        {
            echo "failed to connect";
        }

        $q1 = "SELECT * FROM computer";
        $r1 = mysqli_query($conn,$q1);
    ?>
</head>
<body>
    <div>
        <h1 style="text-align: center;">COMPUTER LIST</h1>

        <div style="display: flex;">

        <button style="width: fit-content; height: fit-content; margin-right: 10px;" onclick="location.href='admin_dashboard.html'">back</button>
        <button style="width: fit-content; height: fit-content; margin-right: 10px;" onclick="location.href='add.html'">Add Computer</button>
        <button style="width: fit-content; height: fit-content; margin-right: 10px;" onclick="location.href='deleteComputer.html'">Delete Computer</button>
        <button style="width: fit-content; height: fit-content; margin-right: 10px;" onclick="location.href='updateComputer.html'">Update Computer</button>

        <div style="margin-left: 500px">
            <form action="searchComputer.php" method="post">
                <input type="number" name="searchID" id="searchID" placeholder="Enter com ID" style="width: 350px; height: fit-content;">
                <input type="submit" value="search" style="width: fit-content; height: fit-content;">
            </form>
        </div>
        </div>

        <table border="1">
            <tr>
                <th>ComputerId</th>
                <th>Processor</th>
                <th>Memory in GB</th>
                <th>OS</th>
                <th>storage</th>
                <th>network</th>
                <th>location</th>
                <th>purchase price</th>
                <th>purchase date</th>
                <th>warranty expiry date</th>
                <th>last maintenance date</th>
                <th>supplier</th>
                <th>color</th>
                <th>password</th>
                <th>notes</th>
                <th>status</th>
            </tr>
            <?php
                if($r1)
                {
                    while($info = mysqli_fetch_array($r1))
                    {
                        echo "<tr>
                                <td>{$info['comID']}</td>
                                <td>{$info['processor']}</td>
                                <td>{$info['memory']}</td>
                                <td>{$info['os']}</td>
                                <td>{$info['storage']}</td>
                                <td>{$info['network']}</td>
                                <td>{$info['location']}</td>
                                <td>{$info['purchase_price']}</td>
                                <td>{$info['purchase_date']}</td>
                                <td>{$info['warranty_expiry']}</td>
                                <td>{$info['maintenance_date']}</td>
                                <td>{$info['supplier']}</td>
                                <td>{$info['pc_color']}</td>
                                <td>{$info['password']}</td>
                                <td>{$info['additional_notes']}</td>
                                <td>{$info['com_status']}</td>
                            </tr>";
                    }
                }
                else
                {echo "error in displaying data";}
            ?>
        </table>
        </div>
</body>
</html>