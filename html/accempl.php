<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil Employé</title>
    <link rel="stylesheet" href="../css/accemploye.css">
</head>

<body>
    <!-- En-tête de bienvenue -->
    <header>
        <h1>Bienvenue <span style="text-transform: uppercase;"><?= $_SESSION['prenom'] . " " . $_SESSION['nom'] ?></span>,</h1>
        <ul style="list-style-type: none;">
            <li class="voirprofil">
                <a class="voir_profil" href="profileEmploye.php">voir mon profil</a>
            </li>
            <li>
                <a href="logout2.php" class="deconnect">Déconnection</a>
            </li>
        </ul>
        <p>Merci pour votre travail. Veuillez remplir vos heures de travail ci-dessous.</p>
    </header>






    <figure class="header-pres__principal container">
               <figcaption class="header-pres__content">
                    <h1 class="header-pres__title">le plastique Espace Employés</h1>
                      <p class="header-pres__text">Bienvenue sur votre espace de travail. <br>
                         Ici, vous pouvez consulter vos heures de travail enregistrées et suivre votre emploi du temps. <br>
                         Cet outil est conçu pour vous offrir une vue claire et simplifiée de vos activités,  <br>
                          afin de mieux organiser votre journée. <br>
                          Si vous avez des questions ou des demandes, <br>
                           n'hésitez pas à contacter votre responsable. </p>
                           <br> <br>   <br>  
                    </figcaption>
                                                    <picture class="header-pres__img header-pres__img--bg">
                        <div>
                            <img fetchpriority="high" width="300" height="300" src="https://cheops-info.com/wp-content/uploads/2023/03/icon-sage-BI-reporting-1.svg" class="attachment-medium size-medium" alt="Des statistiques représentant l'icône de Sage BI reporting" decoding="async">                           
                        </div>     
                    </picture>
                            </figure>

   

    <!-- Pied de page -->
    <footer>
        <p>&copy; 2024 Le Plastique. Tous droits réservés.</p>
    </footer>
</body>

</html>