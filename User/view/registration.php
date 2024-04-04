<!DOCTYPE html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
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

        .forgot-password {
            display: block;
            text-align: right;
            margin-top: 10px;
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

        .signin-link {
            text-align: center;
            margin-top: 20px;
        }

        .signin-link a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
    <title>SignUP</title>
</head>

<body>
    <script>
        function validateForm() {
            let name = document.forms["myForm"]["name"].value;
            let email = document.forms["myForm"]["email"].value;
            let phone = document.forms["myForm"]["phone"].value;
            let password = document.forms["myForm"]["password"].value;
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

    <div class="container">
        <h2 style="text-align: center;">SIGN UP</h2>

        <form action="../controller/createUser.php" name='myForm' onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
            <label for="">Name:</label>
            <input type="text" name="name" id="" required><br><br>
            <label for="">Email:</label>
            <input type="text" name="email" id="" required><br><br>
            <label for="">Phone:</label>
            <input type="text" name="phone" id="" required><br><br>
            <label for="">Password:</label>
            <input type="password" name="password" id="" required><br><br>
            <label for="">Gender:</label>
            <input type="radio" name="gender" value="Female" required>Female
            <input type="radio" name="gender" value="Male" required>Male
            <input type="radio" name="gender" value="Other" required>Other
            <br><br>
            <label for="">Date of Birth:</label>
            <input type="date" name="dob" id="" required><br><br>
            <label for="">Image:</label>
            <input type="file" name="image" id="" width="100" height="100"><br><br>
            <div class="signin-link">
                <p>Already Have an Account ? <a href="login.php">Sign In</a></p>
            </div>
            <input class="btn-submit" type="submit" name="signup" value="Sign Up">
        </form>

    </div>


</body>

</html>