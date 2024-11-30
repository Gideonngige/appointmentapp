<?php 
session_start();
$username1 = $_SESSION["username"];
$email = $_SESSION["email"];
$user_id = $_SESSION["user_id"];
$appointment_id = "";

$servername = "localhost";
$username = "root";
$password = "@mysql2024";
$dbname = "appointments";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql1 = "SELECT appointment_id FROM appointment WHERE email = '$email'";
$result1 = mysqli_query($conn, $sql1);
            if($result1->num_rows > 0){
            while($row = $result1->fetch_assoc()){
                $appointment_id = $row['appointment_id'];   
            }
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="messages.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>messages</title>
</head>
<body>
    <div class="container">
        <div class="message">
            <?php 
            $sql = "SELECT message, message_time FROM messages WHERE appointment_id = '$appointment_id'";
            $result = mysqli_query($conn, $sql);
            if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $message =  $row['message'];
                $message_time = $row['message_time'];
                echo '<p style="color:white; margin:10px">' . htmlspecialchars($message_time, ENT_QUOTES, 'UTF-8') . '</p><hr>' .
                '<p style="margin:10px">' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8'). "It has been schedule on "  . $message_time = $row['message_time']; '</p>';
           
            }
            }
            else{
                echo '<p><strong>   ' . "You have no messages" . '</strong></p>';   
            }
            

            ?>
            
        </div>
        
</div>
    
</body>
</html>