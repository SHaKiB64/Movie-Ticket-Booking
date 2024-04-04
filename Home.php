<?php
session_start();
require_once 'Admin/model/model.php';
$movies = showmoviews();
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="stylesheet" href="./css/style.css">
    <title>Home</title>
</head>

<body>
    <script>
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("book").innerHTML =
                    this.responseText;
            }
            xhttp.open("GET", "User/view/login.php");
            xhttp.send();
        }
    </script>
    <header>
        <h2 class="logo"><b>6t4</b></h2>
        <nav class="navigation">
            <a href="#" class="active">Home</a>
            <a href="User/view/login.php">Sign in</a>
            <a href="#">Contact</a>
            <a href="#">About</a>
        </nav>
    </header>
    <div style="padding: 100px;margin-top:30px;height:1500px;">
        <?php foreach ($movies as $i => $movie) : ?>
            <div class="column">
                <img src="Admin/uploads/<?php echo $movie['Image'] ?>" alt="$movie['Name']" style="width:100%; height:200px;">
                <h3 style="text-align: center;"><?php echo $movie['Name'] ?></h3><br>
                <input class="btn-submit" type="button" name="details" value="Details">
                 <input class="btn-submita" type="button" value="BOOK">
            </div>
        <?php endforeach; ?>
    </div>
</body>