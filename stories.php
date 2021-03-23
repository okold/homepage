<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> 
        <title>Creative Writing</title>
    </head>
    <body>
        <?php include "includes/header.inc.php";?>
        <main id="main">
            <h1>Short Stories</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody id="story_list">
                        <?php include "storylist.php";
                            
                            foreach ($storylist as $id => $data) {
                                echo "<tr>" . 
                                    "<td><a href='story.php?id=" . $id . "'>" . $data["title"] . "</a></td>" . 
                                    "<td><p>" . $data["desc"] . "</p>" . 
                                    "<p>Warnings: " . $data["warnings"] . "</p></td>" .
                                    "<td>" . $data["year"] . "</td>" .
                                "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </section>
        </main>
        <?php include "includes/footer.inc.php";?>
    </body>
</html>