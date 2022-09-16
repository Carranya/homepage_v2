<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Karin's Homepage</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <h1>Karin's Homepage</h1>
        <input type='radio' name='menu' id='topleft-check' class='topleft-check' checked='checked'>
        <div class='topleft' id='content'>
            <label class='topleft-label' for='topleft-check' id='check-label'></label>
            <?php
                
                include "pages/home.php";
            ?>
        </div>

        <input type='radio' name='menu' id='topright-check' class='topright-check'>
        <div class='topright'id='content'>
            <label class='topright-label' for='topright-check' id='check-label'></label>
            <?php
                include "pages/project.php";
            ?>
        </div>

        <input type='radio' name='menu' id='bottomleft-check' class='bottomleft-check'>
        <div class='bottomleft'id='content'>
            <label class='bottomleft-label' for='bottomleft-check' id='check-label'></label>
            <?php
                include "pages/about.php";
            ?>
        </div>

        <input type='radio' name='menu' id='bottomright-check' class='bottomright-check'>
        <div class='bottomright'id='content'>
            <label class='bottomright-label' for='bottomright-check' id='check-label'></label>
            <?php
                include "pages/contact.php";
            ?>
        </div>

    </div>
</body>
</html>