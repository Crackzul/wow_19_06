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
        'Nain'=>'Magni',//association clef => valeur
        'Tauren'=>'Cairne',
        'Elfe'=>'Tyrande',
        'Mort-Vivant'=>'Sylvanas',
        'Humain'=>'Arthas'
    ];

        echo 'Le dirigeant actuel de Stormwind est'. ' '. $wow['Humain'];//récupérer avec un clef

        foreach($wow as $nom) {// je récupère que le nom car il parcours toutes les key
            echo 'Le dirigeant actuel est'. ' '.$nom. '<br />';
            var_dump($wow);
        }


    ?>
    </h1>

    <h1>Exercice Pokemon</h1>
 
    <p>
        <?php

        $pokémons=[
            'eau'=>'Carapuce',
            'feu'=>'Salamèche',
            'plante'=>'Bulbizarre',
            'électrique'=>'Pikachu'
        ];

            echo 'Le pokémon est '. $pokémons['électrique']. '<br />';

            foreach($pokémons as $nomPokemon) {
                echo $nomPokemon.','. ' '. 'je te choisi !'. '<br />';
            }
        ?>
    </p>
</body>
</html>