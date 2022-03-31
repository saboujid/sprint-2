<?php
session_start();
if (!isset($_SESSION['puser'])) {
    header('Location: places_login.php');
} else {
?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="table.css">
    </head>

    <body>
        <ul>
            <li> <button class="button"> <a href="places_logout.php" class="back"> Log out </a> </button> </li>
        </ul>
        this is what will be seen after place is logged in!
    </body>

    </html>
<?php
}
?>