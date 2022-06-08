<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
    che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <?php
    //Aggiungo le variabili GET
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    //Utilizzo IF per fare controllo

    //STRLEN restituisce la lunghezza di una stringa
    //STRPOS trova la posizione della prima occorrenza di una stringa all'interno di un'altra stringa
    //IS_NUMERIC controlla se una variabile è un numero o una stringa numerica

    if (strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age)) {
        echo ('<h2>Accesso riuscito</h2>');
    } else {
        echo ('<h2>Accesso negato</h2>');
    }

    ?>

</body>

</html>