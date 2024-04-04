<?php
require_once '../controller/userInfo.php';
$movies = fetchAllMovies();
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./css/style.css">

    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        .btn-submit {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #3e8e41;
        }
    </style>

    <title>ALL USERS</title>
</head>

<body>
    <script>
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("addmovie").innerHTML =
                    this.responseText;
            }
            xhttp.open("GET", "addmovie.php");
            xhttp.send();
        }
    </script>
    <header>
        <h2 class="logo"><b>6t4</b></h2>
        <nav class="navigation">
            <a href="AdminHome.php">Home</a>
            <a href="managemovie.php" class="active">Movies</a>
            <a href="manageshow.php">Manage Shows</a>
            <a href="AllUsers.php">Users</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <div style="padding: 100px;margin-top:30px;height:1500px;">
        <div id="addmovie">
            <input class="btn-submit" type="submit" onclick="loadDoc()" value="ADD MOVIES">
        </div><br><br>
        <h3>All Movies</h3><br>
        <table id="customers">
            <thead>
                <tr>
                    <th>Movie Name</th>
                    <th>Movie Story</th>
                    <th>Movie Cast</th>
                    <th>Movie Duration</th>
                    <th>Movie Rating</th>
                    <th>Movie Image</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($movies as $i => $movie) : ?>
                    <tr>
                        <td><a href=""><?php echo $movie['Name'] ?></td>
                        <td><?php echo $movie['Story'] ?></a></td>
                        <td><?php echo $movie['Cast'] ?></td>
                        <td><?php echo $movie['Duration'] ?></td>
                        <td><?php echo $movie['Rating'] ?></td>
                        <td><img width="100px" src="../uploads/<?php echo $movie['Image'] ?>" alt="<?php echo $movie['Name'] ?>"></td>
                        <td><a href="AdminUserView.php?id=<?php echo $movie['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $movie['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>