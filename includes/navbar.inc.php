<?php
    function create_navbar($links) {
        echo "<ul id='nav'>";

        foreach ($links as $text => $href) {
            echo "<li><a href='" . $href . "'>" . $text . "</a></li>";
        }

        echo "</ul>";
    }
?>