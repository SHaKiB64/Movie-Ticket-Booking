<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}
require_once '../../Admin/model/model.php';
$movies = showmoviews();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <title>User DashBoard</title>
    <style>
        .column {
            float: left;
            width: 20.33%;
            padding: 5px;
        }

        .btn-submit {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-submita {
            background-color: red;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }


        .btn-submit:hover {
            background-color: #3e8e41;
        }

        .btn-submita:hover {
            background-color: rebeccapurple;
        }
    </style>
</head>

<body>
    <header>
        <h2 class="logo"><b>6t4</b></h2>
        <nav class="navigation">
            <a href="#" class="active">Home</a>
            <a href="#">Booking History</a>
            <a href="logout.php">LogOut</a>
            <a href="viewprofile.php">Logged as <?php echo $_SESSION["name"];  ?></a>


        </nav>
    </header>
    <div style="padding: 100px;margin-top:30px;height:1500px;">
        <?php foreach ($movies as $i => $movie) : ?>
            <div class="column">
                <img src="../../Admin/uploads/<?php echo $movie['Image'] ?>" alt="$movie['Name']" style="width:100%; height:200px;">
                <h3 style="text-align: center;"><?php echo$movie['Name']?></h3><br>
                <input class="btn-submit" type="button" name="details" value="Details">
                <input class="btn-submita" type="button" value="BOOK">

            </div>
        <?php endforeach; ?>
    </div>
</body>