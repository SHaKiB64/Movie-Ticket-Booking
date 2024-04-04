<?php
session_start();
require_once '../model/model.php';
$movies = showmoviews();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./css/style.css">
    <title>Home</title>
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
            <a href="managemovie.php">Movies</a>
            <a href="manageshow.php">Shows</a>
            <a href="AllUsers.php">Users</a>
            <a href="logout.php">Logout</a>

        </nav>
    </header>
    <div style="padding: 100px;margin-top:30px;height:1500px;">
        <?php foreach ($movies as $i => $movie) : ?>
            <div class="column">
                <img src="../uploads/<?php echo $movie['Image'] ?>" alt="$movie['Name']" style="width:100%; height:200px;">
                <h3 style="text-align: center;"><?php echo$movie['Name']?></h3><br>
                <input class="btn-submit" type="button" value="Details">
                <input class="btn-submita" type="button" value="BOOK">

            </div>
        <?php endforeach; ?>
    </div>

</body>