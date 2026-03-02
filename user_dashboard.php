<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css?v=5">

    <?php
      $user = $_GET['username'];
    ?>

</head>
<body>
  <div class="box dashboard">
    <h1>User Dashboard</h1>
    <p>Welcome to your cybercafe account!</p>
    <button onclick="location.href='userProfile.php?username=<?php echo $user; ?>'">My Profile</button>
    <button onclick="location.href='computerStatus.php?username=<?php echo $user; ?>'">Available Computers</button>
    <button onclick="location.href='billListUser.php?username=<?php echo $user; ?>'">My Bills</button>
    <button onclick="location.href='index.html'">Logout</button>
  </div>
</body>
</html>
