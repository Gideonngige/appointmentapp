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
    <title>admin</title>
</head>
<body>
    <div class="container">
        <h4>Schedule appintments</h4><hr>
        <form action="admin.php" method="POST">
            <label>Email</label><br>
            <select class="form-control" name="email"> 
                <option value="">--Select user email--</option> 
                <?php 
                $select_emails = "SELECT email FROM Appointment"; 
                $result = mysqli_query($conn, $select_emails); 
                if($result->num_rows > 0){ 
                    while($row = $result->fetch_assoc()){ 
                        echo '<option value="' . htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') . '</option>'; 
                    } 
                } 
                else { 
                    echo "0 results"; 
                }
                
                ?>
                </select>
        <br>
            <label>Date</label><br>
            <input type="date" name="date" class="form-control" required><br>
            <label>Message</label><br>
            <textarea col="25" row="50" class="form-control" name="message" placeholder="enter message here..."></textarea><br>
            <input type="submit" value="Send Message" class="btn btn-primary" />
            
        </form>
        <?php 
        if(isset($_POST['email']) && isset($_POST['date']) && isset($_POST['message'])){
            $email = $_POST['email'];
            $date = $_POST['date'];
            $message = $_POST['message'];
            
            
            $select_appointment_id = "SELECT appointment_id FROM Appointment WHERE email = '$email'";
            $result2 = mysqli_query($conn, $select_appointment_id);
            if($result->num_rows > 0){
            while($row = $result2->fetch_assoc()){
                $appointment_id = $row['appointment_id'];
            }
            $sql1 = "SELECT appointment_id FROM Messages WHERE appointment_id = '$appointment_id'";
            $result = mysqli_query($conn, $sql1);
            if(mysqli_num_rows($result) > 0){
                echo "Message already exists";
            }
            $sql = "INSERT INTO Messages(appointment_id, message, message_time) VALUES('$appointment_id', '$message', '$date');";
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