<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=egde">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="menu.js"></script>
    <title>Karin Giang - Webentwicklerin</title>
</head>
<body>
    <img src="img/menu/home.png" id="iconHome" class="classIcon" title="Home"></img>
    <img src="img/menu/projects.png" id="iconProjects" class="classIcon" title="Meine Projekte"></img>
    <img src="img/menu/websites.png" id="iconWebsites" class="classIcon" title="Webseiten Vorschläge"></img>
    <img src="img/menu/profile.png" id="iconProfile" class="classIcon" title="Mein Profil"></img>

    <?php include "pages/header.php";?>
 
    <div class="centerPage">
        <div id="home" class="classPage"><?php include "pages/home.php";?></div>
        <div id="projects" class="classPage"><?php include "pages/projects.php";?></div>
        <div id="websites" class="classPage"><?php include "pages/websites.php";?></div>
        <div id="profile" class="classPage"><?php include "pages/profile.php";?></div>   
    </div>
</body>
</html>
