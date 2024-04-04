<?php
// require_once '../controller/userInfo.php';
// $user = showUserByEmail('email');
?>
<!DOCTYPE html>
<head>
    <title></title>
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
    </style>
</head>
<body>

    <table id="customers">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><a href=""><?php echo $user['Name']; ?></a></td>
                        <td><?php echo $user['Email']; ?></td>
                        <td><?php echo $user['Phone']; ?></td>
                        <td><?php echo $user['Gender']; ?></td>
                        <td><?php echo $user['Dob']; ?></td>
                        <td><img width="100px" src="../uploads/" <?php echo $user['Image'] ?>" alt="<?php echo $user['Name'] ?>"></td>
                    </tr>
            </tbody>
        </table>
</body>
</html>