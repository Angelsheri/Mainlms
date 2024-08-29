<?php
require('dbconn.php');
?>

<!DOCTYPE html>
<html>

<!-- Head -->
<head>
    
    <title>Library Management </title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->

    <!-- Style --> <link rel="stylesheet" href="addition/styles.css" type="text/css" media="all">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
    <h1>LIBRARY MANAGEMENT </h1>

    <div class="container">
        <form action="index1.php" method="post"> <!-- Change form action to point to index1.php -->
            <div class="register">
                <h2>Sign Up</h2>
                <input type="text" name="Name" placeholder="Name" required>
                <input type="text" name="Email" placeholder="Email" required>
                <input type="password" name="Password" placeholder="Password" required>
                <input type="text" name="PhoneNumber" placeholder="Phone Number" required>
                <input type="text" name="RollNo" placeholder="ID Number" required="">
                <select name="Category" id="Category" style="background-color: transparent;">
                    <option value="Student">Student</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Staff">Staff</option>
                </select>
                <select name="Department" id="Department" style="background-color: transparent;"> <!-- Changed ID to Department for clarity -->
                    <option value="Compstud">Compstud</option>
                    <option value="Education">Education</option>
                    <option value="Agriculture">Agriculture</option>
                    <option value="Jr.HighSchool">Jr.HighSchool</option>
                    <option value="Sr.HighSchool">Sr.HighSchool</option>
                </select>
                <div class="send-button">
                    <input type="submit" name="signup" value="Sign Up">
                <p>By creating an account, you agree to our <a class="underline" href="terms.html">Terms</a></p>
                </div>
            </div>
        </form>
        <div class="clear"></div>
    </div>
    </div>

    <div class="footer w3layouts agileits">
        <p> &copy; Batch 2k21 "Group B" Final Year Project LMS </p>
    </div>

    <?php
    if (isset($_POST['signup'])) {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $mobno = $_POST['PhoneNumber'];
        $rollno = $_POST['RollNo'];
        $category = $_POST['Category'];
        $department = $_POST['Department'];
        $type = 'Student';

        $sql = "INSERT INTO LMS.user (Name, Type, Category, Department, RollNo, EmailId, MobNo, Password) VALUES ('$name', '$type', '$category', '$department', '$rollno', '$email', '$mobno', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script type='text/javascript'>alert('Registration Successful')</script>";
        } else {
            echo "<script type='text/javascript'>alert('User Exists or Error: " . $conn->error . "')</script>";
        }
    }
    ?>

</body>
</html>
