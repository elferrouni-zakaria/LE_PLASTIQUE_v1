<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Définit l'encodage des caractères pour le document -->
    <meta charset="UTF-8">
    <!-- Configure le viewport pour s'adapter aux écrans des appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page -->
    <title>A Propos</title>
    <!-- Lien vers les feuilles de style CSS externes -->
    <link rel="stylesheet" href="../css/acc.css">
    <link rel="stylesheet" href="../css/apropos.css">
</head>

<body>

    <!-- Début de l'en-tête de la page -->
    <header>
        <!-- Inclusion du menu via PHP -->
        <?php include "menu.php"; ?>
        <div class="contentbienvenue">
            <h2>A propos</h2>
        </div>
    </header>
    <!-- Fin de l'en-tête de la page -->

    <!-- Début du contenu principal pour la section "À propos" -->
    <div class="content-apropos">
        <!-- Section "Notre Histoire" avec un titre, une image et une description -->
        <div class="notre_histoire">
            <h2 id="titre_histoire">Notre Histoire</h2>
            <div class="histoirepla">
                <img src="../img/histoire.jpg" class="img-Abdeljalil-Benamour" alt="Feu Abdeljalil Benamour">
                <p class="histle">Feu Abdeljalil Benamour, fondateur de Le Plastique, devant le premier
                    camion de caisses en plastique livrées par l’entreprise en 1967.</p>
            </div>
            <div class="histoirepla">
                <p>
                    Les racines de Le Plastique ont été plantées dès 1956, faisant ainsi de cette entreprise
                    l’un des initiateurs de la plasturgie au Maroc.
                    <br><br>
                    En 1967, la première caisse en plastique fut créée. Son impact sur l’optimisation
                    des chaînes de logistique et du transport des entreprises agroalimentaires marocaines fut immédiat.
                    Puis, en 1975, les premiers fûts fabriqués par Le Plastique permettront d’acheminer l’eau potable pour tous les participants à la Marche Verte.
                    <br><br>
                    De 1980 à 2000, des dizaines de modèles sont développés et fabriqués pour fournir des solutions adaptées aux besoins des clients de l’entreprise.
                    <br><br>
                    Depuis sa création, Le Plastique a ainsi développé une large gamme de produits
                    et a su être le partenaire privilégié de ses clients, veillant à mettre leur satisfaction au centre de ses préoccupations.
                    <br><br>
                    Aujourd’hui, l’ambition de Le Plastique est de devenir le leader
                    africain dans la conception et le développement de solutions logistiques innovantes.
                </p>
            </div>
        </div>
        <hr>

        <!-- Section "Présentation" avec un titre, une image et une description -->
        <div class="presentation">
            <h2 id="titre_prese">Présentation</h2>
            <div class="histoirepla">
                <img src="../img/presentation.jpg" class="img-presentatiion-leplastique" alt="présentation Le Plastique">
                <p class="presenleplastique">Depuis sa création en 1956, Le Plastique est un expert reconnu et un acteur novateur dans le
                    secteur des articles de manutention et d’emballage.</p>
            </div>
            <div class="presentlepla">
                <p>
                    Continuellement inspirés par nos clients, notre ambition est de leur fournir des solutions adaptées à
                    leurs besoins. Pour cela, et grâce à une excellence opérationnelle et un savoir-faire maîtrisé, Le Plastique, en véritable partenaire, s’inscrit dans une démarche d’optimisation de la chaîne d’approvisionnement de ses clients et d’amélioration de leurs performances. Ils savent qu’ils peuvent compter sur notre professionnalisme et sur notre rigueur.
                    <br><br>
                    Nous mettons ainsi en œuvre notre exigence de qualité et notre recherche d’innovation.
                    Deux engagements forts partagés par toute notre équipe, nos Ambassadeurs Experts.
                    <br><br>
                    En effet, nos collaborateurs, facteur clé de succès de Le Plastique, sont animés par un même
                    esprit de performance.
                    <br><br>
                    Un esprit fort tourné vers un seul objectif : la satisfaction de nos clients!
                </p>
            </div>
        </div>
    </div>
    <!-- Fin du contenu principal -->

    <!-- Début du pied de page -->
    <footer class="footer">
        <!-- Inclusion du pied de page via PHP -->
        <?php include "footer.php"; ?>
    </footer>
    <!-- Fin du pied de page -->

</body>

</html>
