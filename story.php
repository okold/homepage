<?php include_once "storylist.php"?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        <title>
        <?php 
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                echo $storylist[$id]["title"];
            }
            else {
                echo "Whoops!";
            }
        ?>
        </title>
        <title>Creative Writing</title>
    </head>
    <body>
    <?php include "includes/header.inc.php";?>
        <main id="main">
        <?php include_once "storylist.php";

            if (isset($_GET["id"])) {
                $id = $_GET["id"];

                include "stories/". $id . ".html";
            }
        ?>
        <p><a href='#' id="return">Return to top</a></p>
        </main>
        <?php include "includes/footer.inc.html";?>
    </body>
</html>