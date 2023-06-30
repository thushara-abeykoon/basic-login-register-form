<?php
    require_once('../dbconnect.php');

    $username = $_GET['username'];

    $query = "SELECT * FROM user_data WHERE username = '${username}';";

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
    <title></title>
    <link rel="stylesheet" href="userProfile.css">
</head>
    <body>
        <header id="header">
            <h1 id="welcomeHeader">Welcome <span id="userName"></span></h1>
        </header>
        <main>
            <table>
                <?php
                    $row = mysqli_fetch_assoc($result);     
                ?>
                <tr>
                    <td>Username</td>
                    <td>: <?php echo $row['username'];?></td>
                </tr> 
                <tr>
                    <td>First Name</td>
                    <form action="">
                    <td>: <input type="text" name="fname" id="fname" class="textInput" value="<?php echo $row['fname'];?>"></td>
                    <td><input type="submit" value="Modify" class="modify"></td>
                    </form>
                </tr>
                 <tr>
                    <td>Last Name</td>
                    <form action="">
                    <td>: <input type="text" name="lname" id="lname" class="textInput" value="<?php echo $row['lname'];?>"></td>
                    <td><input type="submit" value="Modify" class="modify"></td>
                    </form>
                </tr>
                 <tr>
                    <td>Email</td>
                    <form action="">
                    <td>: <input type="email" name="email" id="email" class="textInput" value="<?php echo $row['email'];?>"></td>
                    <td><input type="submit" value="Modify" class="modify"></td>
                    </form>
                </tr>
                 <tr>
                    <td>Date of Birth</td>
                    <form action="">
                    <td>: <input type="date" name="dob" id="dob" class="textInput" value="<?php echo $row['dob'];?>"></td>
                    <td><input type="submit" value="Modify" class="modify"></td>
                    </form>
                </tr>
            </table>
            <div>
                <form action="" onsubmit="" method="post">
                    <input type="submit" value="Delete Your Account">
                </form>
            </div>
        </main>
        <script src="userProfile.js"></script>
    </body>
</html>