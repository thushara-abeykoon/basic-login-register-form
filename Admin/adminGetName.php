<?php
    require_once('../dbconnect.php');

    $username = $_POST['user'];

    $count = 0;
    $arr = array();
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
    <title>Admin</title>
    <link rel="stylesheet" href="adminPage.css">
</head>
<body>
    <header>
        <h1>Welcome <span id="adminName"></span> (Admin)</h1>
    </header>
    <nav>
        <ul>
            <li onclick="gotoProfile()">Your Profile</li>
        </ul>
    </nav>
    <main>
    <div id="fetch">
            <form action="adminGetName.php?username=admin&name=Thushara" method="POST">
                <label for="user">Enter Username : </label>
                <input type="text" name="user" id="user" class="textInput">
                <input type="submit" value="Fetch" name="fetchBtn" id="fetchBtn" onclick="fetchData()">
            </form>
            <a href="adminPage.php?username=admin&name=Thushara"><input type="submit" value="Fetch All" name="fetchAllBtn" id="fetchAllBtn"></a>
        </div>  
        <div id="fetchTable" >
            <table id="tableFetch">
                <tr id="row0">
                    <th><input type="checkbox" name="checkAll" id="checkAll" onclick="selectAll()"></th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                </tr>
                
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <tr id="row<?php echo ++$count;?>" name="<?php echo $row['username']?>">
                    <td><input type="checkbox" name="ch<?php echo $count?>" id="ch<?php echo $count;?>" onclick="selectRow(<?php echo $count;?>)"></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['dob'];?></td>
                    
                </tr>
                    <?php
                        }
                
                    ?>
            </table>
            <form id='deleteForm'action="" method='post' onsubmit = 'return accDeleteFinal()'>
                <input type="submit" value="Delete" name="deleteBtn" id="deleteBtn">
            </form>
            <form action="">
                <input type="submit" value="Modify" name="modifyBtn" id="modifyBtn">
            </form>
        </div>
    </main>
    <script src="adminPage.js"></script>

</body>
</html>
