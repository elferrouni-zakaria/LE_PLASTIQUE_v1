<?php 
    // Démarre une nouvelle session ou reprend une session existante
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Définit l'encodage des caractères pour le document -->
    <meta charset="UTF-8">
    <!-- Configure le viewport pour s'adapter aux écrans des appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page -->
    <title>Accueil</title>
    <!-- Lien vers la feuille de style CSS externe -->
    <link rel="stylesheet" href="../css/acc.css">
    <style>
        /* Style pour le pied de page, ajout d'un espace au-dessus */
        .footer {
            margin-top: 2em;
        }

        #button_login{
            background-color: #2b3a6b;
        }
        /* Style pour le nom de l'utilisateur affiché en majuscules */
        .nom {
            text-transform: uppercase; /* Convertit le texte en majuscules */
            letter-spacing: 3px; /* Espacement entre les lettres */
            font-family: Arial, Helvetica, sans-serif; /* Police de caractères */
            font-size: xx-large; /* Taille du texte */
            cursor: pointer; /* Curseur devient une main sur le texte */
            font-weight: 800; /* Texte en gras */
            transition: .6s ease; /* Effet de transition lisse */
        }
        /* Changement de style lorsque le texte est survolé */
        .nom:hover {
            color: #2b3a6b; /* Changement de couleur au survol */
            letter-spacing: 0px; /* Réduit l'espacement entre les lettres au survol */
        }
    </style>
</head>

<body>

    <!-- Début de l'en-tête de la page -->
    <header class="headerr">
        <!-- Inclusion du menu via PHP -->
        <?php include "menu2.php"; ?>

        <!-- Contenu de bienvenue avec le nom de l'utilisateur affiché dynamiquement -->
        <div class="contentbienvenue">
            <h2>BIENVENUE</h2>
            <br><br>
            <div>
                <!-- Bouton pour accéder à la page "NOS CLIENTS" -->
                <a href="NOS-CLIE.php" target="_blank">
                    <input type="submit" value="NOS CLIENTS" id="button_signup" class="button">
                </a>
                <!-- Bouton pour accéder à la page "Catalogue" -->
                <a href="Catalogue.php" target="_blank">
                    <input type="submit" value="Catalogue" id="button_login" class="button">
                </a>
            </div>
        </div>
    </header>
    <!-- Fin de l'en-tête de la page -->

  
</body>

</html>
