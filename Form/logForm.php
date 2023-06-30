<?php
    require("../dbconnect.php");
    error_reporting(0);
    ini_set('display_errors', 0);
    
    $username = $_POST['usernameLog'];
    $password = $_POST['passwdLog'];

   if(userCheck($conn,$username,$password)){
    $name = getName($conn,$username);
        if($username==="admin"){
            header("Location:../Admin/adminPage.html?name=$name&username=$username");
            exit();
        }
        else{
            
            header("Location:../User/userPage.html?name=$name&username=$username");
            exit();
        }     
   }
   else{
        header("Location:wrongPassword.php");
        exit();
   }

    function userCheck($conn,$username,$password){
        $md5pass = md5($password);
        $query = "SELECT username FROM user_data WHERE username = '${username}' AND password = '${md5pass}';";
        
        return getValStatus($conn, $query);
    }


    function getValStatus($conn, $query){
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Unknown Error");
        }
        if (mysqli_num_rows($result) > 0){
            return true;
        }
        else {
            return false;
        }
    }

    function getName($conn,$username){
        $query = "SELECT fname FROM user_data WHERE username = '${username}';";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Unknown Error");
        }
        $row = mysqli_fetch_assoc($result);

        return $row["fname"];
    }
    exit();
?>