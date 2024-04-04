<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <title>Add SHOW</title>
</head>

<body>
    <!-- <header>
        <h2 class="logo"><b>6t4</b></h2>
        <nav class="navigation">
            <a href="AdminHome.php">Home</a>
            <a href="addmovie.php" class="active">Add Movies</a>
            <a href="manageshow.php">Shows</a>
            <a href="AllUsers.php">Users</a>
            <a href="logout.php">Logout</a>

        </nav>
    </header> -->
    <div style="padding: 100px;margin-top:20px;height:1500px;">
        <form method="post" enctype="multipart/form-data">
            <label for="">Theater Name</label><br>
            <input type="text" name="tname" id=""><br><br>
            <label for="">Movie Name</label><br>
            <input type="text" name="mname" id=""><br><br>
            <label for="">Show</label><br>
            <input type="text" name="show" id=""><br><br>
            <label for="">Number of Tickets</label><br>
            <input type="text" name="ntickets" id=""><br><br><br>
            <input type="submit" name="addshow" value="ADD"><br><br>
        </form>

    </div>


</body>

</html>