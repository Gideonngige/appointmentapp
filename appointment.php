<?php 
session_start();
$username1 = $_SESSION["username"];
$email = $_SESSION["email"];
$user_id = $_SESSION["user_id"];

$servername = "localhost";
$username = "root";
$password = "@mysql2024";
$dbname = "appointments";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>appointment</title>
</head>
<body>
    <div class="container">
        <h4>Book Appointment</h4><hr>
        <form action="appointment.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $username1 ?>" required /><br>
            <label>Email</label>
            <input type="email" name="email" class="form-control" value=<?php echo $email ?>  required /><br>
            <label>Choose an activity</label>
            <select class="form-control" name="appointment">
                <option value="">--Select an activity--</option>
                <option>Legislature services</option>
                <option>Executive services</option>
                <option>Judiciary services</option>

            </select><br>
            <input type="submit" value="Book Appointment" class="btn btn-primary" />
        </form>
        <?php 
        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['appointment'])){
            $appointment = $_POST['appointment'];
            $sql1 = "SELECT email FROM Appointment WHERE email = '$email'";
            $result = mysqli_query($conn, $sql1);
            if(mysqli_num_rows($result) > 0){
                echo "Only one Appointment";
            }
            else{
            $sql = "INSERT INTO appointment(user_id, username, email, appointment_type) VALUES('$user_id', '$username', '$email', '$appointment');";
            if(mysqli_query($conn, $sql)){
                echo "Appointment submitted successfully";
            }
            else{
                echo "An error occured, try again later";
            }
        }
        }

        ?>

    </div>
    
</body>
</html>