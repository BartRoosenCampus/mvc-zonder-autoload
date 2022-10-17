<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>MVC - links</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="container">
    <h1>Welkom op de links pagina</h1>
    <hr/>
    <?php include_once 'nav.php'; ?>
    <hr/>
    <img src="./img/nav.PNG"/>
    <p>
        Ondanks het feit dat de file "nav.php" zich in de "App/Presentation" folder bevind gaan de links toch verwijzen
        naar een controller in de root folder.
    </p>
    <hr/>

    <img src="./img/data.PNG"/>
    <p>
        In de code ga je in een link steeds verwijzen naar een controller
    </p>
    <p class="alert">
        NOOIT naar een file (pagina) die in de Presentation (of andere) laag staat!!!
    </p>
    <hr/>
    <img src="./img/controller-in-url.PNG"/>
    <p>
        Zoals je kan zien op deze afbeelding, de controller is de file die in de url wordt aangesproken.
    </p>
    <p>
        <span class="alert">De controller is de regisseur</span> en bepaald wat we te zien krijgen en hoe we daaraan geraken...
    </p>
    <hr/>
</div>
</body>
</html>
