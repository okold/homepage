<header>
    <a href="#main" id="skipnav">Skip navigation.</a>
    
    <?php include_once "navbar.inc.php";
        $links = [
            "Home" => "./index.php",
            "Stories" => "./stories.php",
            "GitHub" => "https://github.com/okold/",
            "Email" => "mailto: okold525@mtroyal.ca"
        ];

        create_navbar($links);
    ?>
</header>
