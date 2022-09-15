<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karin's Homepage</title>
</head>
<body>
    <div id="main">
        <input type='checkbox' id='topleft-check' class='topleft-check'>
        <div class='home'>
            <label class='topleft-label' for='topleft-check'></label>
            <?php
                include "pages/home.php";
            ?>
        </div>

        <input type='checkbox' id='topright-check' class='topright-check'>
        <div class='home'>
            <label class='topright-label' for='topright-check'></label>
            <?php
                include "pages/projects.php";
            ?>
        </div>

        <input type='checkbox' id='bottomleft-check' class='bottomleft-check'>
        <div class='home'>
            <label class='bottomleft-label' for='bottomleft-check'></label>
            <?php
                include "pages/about.php";
            ?>
        </div>

        <input type='checkbox' id='bottomright-check' class='bottomright-check'>
        <div class='home'>
            <label class='bottomright-label' for='bottomright-check'></label>
            <?php
                include "pages/contact.php";
            ?>
        </div>

    </div>
</body>
</html>