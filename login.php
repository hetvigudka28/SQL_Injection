<?php 

session_start(); 

include "config.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    // function validate($data){
    //    $data = trim($data);
    //    $data = stripslashes($data);
    //    $data = htmlspecialchars($data);
    //    return $data;
    // }

    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $pass = $_POST['password'];
    $sql = "SELECT username FROM users WHERE username='' or 1=1 AND password='' or 1=1 ";
    echo "Passed sql";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // $row = mysqli_fetch_assoc($result);
        echo "Logged in $uname";
        // if ($row['username'] === $uname && $row['password'] === $pass) {
        //     echo "Logged in $uname";
        // }
            // $_SESSION['user_name'] = $row['user_name'];
            // $_SESSION['name'] = $row['name'];
            // $_SESSION['id'] = $row['id'];
        
    }
        
    
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
     <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        
        <label>ID</label>
        <input type="number" name="id" placeholder="ID"><br>

        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br> 
        
        <button type="submit">Login</button>

     </form>
</body>
</html>