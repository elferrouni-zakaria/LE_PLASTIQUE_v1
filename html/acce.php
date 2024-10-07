<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Lien vers la feuille de style externe -->
    <link rel="stylesheet" href="../css/acc.css">
    <style>
        /* Style interne pour le pied de page */
        .footer {
            margin-top: 2em;
        }
    </style>
</head>

<body>

    <!-- Début du header (en-tête) -->
    <header class="headerr">
        <!-- Inclusion du menu via PHP -->
        <?php include "menu.php"; ?>

        <!-- Section de bienvenue avec des boutons -->
        <div class="contentbienvenue">
            <h2>BIENVENUE</h2>
            <br><br>
            <div>
                <!-- Bouton vers la page "NOS CLIENTS" -->
                <a href="NOS-CLIE.php">
                    <input type="submit" value="NOS CLIENTS" id="button_signup" class="button">
                </a>
                <!-- Bouton vers la page "Catalogue" -->
                <a href="Catalogue.php">
                    <input type="submit" value="Catalogue" id="button_login" class="button">
                </a>
            </div>
        </div>
    </header>
    <!-- Fin du header (en-tête) -->

    <!-- Début du footer (pied de page) -->
    <footer class="footer">
        <!-- Inclusion du footer via PHP -->
        <?php include "footer.php"; ?>
    </footer>
    <!-- Fin du footer (pied de page) -->

</body>

</html>
