<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            overflow: hidden;
            margin: 0;
        }
        #main {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: lightblue;
        }

        #LO {
            top: 0;
            left: 0;
            position: absolute;
        }

        #RO {
            top: 0;
            right: 0;
            position: absolute;
        }

        #LU {
            bottom: 0;
            left: 0;
            position: absolute;
        }

        #RU {
            bottom: 0;
            right: 0;
            position: absolute;
        }

        
    </style>
</head>
<body>
    <div id="main">
        <img src='img/menu/home.png' id='LO'></img>
        <img src='img/menu/project.png' id='RO'></img>
        <img src='img/menu/websites.png' id='LU'></img>
        <img src='img/menu/contact.png' id='RU'></img>
</div>

<script>
    
    const page = ["LO", "RO", "LU", "RU"];
    for(let i=0; i<page.length; i++){
        document.getElementById(page[i]).addEventListener("click", function(e){openPage(e);});
    }

    function openPage(e){
        document.write(e.target.id + " / " + page);

    }
</script>
</body>
</html>