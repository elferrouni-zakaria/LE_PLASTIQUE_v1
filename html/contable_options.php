<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/contable_options.css">

    
    <script>
        // Fonction pour basculer entre les sections
        function showSection(sectionId) {
            // Masquer toutes les sections
            document.getElementById('Edit&delet').style.display = 'none';
            document.getElementById('addemp&heu').style.display = 'none';
            

            
            // Afficher la section sélectionnée
            document.getElementById(sectionId).style.display = 'flex';

            
            

        }

        
    </script>
</head>
<body>
<div class="btn">
        
<a href="#Edit&delet" onclick="showSection('Edit&delet')"  >modifier est supprimer</a>
<a href="#addemp&heu" onclick="showSection('addemp&heu')" >ajouter les employe est les heures</a>
<a href="profile_contable.php" class="deconnect">voir Mon Profil</a>
<a href="logout3.php" class="deconnect">Déconnection</a>

</div>   
    <div class="container">
        

          <div class="item" id="Edit&delet">
            <div class="option">
                <a href="list_users.php"><img src="../img/admin/imgusr.png" alt="utilisateures"  title="la liste des utilisateures" class="imgemplusr"></a>
            </div>
            <div class="option">
                <a href="list_employes.php"><img src="../img/admin/imgempl.png" alt="employer" title="la liste des employé" class="imgemplusr"></a>
            </div>
        </div>
        
        <div class="item addheuemp" id="addemp&heu" style="display: none;">
            <div class="option">
                <a href="addemploye.php"><img src="../img/admin/addempl.png" alt="add-employé" title="ajouter des employé" class="imgemplusr"></a>
            </div>
            <div class="option">
                <a href="addheur.php"><img src="../img/admin/addheur.png" alt="add-heures" class="imgemplusr" title="ajouter des heures de travaille pour les employé"></a>
            </div>
        </div>
    </div>
</body>
</html>