<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>MVC - home</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="container">
    <h1>Welkom op de homepagina</h1>
    <hr/>
    <?php include_once 'nav.php'; ?>
    <hr/>
    <h3>Gemeenschappelijke onderdelen van een view kan je best afsplitsen</h3>
    <img src="./img/split.PNG"/>

    <p>
        De hoofdreden voor deze afsplitsing is onderhoud. Stel je voor dat je in elke view de navigatiebalk zou hebben
        staan dan wordt het een gedoe wanneer een link toegevoegd of gewijzigd moet worden.
    </p>
    <p>
        <span class="alert">LET OP:</span> het pad naar deze file is niet relatief aan de root folder maar aan de
        folder waarin de view zich bevind!
    </p>
    <hr/>
    <img src="./img/nav-html.PNG"/>
    <p>
        Dit is wat er te vinden is in "nav.php". Dit stukje html wordt door middel van een "include_once" toegevoegd aan
        deze view.
    </p>
    <hr/>
</div>
</body>
</html>
