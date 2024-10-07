



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../css/login.css">
    <title>login username</title>
</head>


<body>
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                
                <img class="logoimg" src="../img/presentation.jpg" alt="">
            </div>

            <div class="login__forms">
                <section id="#s1">
                    <form action="" method="post" class="login__registre" id="login-in">
                        <h1 class="login__title">Se connecter</h1>

                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Enter votre email" class="login__input" name="email">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Enter votre mot passe" class="login__input" name="motPass">
                        </div>

                        <a href="" id="oublier">Mot de passe oublié?</a>

                        <input type="submit" class="login__button" name="submit" value="Se connecter">

                        <div>
                        <?php
                            if (isset($_POST['submit'])) {
                                include "connect.php";
                                extract(array: $_POST);
                                // $email = $_POST['email'];
                                $query = "SELECT * from users where email = '$email' and motPass = '$motPass' ";
                                $result = mysqli_query($con, query: $query) or die("Error query");
                                if (mysqli_num_rows($result) == 0) {
                                    echo "<p style='color:red; background:pink; border:1px solid red; cursor: pointer;'> Email où le mot de pass incorrect</p>";
                                } else {
                                    $user = mysqli_fetch_assoc($result);
                                    session_start();
                                    $_SESSION['user_id'] = $user['user_id'];
                                    $_SESSION['nom'] = $user['nom'];
                                    $_SESSION['prenom'] = $user['prenom'];
                                    $_SESSION['email'] = $user['email'];
                                    $_SESSION['motPass'] = $user['motPass'];
                                    $_SESSION['age'] = $user['age'];
                                    $_SESSION['pays'] = $user['pays'];
                                    
                                    header("location:acce1.php");
                                }
                            }
                            ?>
                        </div>
                        <div>
                            <span class="login__account">Je n'ai pas de compte ?</span>
                            <a href="insc.php" id="INSCR"><ins> S'inscrire</ins></a>
                        </div>
                        <hr>
                        <div>
                            <span class="login__account">je suis
                                <span>
                                    <a href="empll.php" id="emp"><ins> un employée</ins></a>
                                </span>
                                dans LE PLASTIQUE
                            </span>


                        </div>
                    </form>
            </div>
            </section>
            </form>
        </div>
    </div>
    </div>
</body>

</html>