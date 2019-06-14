<?php
$title = 'Home';
include_once('header.php');
?>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="read.php">Read</a>
            </li>
        </ul>
    </nav>

    <div class="jumbotron">
        <div class="col-sm-8 mx-auto">
            <h1>Eindcase CRUD Applicatie</h1>
            <p>CRUD is een afkorting uit de informatica die staat voor de vier basisoperaties die op duurzame gegevens (meestal een database) uitgevoerd kunnen worden. Deze zijn:</p>
            <p>Create (of insert): Toevoegen van nieuwe gegevens.<br />
                Read (of select): Opvragen van gegevens.<br />
                Update: Wijzigen van gegevens.<br />
                Delete: Verwijderen van gegevens.</p>
            <p>Vrijwel elk softwareprogramma maakt gebruik van de CRUD-functionaliteit.</p>
            <a class="btn btn-primary" href="read.php" role="button">Bekijk de read pagina »</a>
            </p>
        </div>
    </div>

    </html>