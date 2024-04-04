<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

// require_once '../controller/userInfo.php';
// $user = fetchUser($_GET['email']);
// require_once '../model/model.php';
// $user = showUser($email);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <title>My Profile</title>
    <style>
        label {
            display: inline-block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <h2 class="logo"><b>6t4</b></h2>
        <nav class="navigation">
            <a href="UserHome.php">Home</a>
            <a href="#" class="active">View Profile</a>
            <a href="editprofile.php">Edit profile</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <div style="padding: 100px;margin-top:30px;height:1500px;">
        <label>Name : </label>
        <?php echo $_SESSION["name"];  ?>
        <br><br>
        <label>Email : </label>
        <?php echo $_SESSION["email"];  ?>
        <br><br>
        <label>Phone : </label>
        <?php echo $_SESSION["phone"];  ?>
        <br><br>
        <label>Gender : </label>
        <?php echo $_SESSION["gender"];  ?>
        <br><br>
        <label>Date of Birth : </label>
        <?php echo $_SESSION["dob"];  ?>
        <br><br>
        <label>Image : </label>
        <br><br>
        <img src="../uploads/<?php echo $_SESSION["image"]; ?>" alt="<?php echo $_SESSION['Name'] ?>" width="100" height="100">

    </div>
</body>