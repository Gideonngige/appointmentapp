<?php 
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="assets/images/flag.png" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appointment.php">Book Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="messages.php">Messages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5"> 
    <div class="row"> 
    <div class="col-md-6"> 
        <img src="assets/images/judiciary.png" class="img-fluid" alt="judiciary"> 
    </div> 
    <div class="col-md-6"> 
        <h2>The Judiciary</h2> 
        <p> This is a description text that appears next to the image. 
            It is styled to be responsive and will adjust as per the screen size.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum at asperiores ducimus maiores ea, mollitia, porro dolor ipsum consequuntur explicabo, minus iste dolorum consectetur facere provident officia ratione fugiat?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam totam expedita vel est sequi temporibus incidunt eaque, ex exercitationem delectus iste repellendus itaque? Similique quibusdam vel numquam nisi a cupiditate.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo consequuntur reprehenderit autem veniam distinctio nam veritatis, aliquam laudantium? Ratione velit id veniam rerum necessitatibus enim hic incidunt, error minus exercitationem? 

        </p> 
    </div>
</div> 
</div>

<!--for the executive part-->
<div class="container mt-5"> 
    <div class="row"> 
    <div class="col-md-6"> 
        <img src="assets/images/executive.png" class="img-fluid" alt="judiciary"> 
    </div> 
    <div class="col-md-6"> 
        <h2>The Executive</h2> 
        <p> This is a description text that appears next to the image. 
            It is styled to be responsive and will adjust as per the screen size.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum at asperiores ducimus maiores ea, mollitia, porro dolor ipsum consequuntur explicabo, minus iste dolorum consectetur facere provident officia ratione fugiat?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam totam expedita vel est sequi temporibus incidunt eaque, ex exercitationem delectus iste repellendus itaque? Similique quibusdam vel numquam nisi a cupiditate.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo consequuntur reprehenderit autem veniam distinctio nam veritatis, aliquam laudantium? Ratione velit id veniam rerum necessitatibus enim hic incidunt, error minus exercitationem? 

        </p> 
    </div>
</div> 
</div>
<!--end of executive-->

<!--for the legislative part-->
<div class="container mt-5"> 
    <div class="row"> 
    <div class="col-md-6"> 
        <img src="assets/images/legislative.png" class="img-fluid" alt="judiciary"> 
    </div> 
    <div class="col-md-6"> 
        <h2>The Legislative</h2> 
        <p> This is a description text that appears next to the image. 
            It is styled to be responsive and will adjust as per the screen size.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum at asperiores ducimus maiores ea, mollitia, porro dolor ipsum consequuntur explicabo, minus iste dolorum consectetur facere provident officia ratione fugiat?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam totam expedita vel est sequi temporibus incidunt eaque, ex exercitationem delectus iste repellendus itaque? Similique quibusdam vel numquam nisi a cupiditate.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo consequuntur reprehenderit autem veniam distinctio nam veritatis, aliquam laudantium? Ratione velit id veniam rerum necessitatibus enim hic incidunt, error minus exercitationem? 

        </p> 
    </div>
</div> 
</div>

<!-- Footer --> 
 <footer class="bg-primary text-white mt-5"> 
    <div class="container py-4"> 
        <div class="row"> 
            <div class="col-md-4"> 
                <h5>About Us</h5> 
                <p>We are committed to providing the best services for our clients. Your satisfaction is our priority.</p> 
            </div> 
            <div class="col-md-4"> 
                <h5>Contact Us</h5> 
                <ul class="list-unstyled"> 
                    <li>Email: info@example.com</li> 
                    <li>Phone: +254 456 7890</li> 
                    <li>Address: 123 Main St, Nairobi, Kenya</li> 
                </ul> 
            </div> 
            <div class="col-md-4"> 
                <h5>Follow Us</h5> 
                <ul class="list-unstyled"> 
                    <li><a href="#" class="text-white">Facebook</a>
                </li> <li><a href="#" class="text-white">Twitter</a></li> 
                <li><a href="#" class="text-white">Instagram</a></li> 
            </ul> 
        </div> 
    </div> 
</div> 
<div class="text-center py-3 border-top"> &copy; 2024 Kenya Appointments. All Rights Reserved. </div> </footer>
    
</body>
</html>