<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}
require_once '../model/model.php';

if (isset($_POST['editprofile'])) {
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['phone'] = $_POST['phone'];
    $data['gender'] = $_POST['gender'];
    $data['dob'] = $_POST['dob'];
    $data['image'] = '';

    if (!empty($_FILES["image"]["name"])) {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $newFileName = uniqid() . '.' . $imageFileType;
        $target_file = $target_dir . $newFileName;
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $data['image'] = $newFileName;
        }
    }

    if (updateUser($_POST["email"], $data)) {
        $_SESSION['name'] = $data['name'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['phone'] = $data['phone'];
        $_SESSION['gender'] = $data['gender'];
        $_SESSION['dob'] = $data['dob'];
        if (!empty($data['image'])) {
            $_SESSION['image'] = $data['image'];
        }
        // Redirect to viewprofile with updated values
        header('Location: ../view/viewprofile.php?id=' . $_POST["email"]);
    } else {
        echo 'Error updating user.';
    }
} else {
    echo 'You are not allowed to access this page.';
}

?>

<!DOCTYPE html>

<head>

    <title></title>
</head>

<body>
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

</body>

</html>