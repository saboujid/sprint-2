<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" , content="width = device-width, initial-scale=1">
    <title> Corona Archive </title>
    <!-- <p style = "font-family:georgia,garamond,serif;font-size:70px;">
  <b> WELCOME TO THE UEFA CHAMPIONS LEAGUE INFO PAGE!</b> </p> -->
    <link rel="stylesheet" href="t.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet" />
</head>

<body>

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include("connect.php");

    ?>

    <div class="hero">
        <a href="login.php" class="back"><button class="back-btn"> Go back </button></a>
        <div class="form-box-pr">
            <div class="hp-text">
                <h2>Agent Login Form</h2>
            </div>
            <div class="logo-hp">
                <img src="./images/av.jpg">
            </div>
            <form action="" method="post" class="input-grp">
                <input type="text" name="username" class="input-field" placeholder="Username">
                <input type="password" name="password" class="input-field" placeholder="Password">
                <input type="hidden" name="deviceID" id="deviceID" value="">
                <input type="submit" name="signup">
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['signup'])) {

        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $result = mysqli_query($conn, "SELECT agent_username, agent_password FROM Agent WHERE agent_username = '$username' AND agent_password = '$password'");

            $array = mysqli_fetch_assoc($result);

            if ($array != NULL) {
                session_start();
                $_SESSION['auser'] = $username;
                header("Location: agency.php");
            } else {
                echo "Invalid Login, Please Try Again";
                error_log("Invalid login", 0);
            }
        } else {
            echo "All Fields Are Required!";
            error_log("Empty required fields", 0);
        }
    }

    ?>

</body>

</html>