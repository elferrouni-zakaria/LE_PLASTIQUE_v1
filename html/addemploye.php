<?php 
    include "connect.php";

    if(isset($_POST['submit'])){
        extract($_POST);

        $query = "INSERT INTO `employes`(`id`, `identifiant`, `motPass`, `nom`, `prenom`, `age`, `phone`, `email`, `pays`, `designation`) 
                    VALUES(null, '$identifiant', '$motPass', '$nom', '$prenom', '$age', '$phone', '$email', '$pays', '$designation')";

        mysqli_query($con, $query) or die('Error query');
        header('location:list_employes.php');
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/addemploye.css">
</head>

<body>
    <div class="container">
        <div class="item">
            <h1>Ajouter un employe</h1>
            <form action="" method="post">
                <div class="info">
                    <h2>Identifiant :</h2>
                    <input type="text" name="identifiant">
                </div>
                <div class="info">
                    <h2>Prénom :</h2>
                    <input type="text" name="prenom">
                </div>
                <div class="info">
                    <h2>Nom :</h2>
                    <input type="text" name="nom">
                </div>
                <div class="info">
                    <h2>Age :</h2>
                    <input type="number" name="age">
                </div>
                <div class="info">
                    <h2>Email :</h2>
                    <input type="email" name="email">
                </div>
                <div class="info">
                    <h2>Phone :</h2>
                    <input type="tel" name="phone">
                </div>
                <div class="info">
                    <h2>Password :</h2>
                    <input type="password" name="motPass" required>
                </div>
                <div class="info">
                            <h2>Pays:</h2>
                            <select id="pays" name="pays" required>
                                <!-- Groupe d'options pour les pays africains -->
                                <optgroup label="Afrique">
                                    <option value="Maroc">Maroc</option>
                                    <option value="Algérie">Algérie</option>
                                    <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                                    <option value="Egypte">Egypte</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Libye">Libye</option>
                                    <option value="Mali">Mali</option>
                                </optgroup>

                                <!-- Groupe d'options pour les pays européens -->
                                <optgroup label="Europe">
                                    <option value="france">France</option>
                                    <option value="belgique">Belgique</option>
                                    <option value="canada">Canada</option>
                                    <option value="Allemagne">Allemagne</option>
                                    <option value="Belgique">Belgique</option>
                                    <option value="Espagne">Espagne</option>
                                    <option value="Italie">Italie</option>
                                </optgroup>
                            </select>
                        </div>
                <div class="info">
                    <h2>Désignation :</h2>
                    <input type="text" name="designation">
                </div>
                <div class="btn">
                    <input type="submit" name="submit" value="Ajouter">
                </div>
                <div class="btn">
                    <a href="contable_options.php">Revenir</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>