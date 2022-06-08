<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->
    <?php
    $partite = [
        [
            "squadra_casa" => "Olimpia Milano",
            "squadra_ospite" => " Cantu",
            "punteggio_casa" => "55",
            "punteggio_ospite" => "60"
        ],
        [
            "squadra_casa" => "Lecce",
            "squadra_ospite" => "Bari",
            "punteggio_casa" => "5",
            "punteggio_ospite" => "6"
        ],
        [
            "squadra_casa" => "Firenze",
            "squadra_ospite" => "Roma",
            "punteggio_casa" => "550",
            "punteggio_ospite" => "600"
        ],
    ];

    for ($i = 0; $i < count($partite); $i++) {
        echo ('<ul>');
        echo ($partite[$i]['squadra_casa']) . ' - ' . $partite[$i]['squadra_ospite'] . ' : ' . $partite[$i]['punteggio_casa'] . ' - ' . $partite[$i]['punteggio_ospite'];
        echo ('</ul>');
    }
    ?>


</body>

</html>