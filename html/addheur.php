<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation des Heures - Espace Employé</title>
    <link rel="stylesheet" href="../css/addheur.css">
</head>

<body>
    <!-- En-tête de bienvenue -->
    <header>
        <h1>Bienvenue </h1>
        <ul style="list-style-type: none;">
            <li class="voirprofil">
                <a class="voir_profil" href="contable_options.php">Revenir</a>
            </li>
            <li>
                <a href="login_contable.php" class="deconnect">Déconnection</a>
            </li>
        </ul>
        <p>Merci pour votre travail. Veuillez remplir les heures de travail ci-dessous.</p>
    </header>

    <div class="container">
        <div class="item">
            <h1>Fournir toutes les tâches que vous avez effectuées par chaque employé</h1>

            <form action="" method="post">
                <div class="info">
                    <label for="idempl">Veuillez entrer identifiant d'Employé :</label>
                    <input type="text" name="identifiant" id="idempl" required>
                </div>

                <div class="semaine">
                    <div class="heure">
                        <h2>La semaine de travail :</h2>
                        <div class="input">
                            <label for="debut_semaine">Date de début :</label>
                            <div class="date">
                                <input type="number" name="jour1" placeholder="jour" required> -
                                <input type="number" name="moi1" placeholder="moi" required> -
                                <input type="number" name="annee1" placeholder="année" required>
                            </div>
                        </div>
                        <div class="input">
                            <label for="fin_semaine">Date de fin :</label>
                            <div class="date">
                                <input type="number" name="jour2" placeholder="jour" required> -
                                <input type="number" name="moi2" placeholder="moi" required> -
                                <input type="number" name="annee2" placeholder="année" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="heures">
                    <div class="heure">
                        <h2>Moule Caisse Agrume</h2>
                        <img src="../img/caisse agrume.jpg" alt="Moule Caisse Agrume">
                        <div class="input">
                            <label for="heures_TCA">Totale heures de TCA :</label>
                            <input type="number" name="heures_TCA" id="heures_TCA" required>
                        </div>
                    </div>

                    <div class="heure">
                        <h2>Moule Caisse Primeur</h2>
                        <img src="../img/Caisse Primeur.jpg" alt="Moule Caisse Primeur">
                        <div class="input">
                            <label for="heures_CP">Totale heures de CP :</label>
                            <input type="number" name="heures_CP" id="heures_CP" required>
                        </div>
                    </div>

                    <div class="heure">
                        <h2>Machine Krauss Maffei</h2>
                        <img src="../img/Krauss maffei.jpg" alt="Machine Krauss Maffei">
                        <div class="input">
                            <label for="heures_TKM">Totale heures de TKM :</label>
                            <input type="number" name="heures_TKM" id="heures_TKM" required>
                        </div>
                    </div>

                    <div class="heure">
                        <h2>Machine HDPE</h2>
                        <img src="../img/hdpe.jpg" alt="Machine HDPE">
                        <div class="input">
                            <label for="heures_HDPE">Totale heures de HDPE</label>
                            <input type="number" name="heures_HDPE" id="heures_HDPE" required>
                        </div>
                    </div>
                </div>

                <div style="width: 100%; display: flex; justify-content: center;">
    <?php
    if (isset($_POST['submit'])) {
        include "connect.php";

        // Collecte des données du formulaire
        $debut_semaine = $_POST['jour1'] . "-" . $_POST['moi1'] . "-" . $_POST['annee1'];
        $fin_semaine = $_POST['jour2'] . "-" . $_POST['moi2'] . "-" . $_POST['annee2'];
        $heures_TCA = $_POST['heures_TCA'];
        $heures_CP = $_POST['heures_CP'];
        $heures_TKM = $_POST['heures_TKM'];
        $heures_HDPE = $_POST['heures_HDPE'];
        $identifiant_employe = $_POST['identifiant'];

        // Vérification de l'identifiant dans la base de données
        $check_id_query = "SELECT * FROM employes WHERE identifiant = '$identifiant_employe'";
        $result = mysqli_query($con, $check_id_query);

        if (mysqli_num_rows($result) > 0) {
            // Calcul du total des heures
            $heures_totale = $heures_TCA + $heures_CP + $heures_TKM + $heures_HDPE;

            // Requête SQL pour insérer les données
            $query = "INSERT INTO `heuresTravail`(`debut_semaine`, `fin_semaine`, `heures_totale`, `heures_TCA`, `heures_CP`, `heures_TKM`, `heures_HDPE`, `identifiant_employe`) 
                      VALUES ('$debut_semaine', '$fin_semaine', '$heures_totale', '$heures_TCA', '$heures_CP', '$heures_TKM', '$heures_HDPE', '$identifiant_employe')";

            if (mysqli_query($con, $query)) {
                echo "<p style='color:green; background:greenyellow; border:1px solid green; text-align:center; border-radius:13px; padding: 20px 10px;'>Les heures de travail ont été enregistrées avec succès.</p>";
            } else {
                echo "<p style='color:red; background:pink; border:1px solid red; text-align:center; border-radius:13px; padding: 20px 10px;'>Erreur lors de l'enregistrement: " . mysqli_error($con) . "</p>";
            }
        } else {
            // Affichage du message d'erreur si l'identifiant est incorrect
            echo "<p style='color:red; background:pink; border:1px solid red; text-align:center; border-radius:13px; padding: 20px 10px;'>L'identifiant est incorrect. Veuillez vérifier et réessayer.</p>";
        }
    }
    ?>
</div>


                <div class="btn">
                    <input type="submit" name="submit" value="Ajouter" class="button-submit">
                </div>

            </form>
        </div>
    </div>

    <!-- Pied de page -->
    <footer>
        <p>&copy; 2024 Le Plastique. Tous droits réservés.</p>
    </footer>
</body>

</html>
