<?php
if (isset($_POST['submit'])) {
    include "connect.php";
    extract($_POST);
    $query = "INSERT INTO users VALUES(null, '$nom', '$prenom', '$email', '$motPass', '$age', '$pays') ";
    mysqli_query($con, $query) or die("Error query");
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ins.css">
    <title>Form d'inscription</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }

        /* Style pour les étiquettes des champs de formulaire */
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: black;
        }

        /* Style pour les champs de texte, les sélections et les fichiers */
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #2b3a6b;
            border-radius: 5px;
        }
    </style>
</head>

<body>




    <table>
        <tr>
            <th>

                <h2>Registration Form</h2>
                <img src="../img/logo-plastique.jpg" alt="">

            </th>
            <th>

                <div class="donnerusrinsc">
                    <form action="" method="post">

                        <label for="nom">Nom:</label>
                        <input type="text" id="nom" name="nom" required><br><br>

                        <label for="prenom">Prénom:</label>
                        <input type="text" id="prenom" name="prenom" required><br><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br><br>

                        <label for="password">Mot de passe:</label>
                        <input type="password" id="password" name="motPass" required><br><br>

                        <label for="age">Âge:</label>
                        <input type="number" id="age" name="age" required><br><br>


                        <div class="form-group">
                            <label for="pays">Pays:</label>
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
                        <br><br>

                        <input type="submit" value="S'inscrire" name="submit">
                        <a href="login.php" class="seconect">Se connecter</a>
                    </form>
            </th>
        </tr>
    </table>

    </div>
</body>

</html>