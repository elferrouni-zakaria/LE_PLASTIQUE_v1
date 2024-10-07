<?php
session_start();
$id = $_SESSION['id'];
$identifiant = $_SESSION['identifiant'];
include "connect.php";
$mess = "";
$query = "SELECT motPass from employes where id = '$id'";
$result = mysqli_query($con, $query);
$employe = mysqli_fetch_assoc($result);

$motPass = $employe['motPass'];

$query1 = "SELECT * from heurestravail where identifiant_employe = '$identifiant'";
$result = mysqli_query($con, $query1) or die("Error query heures");
if(mysqli_num_rows($result)==0){
    $mess = "0h";
}
else{

    $heurestravail = mysqli_fetch_assoc($result);
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres de Compte</title>
    <link rel="stylesheet" href="../css/profilemplo.css">

<style>

    
.item{
    background-color: #fff;
    height: 80%;

    border-radius: 15px;
    width: 100%;
    
}
    .heures{
        display: flex;

        width: 100%;
        justify-content: space-between;

    }
    .heure {
        width: 100%;
        text-align: center;

        justify-content: center;
    }
</style>



    <script>
        // Fonction pour basculer entre les sections
        function showSection(sectionId) {
            // Masquer toutes les sections
            document.getElementById('compte').style.display = 'none';
            document.getElementById('motDePasse').style.display = 'none';
            document.getElementById('heurestravail').style.display = 'none';

            // Afficher la section sélectionnée
            document.getElementById(sectionId).style.display = 'block';
        }

        function Alert(message, isSucces) {
            if (isSucces) {
                alert(message);
            } else {
                alert("ERROR update");
            }
        }
    </script>
</head>

<body>
    <div class="conteneur">
        <div class="menu-lateral">
            <div class="profil">
                <!-- L'image de profil changeable pour chaque employé -->

                <!-- nom usr -->
                <h2 style="font-family: Arial, Helvetica, sans-serif;" id="nom-utilisateur"><?= $_SESSION['nom'] . " " . $_SESSION['prenom'] ?></h2>
            </div>
            <br><br><br>
            <ul class="menu">
                <!-- Les liens déclenchent la fonction showSection() en passant l'ID de la section correspondante -->
                <li><a href="#" class="actif" onclick="showSection('compte')">Compte</a></li>
                <li><a href="#motDePasse" class="nonactif" onclick="showSection('motDePasse')">Mot de passe</a></li>
                <li><a href="#" class="nonactif" onclick="showSection('heurestravail')">heures de travaille </a></li>
                <li><a href="#" class="nonactif">Notification</a></li>
            </ul>
        </div>

        <!-- Section compte -->
        <div id="compte" class="parametres-compte" style="display: block;">
            <div class="container">
                <div class="infos">
                    <div class="info">
                        <h2>Prénom :</h2>
                        <p><?= $_SESSION['prenom'] ?></p>
                    </div>
                    <div class="info">
                        <h2>Nom :</h2>
                        <p><?= $_SESSION['nom'] ?></p>
                    </div>
                    <div class="info">
                        <h2>Email :</h2>
                        <p><?= $_SESSION['email'] ?></p>
                    </div>
                    <div class="info">
                        <h2>Phone :</h2>
                        <p><?= $_SESSION['phone'] ?></p>
                    </div>
                    <div class="info">
                        <h2>Désignation :</h2>
                        <p><?= $_SESSION['designation'] ?></p>
                    </div>
                    <div class="btn">
                        <a href="accempl.php">Revenir</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section mot de passe (par défaut cachée)  de mot passe-->
        <div id="motDePasse" class="parametres-compte" style="display: none;">
            <h1 id="titre-page">Changé Mot Passe</h1>
            <div class="container">
                <div class="infos">

                    <form action="" method="post">
                        <div class="info">
                            <label for="cuerpassword">ancien mot passe :</label>
                            <input type="password" name="ancienPass" id="cuerpassword">
                        </div>
                        <div class="info">
                            <label for="newpassword">nouveau mot passe :</label>
                            <input type="text" name="newPass" class="Newpassword" id="newpassword">
                        </div>
                        <div class="info">
                            <label for="Cnewpassword">confirmé le mot passe :</label>
                            <input type="text" name="confirmPass" class="Newpassword" id="Cnewpassword">
                        </div>

                        <div class="btn">
                            <input type="submit" name="submit" value="Save">

                            <input type="submit" value="annuler">
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        extract($_POST);
                        if ($motPass == $ancienPass) {

                            if ($newPass == $confirmPass) {
                                $query = "UPDATE employes set
                                        motPass = '$newPass'
                                        where id = '$id' ";
                                if(mysqli_query($con, $query)){
                                    echo "<script>Alert('Le mot de pass a été mise à jouré', true)</script>";
                                    echo "<script>setTimeout(() => { window.location.href = 'logout2.php'; }, 1000);</script>";

           
                                }else{
                                    echo "Error query";
                                }
                               
                            } else {

                                echo "<p style='color:red; text-align:center;'>Le mot de passe et la confirmation ne correspondent pas !</p>";

                            }
                        } else {
                            
                     
                            echo "<p style='color:red; text-align:center;'>L'ancien mot de passe est incorrect !</p>";

                          
                        }
                    }
                    ?>
                </div>
            </div>
        </div>





        <!-- Section mot de passe (par défaut cachée) des heures de travaille -->
        <div id="heurestravail" class="parametres-compte" style="display: none;">
            <h1 id="titre-page">Les Heures de Travaille de cette Semaine</h1>
            <div class="container">
                <div class="item">
                    <h3 style="text-align: center;">Totale d'heures du travail : <?php 
                                if(empty($mess)){
                                   echo $heurestravail['heures_totale']."h";
                                }else{
                                    echo $mess;
                                }
                            ?>
                    
                    <div class="heures">

                        <div class="heure">
                            <h2>Moule Caisse Agrume</h2>
                            <img src="../img/caisse agrume.jpg" alt="" title="Moule Caisse Agrume">
                            <p>Totale heures de TCA : <?php 
                                if(empty($mess)){
                                   echo $heurestravail['heures_TCA']."h";
                                }else{
                                    echo $mess;
                                }
                            ?></p>
                        </div>

                        <div class="heure">
                            <h2>Moule Caisse Primeur</h2>
                            <img src="../img/Caisse Primeur.jpg" alt="">
                            <p>Totale heures de CP : <?php 
                                if(empty($mess)){
                                   echo $heurestravail['heures_CP']."h";
                                }else{
                                    echo $mess;
                                }
                            ?>
                        </div>

                        <div class="heure">
                            <h2>Machine Krauss Maffei</h2>
                            <img src="../img/Krauss maffei.jpg" alt="">
                            <p>Totale heures de TKM : <?php 
                                if(empty($mess)){
                                   echo $heurestravail['heures_TKM']."h";
                                }else{
                                    echo $mess;
                                }
                            ?>
                                        
                           
                        </div>

                        <div class="heure">
                            <h2>Machine <br> HDPE</h2>
                            <img src="../img/hdpe.jpg" alt="">
                            <p>Totale heures de HDPE : <?php 
                                if(empty($mess)){
                                   echo $heurestravail['heures_HDPE']."h";
                                }else{
                                    echo $mess;
                                }
                            ?>
                                
                           
                        </div>

                    </div>

                </div>


            </div>
        </div>





    </div>
</body>

</html>