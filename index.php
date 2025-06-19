<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Exo Tableau WoW :
        
        <!-- <?php
        // $noms =['Magni','Cairne','Tyrande','Sylvanas','Arthas'];
        // $races =['Nain','Tauren','Elfe','Mort_vivant','Humain'];
        //     echo $races[0].' - '.$races[1].' - '.$races[2]. ' - '. $races[3]. ' - '.$races[4];
        //     echo ' : '.$noms[0]. ' - '.$noms[1].' - '.$noms[2]. ' - '.$noms[3].' - '.$noms[4];

        // foreach($races as $noms => $races) {
        //     echo $races.' a la clé '.$noms.'<br />';
        // }

        ?> -->

    <?php

    $wow=[
        'Nain'=>'Magni',
        'Tauren'=>'Cairne',
        'Elfe'=>'Tyrande',
        'Mort-Vivant'=>'Sylvanas',
        'Humain'=>'Arthas'
    ];

        echo 'Le dirigeant actuel de Stormwind est'. ' '. $wow['Humain'];

    ?>


    </h1>

</body>
</html>