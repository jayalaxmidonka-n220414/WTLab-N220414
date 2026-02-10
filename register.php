<!DOCTYPE html>
<html>
    <head>
        <title>User Registration</title>
    </head>
    <body>
        <h2>User Registration</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <button type="submit" name="register">Register</button>
        </form>
    <?php
    include "db.php";
    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="INSERT INTO users(username,email,password)
                VALUES('$username','$email','$password')";
                if(mysqli_query($conn,$sql)){
                    echo "<p>Registration Successful</p>";
                }else{
                    echo "<p>Error occured</p>";
                }
    }
    ?>
    </body>
    </html>