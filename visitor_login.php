<!DOCTYPE html>
<html>
<head>
  <meta name = "viewport", content="width = device-width, initial-scale=1">
  <title> Corona Archive </title>
  <!-- <p style = "font-family:georgia,garamond,serif;font-size:70px;">
  <b> WELCOME TO THE UEFA CHAMPIONS LEAGUE INFO PAGE!</b> </p> -->
  <link rel = "stylesheet" href = "t.css"> 
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link
    rel="stylesheet"
    href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700;900&display=swap"
    rel="stylesheet"
  />
</head>

<body>

    <?php 
    
    $dbhost = 'localhost';
    $user ='seteam17';
    $pass ='XFc73r0J';
    $db ='seteam17';
    
    
    $conn= mysqli_connect('localhost', $user, $pass, $db);
    ?>

<div class="hero">
    <a href="login.php" class="back"><button class="back-btn" > Go back </button></a>
        <div class="form-box-pr">
            <div class="hp-text">
                <h2>Login Form</h2>
            </div>
            <div class="logo-hp">
                <img src="./images/av.jpg">
            </div>
            <form action="hospital_login.php" method="post" class="input-grp">
                <input type="text" name="username" class="input-field" placeholder="Username">
                <input type="password" name="password" class="input-field" placeholder="Password">
                <input type="hidden" name="deviceID" id="deviceID" value="">
                <input type="submit" name="signup">
            </form>
        </div>    
    </div>
    <?php
    if (isset($_POST['login'])) {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT visitor_username, visitor_password FROM Visitor WHERE visitor_username = '$username' AND visitor_password = '$password'");

    $array = mysqli_fetch_assoc($result);

    if ($array != NULL) {
        session_start();
        $_SESSION['huser'] = $username;
        header("Location: visitors_camera.php");
    } else { 
        echo "Invalid Login, Please Try Again"; 
        error_log ("Invalid login", 0);
    } 


    } else { 
        echo "All Fields Are Required!"; 
        error_log ("Empty required fields", 0); 
    }

    }

    ?>




</body>

</html>