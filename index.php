<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karin's Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <input type='radio' name='menu' id='topleft-check' class='topleft-check'>
        <div class='topleft' id='content'>
            <label class='topleft-label' for='topleft-check' id='check-label'></label>
            <h1>Home</h1>
            <?php
                
                //include "pages/home.php";
            ?>
        </div>

        <input type='radio' name='menu' id='topright-check' class='topright-check'>
        <div class='topright'id='content'>
            <label class='topright-label' for='topright-check' id='check-label'></label>
            <h1>Projects</h1>
            <?php
                //include "pages/projects.php";
            ?>
        </div>

        <input type='radio' name='menu' id='bottomleft-check' class='bottomleft-check'>
        <div class='bottomleft'id='content'>
            <label class='bottomleft-label' for='bottomleft-check' id='check-label'></label>
            <h1>About</h1>
            <?php
                //include "pages/about.php";
            ?>
        </div>

        <input type='radio' name='menu' id='bottomright-check' class='bottomright-check'>
        <div class='bottomright'id='content'>
            <label class='bottomright-label' for='bottomright-check' id='check-label'></label>
            <h1>Contact</h1>
            <?php
                //include "pages/contact.php";
            ?>
        </div>

    </div>
</body>
</html>