<?php
    session_start();
    if(!isset($_SESSION['auser'])){
        header('Location: agency_login.php');
    } else {
?>

<html>
<head>
<meta name = "viewport", content="width = device-width, initial-scale=1">
<link rel = "stylesheet" href = "table.css">
</head>

<body> 
    <ul>
        <li> <button class="button" > <a href="agency_logout.php" class="back"> Log out </a> </button>  </li>
    </ul>

    <div id="t1">
    <a href="agency_visitor.php" class="back"> View Visitors list </a> <br>
    </div>
    <br>
    <div id="t2">
    <a href="agency_places.php" class="back"> View Places list </a>
    </div>
    <br>
    <div id="t2">
    <a href="agency_hospital.php" class="back"> View Hospital list </a>
    </div>
    <br>


    <form action="agency.php">
        <input type="text" placeholder="Search.." name="search">
    </form>





</body>

</html>
<?php
    }
?>