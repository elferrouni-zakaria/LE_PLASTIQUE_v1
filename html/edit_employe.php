<?php
$id = $_GET['id'];
include "connect.php";
extract($_POST);
$query = "SELECT * from employes where id = $id";
$result = mysqli_query($con, $query);
$employe = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir et Modifier le Profil</title>
    <link rel="stylesheet" href="../css/Profil.css">


    <script>
        function Alert(message, isSucces){
            if(isSucces){
                alert(message);
            }
            else{
                alert('Error to update');
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <!-- Titre principal de la page -->
        <h2>Profil Employé</h2>

        <!-- Formulaire pour la modification du profil -->
        <form action="" method="post" enctype="multipart/form-data">


           

            <!-- Champ pour saisir le nom de l'utilisateur -->
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" value="<?= $employe['nom'] ?>" name="nom" required>
            </div>

            <!-- Champ pour saisir le prénom de l'utilisateur -->
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" value="<?= $employe['prenom'] ?>" required>
            </div>

            <!-- Champ pour saisir l'email de l'utilisateur -->
            <div class="form-group">
                <label for="identifiant">Identifiant:</label>
                <input type="text" id="identifiant" name="identifiant" value="<?= $employe['identifiant'] ?>" required>
            </div>

            <!-- Champ pour saisir l'email de l'utilisateur -->
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" value="<?= $employe['phone'] ?>" required>
            </div>

            <!-- Champ pour saisir l'email de l'utilisateur -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= $employe['email'] ?>" required>
            </div>

            <!-- Champ pour saisir le mot de passe de l'utilisateur -->
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="motPass" value="<?= $employe['motPass'] ?>" required>
            </div>

            <!-- Champ pour saisir l'âge de l'utilisateur -->
            <div class="form-group">
                <label for="age">Âge:</label>
                <input type="number" id="age" name="age" value="<?= $employe['age'] ?>" required>
            </div>

            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" id="designation" name="designation" value="<?= $employe['designation'] ?>" required>
            </div>

            <!-- Liste déroulante pour sélectionner le pays de l'utilisateur -->
            <div class="form-group">
                <label for="pays">Pays:</label>
                <select id="pays" name="pays" required>
                    <option value="-1">Select Your city</option>
                    <!-- Groupe d'options pour les pays africains -->
                    <optgroup label="Afrique">
                        <option value="Maroc" <?= $employe['pays'] == 'Maroc' ? 'selected' : '' ?>>Maroc</option>
                        <option value="Algérie" <?= $employe['pays'] == 'Algérie' ? 'selected' : '' ?>>Algérie</option>
                        <option value="Côte d’Ivoire" <?= $employe['pays'] == 'Côte d’Ivoire' ? 'selected' : '' ?>>Côte d’Ivoire</option>
                        <option value="Egypte" <?= $employe['pays'] == 'Egypte' ? 'selected' : '' ?>>Egypte</option>
                        <option value="Gabon" <?= $employe['pays'] == 'Gabon' ? 'selected' : '' ?>>Gabon</option>
                        <option value="Libye" <?= $employe['pays'] == 'Libye' ? 'selected' : '' ?>>Libye</option>
                        <option value="Mali" <?= $employe['pays'] == 'Mali' ? 'selected' : '' ?>>Mali</option>
                    </optgroup>

                    <!-- Groupe d'options pour les pays européens -->
                    <optgroup label="Europe">
                        <option value="france" <?= $employe['pays'] == 'france' ? 'selected' : '' ?>>France</option>
                        <option value="belgique" <?= $employe['pays'] == 'belgique' ? 'selected' : '' ?>>Belgique</option>
                        <option value="canada" <?= $employe['pays'] == 'canada' ? 'selected' : '' ?>>Canada</option>
                        <option value="Allemagne" <?= $employe['pays'] == 'Allemagne' ? 'selected' : '' ?>>Allemagne</option>
                        <option value="Belgique" <?= $employe['pays'] == 'Belgique' ? 'selected' : '' ?>>Belgique</option>
                        <option value="Espagne" <?= $employe['pays'] == 'Espagne' ? 'selected' : '' ?>>Espagne</option>
                        <option value="Italie" <?= $employe['pays'] == 'Italie' ? 'selected' : '' ?>>Italie</option>
                    </optgroup>
                </select>
            </div>
            <!-- Groupe de boutons pour valider ou annuler les modifications -->
            <div class="button-group">
                <button type="submit" name="submit" class="btn btn-primary">Modifier</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>

            <div style="width: 100%; justify-content: center; display: flex;">
                <?php
                if (isset($_POST['submit'])) {
                    include "connect.php";
                    $id2 = $employe['id'];
                    extract($_POST);
                    $query = "UPDATE employes set
                            identifiant = '$identifiant',
                            motPass = '$motPass',
                            nom = '$nom',
                            prenom = '$prenom',
                            age = '$age',
                            phone = '$phone',
                            email = '$email',
                            pays = '$pays',
                            designation = '$designation'
                            where id = '$id2' ";

                    if(mysqli_query($con, $query)){
                        echo "<script>Alert('Mession Complet', true);</script>";
                        echo "<script>setTimeout(() => { window.location.href = 'list_employes.php';}, 1000);</script>";
                    }else{
                        echo "<script>Alert('Error updating profile', false);</script>";
                    }
                    
                       
                }
                
                ?>
            </div>

            <!-- Bouton pour revenir à la page d'accueil -->
            <div class="back-button">
                <a href="list_employes.php" class="btn btn-back">Revenir à l'accueil</a>
            </div>
        </form>
    </div>
</body>

</html>