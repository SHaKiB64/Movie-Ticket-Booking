<!DOCTYPE html>

<head>
    <title>Manage Shows</title>
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
                document.getElementById("addshow").innerHTML =
                    this.responseText;
            }
            xhttp.open("GET", "addshow.php");
            xhttp.send();
        }
    </script>
    <header>
        <h2 class="logo"><b>6t4</b></h2>
        <nav class="navigation">
            <a href="AdminHome.php">Home</a>
            <a href="manageshow.php" class="active">Shows</a>
            <a href="AllUsers.php">Users</a>
            <a href="logout.php">Logout</a>

        </nav>
    </header>
    <div style="padding: 100px;margin-top:30px;height:1500px;">
    <div id="addshow">
            <input class="btn-submit" type="submit" onclick="loadDoc()" value="ADD SHOW">
        </div><br><br>
    </div>

</body>

</html>