<?php
session_start();
// if (!isset($_SESSION["email"])) {
//     header("Location: login.php");
//     exit();
// }
require_once '../../User/controller/userInfo.php';
$user = fetchUser($email);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <title>Edit Profile</title>
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
            <a href="#" class="active">Edit Profile</a>
            <a href="changepass.php">Change Password</a>
            <a href="viewprofile.php">Logged as <?php echo $_SESSION["name"];  ?></a>

        </nav>
    </header>

    <script>
        function validateForm() {
            let name = document.forms["myForm"]["name"].value;
            let email = document.forms["myForm"]["email"].value;
            let phone = document.forms["myForm"]["phone"].value;
            // let password = document.forms["myForm"]["password"].value;
            let gender = document.forms["myForm"]["gender"].value;
            let dob = document.forms["myForm"]["dob"].value;

            if (name == "") {
                alert("Name must be filled out");
                return false;
            }

            if (!/^[a-zA-Z ]+$/.test(name)) {
                alert("Invalid name format: name can only contain letters and spaces");
                return false;
            }

            if (email == "") {
                alert("Email must be filled out");
                return false;
            }

            if (!/\S+@\S+\.\S+/.test(email)) {
                alert("Invalid email format");
                return false;
            }
            if (phone == "") {
                alert("Phone number must be filled out");
                return false;
            }

            if (!/^\d{11}$/.test(phone)) {
                alert("Invalid phone number format: phone number must be exactly 11 digits long and only contain numeric values");
                return false;
            }
            if (password == "") {
                alert("Password must be filled out");
                return false;
            } 
            if (gender == "") {
                alert("Gender must be filled out");
                return false;
            }
            if (dob == "") {
                alert("Date of Birth must be filled out");
                return false;
            }
            let currentDate = new Date();
            let dobDate = new Date(dob);
            let diffInMilliseconds = currentDate - dobDate;
            let yearsDiff = diffInMilliseconds / (1000 * 60 * 60 * 24 * 365);

            if (yearsDiff < 18) {
                alert("You must be at least 18 years old to sign up");
                return false;
            }

        }
    </script>

    <form action="../controller/updateUser.php" method="POST" name='myForm' onsubmit="return validateForm()" enctype="multipart/form-data">
        <div style="padding: 100px;margin-top:30px;height:1500px;">
            <label for="">Name:</label>
            <input type="text" name="name" value="<?php echo $_SESSION["name"]; ?>" required><br><br>
            <label for="">Email:</label>
            <input type="text" name="email" value="<?php echo $_SESSION["email"]; ?>" required><br><br>
            <label for="">Phone:</label>
            <input type="text" name="phone" value="<?php echo $_SESSION["phone"]; ?>" required><br><br>
            <label for="">Gender:</label>
            <input type="radio" name="gender" value="Female" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] == "Female") echo "checked"; ?> required>Female
            <input type="radio" name="gender" value="Male" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] == "Male") echo "checked"; ?> required>Male
            <input type="radio" name="gender" value="Other" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] == "Other") echo "checked"; ?> required>Other
            <br><br>
            <label for="">Date of Birth:</label>
            <input type="date" name="dob" value="<?php echo $_SESSION["dob"]; ?>" required><br><br>
            <label for="">Image:</label>
            <img src="../../User/uploads/<?php echo $_SESSION["image"]; ?>" alt="<?php echo $_SESSION['Name'] ?>" width="100" height="100"><br>
            <input type="file" name="image" value=""><br><br>
            <input class="btn-submit" type="submit" name="editprofile" value="Submit">
        </div>
    </form>


</body>

</html>