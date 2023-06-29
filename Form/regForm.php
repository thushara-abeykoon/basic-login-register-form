<?php
    header("Location: landingPage.html");
    require('../dbconnect.php');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $userNameReg = $_POST['usernameReg'];
    $passwordReg = md5($_POST['passwdReg']);

    try {
        $query = "INSERT INTO user_data(fname,lname,email,dob,username,password) VALUES(?,?,?,?,?,?);";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssss", $fname, $lname, $email, $dob, $userNameReg, $passwordReg );
        $stmt->execute();
    } catch (\Throwable $th) {
        echo "<p>Username Already exists..!</p>";
    }

    exit();
?>