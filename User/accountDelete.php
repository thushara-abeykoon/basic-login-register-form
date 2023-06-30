<?php
    require('../dbconnect.php');
    
    $username = $_GET['username'];

    $query = "DELETE FROM user_data WHERE username = '${username}';";

    try {
        $result=mysqli_query($conn,$query);
    } catch (\Throwable $th) {
        die('unknown error happened');
    }

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
    <style>
        main div{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: rgb(255, 130, 130);
        border: 1px solid rgb(223, 223, 223);
        margin: auto;
        text-align: center;
        box-shadow: 0px 0px 5px 2px rgb(223, 223, 223) ;
        border-radius: 10px;
        color: rgb(199, 12, 12);
        margin-top: 5%;
        }
    </style>
</head>
<body>
    <main>
        <div>
            <p>Account Deleted Successfully! <a href="../Form/form.html">Redirect</a> to the login page!</p>
        </div>
    </main>
</body>
</html>