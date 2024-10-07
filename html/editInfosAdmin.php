<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres de Compte</title>
    <link rel="stylesheet" href="../css/profilemploye.css">
</head>
<body>
    <div class="conteneur">
        <div class="menu-lateral">
            <div class="profil">
              
                <!-- nom usr -->
                <h2 id="nom-utilisateur">zakaria el ferrouni</h2>
            </div>
            <br><br><br>
            <ul class="menu">
                <li><a href="#" class="actif">Compte</a></li>
            
               <li><a href="#" class="nonactif">Mot de passe</a></li>
                <li><a href="#" class="nonactif">Sécurité</a></li>
                <li><a href="#" class="nonactif">Application</a></li>
                <li><a href="#" class="nonactif">Notification</a></li>
            </ul>
        </div>
        <div class="parametres-compte">
            <h1 id="titre-page">Paramètres de Compte</h1>
            <form>
                <div class="ligne">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" >
                </div>
                <div class="ligne">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom">
                </div>
                <div class="ligne">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="ligne">
                    <label for="telephone">Numéro de téléphone</label>
                    <input type="text" id="telephone" name="telephone">
                </div>
                <div class="ligne">
                    <label for="designation">Désignation</label>
                    <input type="text" id="designation" name="designation" >
                </div>
                <div class="boutons">
                   <a href="accempl.php" class="btn-annuler">Revenir</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
