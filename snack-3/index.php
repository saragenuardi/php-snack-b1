<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Creare un array di array.
     Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
     Stampare ogni data con i relativi post.
    Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->


    <?php

    //Array di array fornita
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $arrayDiChiavi = array_keys($posts);
    $arrayDiValori = array_values($posts);
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php

        for ($i = 0; $i < count($arrayDiChiavi); $i++) {
        ?>


            <h4>
                <?php echo $arrayDiChiavi[$i]; ?>
                <?php echo "<br>"; ?>
            </h4>

            <?php
            for ($s = 0; $s < count($posts[$arrayDiChiavi[$i]]); $s++) {
            ?>
                <h6>
                    <?php echo  $posts[$arrayDiChiavi[$i]][$s]['title'] ?>
                </h6>
                <h6>
                    <?php echo  $posts[$arrayDiChiavi[$i]][$s]['author'] ?>
                </h6>
                <h6>
                    <?php echo  $posts[$arrayDiChiavi[$i]][$s]['text'] ?>
                </h6>
        <?php
            }
        }
        ?>

    </body>

    </html>






</body>

</html>