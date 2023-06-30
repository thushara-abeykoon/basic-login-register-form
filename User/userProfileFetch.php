<?php
    require_once('../dbconnect.php');

    error_reporting(0);
    ini_set('display_errors', 0);
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
        <nav>
        <ul>
            <li onclick="logout()">Logout</li>
        </ul>
    </nav>
        <main id='main'>
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
                    <form action="accountModify.php" method='POST' onsubmit="return modifyAcc()" id='modifyForm'>
                    <td>: <input type="text" name="fname" id="fname" class="textInput" value="<?php echo $row['fname'];?>"></td>
                    
                </tr>
                 <tr>
                    <td>Last Name</td>
                    <td>: <input type="text" name="lname" id="lname" class="textInput" value="<?php echo $row['lname'];?>"></td>
                    
                </tr>
                 <tr>
                    <td>Email</td>
                    <td>: <input type="email" name="email" id="email" class="textInput" value="<?php echo $row['email'];?>"></td>
                    
                </tr>
                 <tr>
                    <td>Date of Birth</td>
                    <td>: <input type="date" name="dob" id="dob" class="textInput" value="<?php echo $row['dob'];?>"></td>
                    
                </tr>
            </table>

            <div id="btnDiv">
                
                    <input type="submit" value="Modify" id="modify"></form>
                </form>
                <button onclick='accountDeletion()' id="deleteBtn">Delete Your Account</button>
                
            </div>
            <div id="insertError" style="display:none;">
                <p>Empty fields detected!</p>
                <input type="submit" value="OK" id="ok2" onclick="invisible('insertError')">
            </div>
            <div id='adminErrorDiv' style="display:none;" >
                <p>Admin account can not be deleted!</p>
                <button onclick="invisible('adminErrorDiv')">OK</button>
            </div>
            <div id='confirm' style="display:none;" >
                <p>Are you sure?</p>
                <form action="" method="post" id="deleteForm">
                    <input type="submit" value="Yes">
                </form>
                
                <button onclick='invisible("confirm")'>No</button>
            </div>
        </main>
        <footer>
        <p>Created by EUSL/TC/IS/2018/COM/31 : Thushara Dilshan</p>
    </footer>
        <script src="userProfile.js"></script>
    </body>
</html>