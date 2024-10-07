<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="../css/acc.css">
    <link rel="stylesheet" href="../css/conta.css">



</head>

<body>




    <header>
        <?php include "menu.php"; ?>


        <div class="contentbienvenue">
            <h2>Contactez-nous</h2>
            <br><br>

        </div>


    </header>



    <div class="container">

        <div class="form-column">
            <h1>Contactez-nous</h1>
            <form action="https://api.web3forms.com/submit" method="post">
                <input type="hidden" name="access_key" value="26d9933d-5dcf-4a36-a03a-7c6d99383e3f">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" placeholder="Entrer Votre nom" required>

                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" placeholder="Entrer Votre e-mail" required>


                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Entrer Votre message" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </div>

        <div class="info-column">
            <img src="../img/CONTACTNOS.jpg" alt="Image illustrative">
            <h2>Informations de contact</h2>
            <p><strong>Adresse:</strong> 123 Rue Exemple, Ville, Pays</p>
            <p><strong>Téléphone:</strong> +123 456 7890</p>
            <p><strong>Email:</strong> leplastique@leplastique.com</p>
            <h2>Heures d'ouverture</h2>
            <p><strong>Lundi - Vendredi:</strong> 9:00 - 18:00</p>
            <p><strong>Samedi:</strong> 10:00 - 14:00</p>
            <p><strong>Dimanche:</strong> Fermé</p>
        </div>
    </div>






    <footer class="footer">
        <?php include "footer.php"; ?>
    </footer>










</body>

</html>