<?php
$servername = "localhost";
$username = "root";
$password = "@mysql2024";
$dbname = "appointments";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    //die("Connection failed: " . mysqli_connect_error());
  } else{
    //echo "Connection established: ";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>register</title>
</head>
<body>
    <div class="container">
        <div class="inner-container">
            <form action="register.php" method="POST">
            <h4 class="header">Register</h4><hr>
            <table>
                <tr>
                    <td><label>First name</label><br><input type="text" name="fname" class="form-control" placeholder="your first name" /></td>
                    <td><label>Last name</label><br><input type="text" name="lname" class="form-control" placeholder="your last name" /></td>
                </tr>
            </table>
            <label>Email</label><br>
            <input type="email" name="email" class="form-control" placeholder="e.g example@gmail.com" required /><br>
            <label>Password</label><br>
            <input type="password" name="password" class="form-control" placeholder="your password" required /><br>
            <p>Already have an account?<a href="login.php" style="color:black">Sign In</a></p>
            <input type="submit" value="Register"  class="btn btn-custom" />
            </form>
            <?php 
            if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $sql = "SELECT username FROM Users WHERE email = '$email' AND user_password = '$password'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "User already exists";
                }
                else{
                    $username = $fname . " " . $lname;
                    $sql = "INSERT INTO Users (username, email, user_password) VALUES ('$username','$email', '$password')";
                    if (mysqli_query($conn, $sql)) {
                        echo "New user created successfully";
                    } else {
                        echo "Error: ". $sql. "<br>". mysqli_error($conn);
                    }
                }
            }
            else{
                echo "Not set";
            }

            ?>
        </div>
    </div>

    
</body>
</html>