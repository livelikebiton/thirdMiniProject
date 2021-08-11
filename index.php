<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Final Project</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>

        <div class="search_phase">
            <form action="" method="POST">
                <div>
                    <input type="text" placeholder="Search.." name="keywords" required="">
                </div>

                <div>
                    <button type="submit" name="keys_submit">
                        <div id="search-circle"></div>
                        <span>SEARCH</span>
                    </button>
                </div>

            </form>
        </div>
        <?php
        $search_URL = "http://www.google.com/search?q="; 
        if (isset($_POST['keys_submit'])) {
            echo $keywords = $_POST['keywords'];
            header("location: " . $search_URL . $keywords . ' ');
        }
        ?>
    </body>
</html>
