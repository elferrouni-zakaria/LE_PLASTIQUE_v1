<?php
$id = $_GET['user_id'];
include "connect.php";
extract($_POST);
$query = "SELECT * from users where user_id = $id";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);


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
        <h2>Profil utilisateur</h2>

        <!-- Formulaire pour la modification du profil -->
        <form action="" method="post" enctype="multipart/form-data">


           

            <!-- Champ pour saisir le nom de l'utilisateur -->
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" value="<?= $user['nom'] ?>" name="nom" required>
            </div>

            <!-- Champ pour saisir le prénom de l'utilisateur -->
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" value="<?= $user['prenom'] ?>" required>
            </div>

            <!-- Champ pour saisir l'email de l'utilisateur -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= $user['email'] ?>" required>
            </div>

            <!-- Champ pour saisir le mot de passe de l'utilisateur -->
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="motPass" value="<?= $user['motPass'] ?>" required>
            </div>

            <!-- Champ pour saisir l'âge de l'utilisateur -->
            <div class="form-group">
                <label for="age">Âge:</label>
                <input type="number" id="age" name="age" value="<?= $user['age'] ?>" required>
            </div>

            <!-- Liste déroulante pour sélectionner le pays de l'utilisateur -->
            <div class="form-group">
                <label for="pays">Pays:</label>
                <select id="pays" name="pays" required>
                    <option value="-1">Select Your city</option>
                    <!-- Groupe d'options pour les pays africains -->
                    <optgroup label="Afrique">
                        <option value="Maroc" <?= $user['pays'] == 'Maroc' ? 'selected' : '' ?>>Maroc</option>
                        <option value="Algérie" <?= $user['pays'] == 'Algérie' ? 'selected' : '' ?>>Algérie</option>
                        <option value="Côte d’Ivoire" <?= $user['pays'] == 'Côte d’Ivoire' ? 'selected' : '' ?>>Côte d’Ivoire</option>
                        <option value="Egypte" <?= $user['pays'] == 'Egypte' ? 'selected' : '' ?>>Egypte</option>
                        <option value="Gabon" <?= $user['pays'] == 'Gabon' ? 'selected' : '' ?>>Gabon</option>
                        <option value="Libye" <?= $user['pays'] == 'Libye' ? 'selected' : '' ?>>Libye</option>
                        <option value="Mali" <?= $user['pays'] == 'Mali' ? 'selected' : '' ?>>Mali</option>
                    </optgroup>

                    <!-- Groupe d'options pour les pays européens -->
                    <optgroup label="Europe">
                        <option value="france" <?= $user['pays'] == 'france' ? 'selected' : '' ?>>France</option>
                        <option value="belgique" <?= $user['pays'] == 'belgique' ? 'selected' : '' ?>>Belgique</option>
                        <option value="canada" <?= $user['pays'] == 'canada' ? 'selected' : '' ?>>Canada</option>
                        <option value="Allemagne" <?= $user['pays'] == 'Allemagne' ? 'selected' : '' ?>>Allemagne</option>
                        <option value="Belgique" <?= $user['pays'] == 'Belgique' ? 'selected' : '' ?>>Belgique</option>
                        <option value="Espagne" <?= $user['pays'] == 'Espagne' ? 'selected' : '' ?>>Espagne</option>
                        <option value="Italie" <?= $user['pays'] == 'Italie' ? 'selected' : '' ?>>Italie</option>
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
                    $id2 = $user['user_id'];
                    extract($_POST);
                    $query = "UPDATE users set
                            nom = '$nom',
                            prenom = '$prenom',
                            email = '$email',
                            motPass = '$motPass',
                            age = '$age',
                            pays = '$pays'
                            where user_id = '$id2' ";

                    if(mysqli_query($con, $query)){
                        echo "<script>Alert('Mession Complet', true);</script>";
                        echo "<script>setTimeout(() => { window.location.href = 'list_users.php';}, 1000);</script>";
                    }else{
                        echo "<script>Alert('Error updating profile', false);</script>";
                    }
                    
                       
                }
                
                ?>
            </div>

            <!-- Bouton pour revenir à la page d'accueil -->
            <div class="back-button">
                <a href="list_users.php" class="btn btn-back">Revenir à l'accueil</a>
            </div>
        </form>
    </div>
</body>

</html>