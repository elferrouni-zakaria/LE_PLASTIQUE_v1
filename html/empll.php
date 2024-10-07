<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>se conecter </title>
    <link rel="stylesheet" href="../css/emp.css">
</head>

<body>
    <div class="container">
        <div class="column left">

            <h2>Bienvenue dans votre espace privé</h2>
            <img class="imgg-logo" src="../img/le-plastique.jpg" alt="">
            <p>Veuillez vous connecter à votre compte.</p>
        </div>
        <div class="column right">
            <h2 id="logintext">se connecter</h2>
            <form action="" method="post">
                <label for="username"><b> identifiant </b></label>
                <input type="text" id="username" class="login__input" placeholder="Veuillez entrer votre identifiant" name="identifiant" required>

                <label for="password"><b> mot passe</b></label>
                <input type="password" id="password" class="login__input" placeholder="Veuillez entrer votre mot de passe" name="motPass" required>

                <div>
                    <?php
                    if (isset($_POST['submit'])) {
                        include "connect.php";
                        extract($_POST);
                        $query = "SELECT * from employes where identifiant = '$identifiant' and motPass = '$motPass' ";
                        $result = mysqli_query($con, $query) or die("Error query");

                        if (mysqli_num_rows($result) == 0) {
                            echo "<p style='color:red; background:pink; border:1px solid red; cursor: pointer;'> Identifiant où le mot de passe incorrect</p>";
                        } else {
                            $employe = mysqli_fetch_assoc($result);

                            session_start();
                            $_SESSION['id'] = $employe['id'];
                            $_SESSION['identifiant'] = $employe['identifiant'];
                            $_SESSION['motPass'] = $employe['motPass'];
                            $_SESSION['nom'] = $employe['nom'];
                            $_SESSION['prenom'] = $employe['prenom'];
                            $_SESSION['email'] = $employe['email'];
                            $_SESSION['age'] = $employe['age'];
                            $_SESSION['pays'] = $employe['pays'];
                            $_SESSION['phone'] = $employe['phone'];
                            $_SESSION['designation'] = $employe['designation'];

                            header("location:accempl.php");
                        }
                    }
                    ?>
                </div>

                <input type="submit" value="Entrer" name="submit">
                <div>
                            <span class="login__account">je suis
                                <span>
                                    <a href="login_contable.php" id="emp"><ins> un comptable</ins></a>
                                </span>
                                dans LE PLASTIQUE
                            </span>


                        </div>
                        <br>
                <a href="login.php" class="seconect">Revenir</a>
            </form>
        </div>
    </div>
</body>

</html>