<?php
session_start();
if (!isset($_SESSION['Username']) && !isset($_SESSION['RolesID']) && !isset($_SESSION['PermissionID'])) {
    // User is not logged in, redirect to the login page
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/menustyle.css">
    <title>Permissions</title>
</head>
<style>
             /* Define the scale-in animation */
          @keyframes scale-in {
            from { transform: scale(0); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }       
        /* Apply the animation to the menu */
        .button-container {
            animation: scale-in 0.5s ease-in-out;
        }
    </style>
<body>
    <div class="button-container">
        <button type="submit" onclick="location.href='CheckUsers.php'"><b>Check Users</b></button>
        <button type="submit" onclick="location.href='registration.php'"><b>Add Users</b></button>
        <button type="submit" onclick="location.href='EditUsers.php'"><b>Edit Users</b></button>
      
</body>
</html>
