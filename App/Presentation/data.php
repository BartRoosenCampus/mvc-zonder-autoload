<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>MVC - Data</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="container">
    <h1>Welkom op de datapagina</h1>
    <hr/>
    <?php include_once 'nav.php'; ?>
    <hr/>
    <img src="./img/dataController.PNG"/>
    <h3>Het is gebeurd... Maar wat is er precies gebeurd?:</h3>
    <ol>
        <li>De controller heeft via de "Business-laag" de user data opgevraagd</li>
        <li>
            In de "Business-laag" werd de "Data-laag" gebruikt om de data op te vragen. Deze data werd bewerkt (naam in
            hoofdletters) en vervolgens doorgegeven aan de controller.
        </li>
        <li>
            De "Data-laag" heeft van een array een User entity gemaakt. Deze werd aan de "Business-laag" doorgegeven. Beeld
            je even in dat de array het resultaat is van een SQL statement om gegevens uit de database op te vragen.
        </li>
        <li>
            Om deze data af te beelden op het scherm heeft de controller een "view" uit de "presentatie-laag" opgehaald.
        </li>
    </ol>
    <p class="alert">
        Zoals je ziet, het is de "controller" die bepaald wat er gebeuren moet en of het al dan niet moet worden
        afgebeeld en in welke "view" dat dan moet. Vandaar de toepasselijke naam "Controller"...
    </p>
    <h3>De opgevraagde data presenteren:</h3>
    <p>Naam: <?= $user->getName() ?></p>
    <p>Email: <?= $user->getEmail() ?></p>
    <hr/>
    <h3>Wat in feit opgehaald werd door de controller:</h3>
    <pre class="alert">
        <?php print_r($user); ?>
    </pre>
</body>
</html>
