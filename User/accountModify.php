<?php
    require('../dbconnect.php');
    error_reporting(0);
    ini_set('display_errors', 0);

    try {
        
    $username = $_GET['username'];
    if($username===null){
        throw new Exception("Error Processing Request", 1);
        
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    

    $query = "UPDATE user_data SET fname = '${fname}', lname = '${lname}', email = '${email}', dob = '${dob}' WHERE username = '${username}';";
    $result=mysqli_query($conn,$query);
    
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
        background-color: rgb(250, 250, 162);
        border: 1px solid rgb(223, 223, 223);
        margin: auto;
        text-align: center;
        box-shadow: 0px 0px 5px 2px rgb(223, 223, 223) ;
        border-radius: 10px;
        color: rgb(156, 156, 14);
        margin-top: 5%;
        }
    </style>
</head>
<body>
    <main>
        <div>
            <p>Account Updated Successfully! <a href="userPage.html?name=<?php echo $fname;?>&username=<?php echo $username;?>">Redirect</a> to the User page!</p>
        </div>
    </main>
</body>
</html>

<?php
    }
    catch (\Throwable $th) {
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
        background-color: rgb(255, 195, 143);
        border: 1px solid rgb(223, 223, 223);
        margin: auto;
        text-align: center;
        box-shadow: 0px 0px 5px 2px rgb(223, 223, 223) ;
        border-radius: 10px;
        color: rgb(140, 73, 14);
        margin-top: 5%;
        }
    </style>
</head>
<body>
    <main>
        <div>
            <p>User Not Found! <a href="../Form/form.html">Redirect</a> to the Login page!</p>
        </div>
    </main>
</body>
</html>

<?php
        exit;
    }
?>