<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Exo Tableau WoW :</h1>
        <p>
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

        echo 'Le dirigeant actuel de Stormwind est'. ' '. $wow['Humain']. '.' . '<br />';//récupérer avec un clef et affiche sa valeur

        foreach($wow as $nom) {// je récupère que le nom car il parcours toutes les key et en affiche sa valeur
            echo 'Le dirigeant actuel est'. ' '.$nom . '.' . '<br />';
            // var_dump($wow);
        }


    ?>
    </p>

    <h1>Exercice Pokemon :</h1>

 
    <p>
        <?php

        $pokémons=[
            'eau'=>'Carapuce',
            'feu'=>'Salamèche',
            'plante'=>'Bulbizarre',
            'électrique'=>'Pikachu'
        ];

            echo 'Le pokémon est '. $pokémons['électrique']. '...' . '<br />';

            foreach($pokémons as $nomPokemon) {
                echo $nomPokemon.','. ' '. 'je te choisi !'. '<br />';
            }
        ?>
    </p>

    <h1>Formulaire :</h1>
    
    <form action="" method="POST" enctype="multipart/form-data">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required="required">
            <label for="prenom">Prenom :</label>
            <input type="text" name="prenom" id="prenom" required="required">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required="required">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required="required">
            <label for="file">Fichier à DL</label>
            <input type="file" name="file" id="file" required>
            <button>Envoyer</button>
    </form>
    <?php
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])) {

        // var_dump($_POST); // pour récupérer tout les champs de mon formulaire en méthode POST
        $nom = htmlspecialchars($_POST['nom']); // j'identifie chaque champs de mon formulaire par une variable
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $fichier = $_FILES['file'];
        $FILES_UPLOAD = $_FILES['file']['tmp_name'];

        echo 'Bonjour ' . $prenom . " " . $nom;
        var_dump($_FILES['file']['tmp_name']);// affiche toutes les données du fichier DL sous forme d'un tableau.
        pathinfo('nom_de_fichier');
        move_uploaded_file($FILES_UPLOAD['file']['tpm_name'], 'uploads/' . $FILES_UPLOAD);
    }

    ?>
</body>
</html>