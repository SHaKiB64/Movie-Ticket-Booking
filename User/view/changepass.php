<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: signin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opassword = $_POST["opassword"];
    $npassword = $_POST["npassword"];
    $cnpassword = $_POST["cntpassword"];
    
    include '../Controller/DataController.php' ;
    $users = showUser($id);

    // foreach ($users as &$user) {
        if ($user["email"] === $_SESSION["email"] && $user["Password"] === $opassword) {
            if($user["npassword"]===$user["cnpassword"]){
                $user["password"] = $cnpassword;
            // file_put_contents("../data/data.json", json_encode($users));
            header("Location: myprofile.php");
            exit();
            }
        }
    // }

    $error_message = "Invalid Current Password";
}
?>

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <title>Change Password</title>
    <style>
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .btn-submit {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
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

        input[type="checkbox"] {
            display: inline-block;
            vertical-align: middle;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <header>
        <h2 class="logo"><b>6t4</b></h2>
        <nav class="navigation">
            <a href="UserHome.php">Home</a>
            <a href="editprofile.php">Edit Profile</a>
            <a href="#" class="active">Change Password</a>
            <a href="myprofile.php">Logged as <?php echo $_SESSION["name"];  ?></a>

        </nav>
    </header>
    <form action="changepass.php" method="POST" enctype="multipart/form-data">
        <div style="padding: 100px;margin-top:30px;height:1500px;">
            <label for="">Old Password:</label>
            <input type="password" name="opassword" value="" required> 
            <label for=""> New Password:</label>
            <input type="password" name="npassword" value="" required> 
            <label for="">Confirm New Password:</label>
            <input type="password" name="cnpassword" value="" required> 
           
            <input class="btn-submit" type="submit" name="changepass" value="Submit">
        </div>
    </form>


</body>

</html>