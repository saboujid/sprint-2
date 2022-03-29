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
        <a href="index.php" class="back"><button class="back-btn"> Go back </button></a>
        <div class="form-box">
            <div class="hp-text">
                <h2>Registration Form</h2>
            </div>
            <div class="logo-hp">
                <img src="./images/av.jpg">
            </div>
            <form id="formID" action="visitors_register.php" method="post" class="input-grp">
                <input type="text" name="name" class="input-field" placeholder="Full Name">
                <input type="text" name="address" class="input-field" placeholder="Addresse">
                <input type="text" name="phone" class="input-field" placeholder="Phone">
                <input type="text" name="email" class="input-field" placeholder="Enter your email">
                <input type="hidden" name="deviceID" id="deviceID" value="">
                <input type="submit" name="signup">
            </form>
        </div>
    </div>


    <script>
        var navigator_info = window.navigator;
        var screen_info = window.screen;
        var uid = navigator_info.mimeTypes.length;
        uid += navigator_info.userAgent.replace(/\D+/g, '');
        uid += navigator_info.plugins.length;
        uid += screen_info.height || '';
        uid += screen_info.width || '';
        uid += screen_info.pixelDepth || '';
        console.log(uid);
        //document.write(uid);
        //$('#deviceID').val(uid); 
        //$('#formID').submit();
        document.getElementById("deviceID").value = uid
    </script>

    <?php
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $deviceID = $_POST['deviceID'];

        $minDigits = 9;
        $maxDigits = 14;

        if ($name == '' || $address == '' || $phone == '' || $email == '' || $deviceID == '') {
            echo 'Information cannot be empty';
        } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) { // Name Constraint
            echo 'Invalid name';
            error_log("Invalid name", 0);
        } elseif (!preg_match('/^[\w\.]+@\w+\.\w+$/i', $email)) { // Email Constraint
            echo 'Invalid email';
            error_log("Invalid email", 0);
        } elseif (!preg_match('/^[0-9]{' . $minDigits . ',' . $maxDigits . '}\z/', $phone)) { // Phone Constraint
            echo 'Invalid phone number';
            error_log("Invalid phone number", 0);
        } else {

            // Insert into database
            $sql = "INSERT INTO Visitor (visitor_name, v_address, v_phone_number, v_email, device_ID, infected) VALUES ('$name', '$address', '$phone', '$email', '$deviceID', 0)";
            if (mysqli_query($conn, $sql)) {
                header("Location:visitors_camera.php");
            } else {
                echo 'Device ID detected in database';
                header("Location:visitors_camera.php");
            }
        }
    }

    ?>


</body>

</html>