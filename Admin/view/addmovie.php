<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <title>Add Movie</title>
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
    <form action="../controller/createUser.php" method="post" enctype="multipart/form-data">
    <label for="">Movie Name</label><br>
    <input type="text" name="mname" id=""><br><br>
    <label for="">Movie Cast</label><br>
    <input type="text" name="mcast" id=""><br><br>
    <label for="">Movie Duration</label><br>
    <input type="text" name="mduration" id=""><br><br>
    <label for="">Movie Rating</label><br>
    <input type="text" name="mrating" id=""><br><br>
    <label for="">Movie Image</label><br>
    <input type="file" name="mimage" id=""><br><br>
    <label for="">Movie Story</label><br>
    <input type="text" name="mstory" id="" style="height:'100'; width: 40%;"><br><br><br>
    <input type="submit" name="addmovie" value="ADD"><br><br>
</form>

    </div>


</body>

</html>