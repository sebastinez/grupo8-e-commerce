<?php

if (isset($_GET["p"])) :
    $p = $_GET["p"];
else :
    $p = "home";
endif;


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/ico" href="img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Ubuntu:400,400i,500,500i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>E-Commerce</title>
</head>

<body>
    <div class="container-fluid">
        <?php
        include("./includes/nav.html");

        include("./includes/header.html");

        include("./includes/nav-productos.html");
        ?>
        <div id="body">

            <?php
            include("./paginas/" . $p . ".php");
            ?>

        </div>
        <?php
        include("./includes/footer.html");
        ?>
    </div>
    <script src="script/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="script/header.js"></script>
</body>

</html>