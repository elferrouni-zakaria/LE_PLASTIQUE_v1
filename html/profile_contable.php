<?php
session_start();
$id = $_SESSION['id'];
include "connect.php";
$query = "SELECT * from contable where id = '$id'";
$result = mysqli_query($con, $query) or die('Error query');
$contable = mysqli_fetch_assoc($result);
$ancien_password = $contable['password'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/profile_contablee.css">
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
    <div class="container">
        <div class="item">
            <h1>Modifier informations</h1>
            <form action="" method="post">
                <div class="info">
                    <label for="nom_complete">Nom Complete :</label>
                    <input type="text" id="nom_complete" name="nom_complete" value="<?= $contable['nom_complete'] ?>" required>
                </div>
                <div class="info">
                    <label for="username">Identifiant :</label>
                    <input type="text" id="username" name="username" value="<?= $contable['username'] ?>" required>
                </div>
                <div class="info">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" value="<?= $contable['email'] ?>" required>
                </div>
                <div class="info">
                    <label for="password">Mot Passe :</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="info">
                    <label for="newPassword">nouveau Mot Passe :</label>
                    <input type="newPassword" id="newPassword" name="newPassword">
                </div>
                <div class="info">
                    <label for="confirmer_password">nouveau Mot Passe :</label>
                    <input type="confirmer_password" id="confirmer_password" name="confirmer_password">
                </div>
                <div class="btn">
                    <input type="submit" name="submit" id="submit" value="Modifier">
                </div>
                <a href="contable_options.php" class="seconect">revenir</a>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                extract($_POST);
                if (!empty($password)) {
                    if ($password == $ancien_password) {
                        if (!empty($newPassword)) {
                            if ($newPassword == $confirmer_password) {
                                $query = "UPDATE contable set
                                                nom_complete = '$nom_complete',
                                                username = '$username',
                                                email = '$email',
                                                password = '$newPassword'
                                                where id = '$id' ";
                                if (mysqli_query($con, $query)) {
                                    echo "<script>Alert('Le mot de pass a été mise à jourer', true)</script>";
                                    echo "<script>setTimeout(() => { window.location.href = 'profile_contable.php'; }, 1000);</script>";
                                } else {
                                    echo "Error query";
                                }
                            } else {
                                echo "<p style='color:red; text-align:center;'>Le mot de passe et la confirmation ne correspondent pas !</p>";
                                echo "<script>showSection('motDePasse')</script>";
                            }
                        } else {
                            $newPassword = $ancien_password;
                            $query = "UPDATE contable set
                                                nom_complete = '$nom_complete',
                                                username = '$username',
                                                email = '$email',
                                                password = '$newPassword'
                                                where id = '$id' ";
                            if (mysqli_query($con, $query)) {
                                echo "<script>Alert('la modification à eté bien fait', true)</script>";
                                echo "<script>setTimeout(() => { window.location.href = 'profile_contable.php'; }, 1000);</script>";
                            } else {
                                echo "Error query";
                            }
                        }
                    } else {
                        echo "<p style='color:red; text-align:center;'>Votre mot de passe est incorrect !</p>";
                    }
                } else {
                    echo "<p style='color:red; text-align:center;'>Il faut entrer votre mot de pass !</p>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>