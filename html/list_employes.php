<?php
include "connect.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM `employes` WHERE id = '$id'";
    mysqli_query($con, $query) or die('error deleting');
}

$query = "SELECT * from employes";
$result = mysqli_query($con, $query);
$employes = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap 5/bootstrapp.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center" style="color:#2b3a6b;">Table des Employes</h1>
        <div class="text-center">
            
            <a href="contable_options.php" class="btn btn-primary">Revenir</a>
        </div>

        <table class="table mt-5">
            <tr>
                <th style="color:#2b3a6b;"scope="col">ID</th>
                <th  style="color:#2b3a6b;"scope="col">NOM COMPLETE</th>
                <th style="color:#2b3a6b;"scope="col">Identifiant</th>
                <th  style="color:#2b3a6b;" scope="col">DESIGNIATION</th>
                <th  style="color:#2b3a6b;" scope="col">TELEPHONE</th>
                <th style="color:#2b3a6b;" scope="col">EMAIL</th>
                <th style="color:#2b3a6b;"scope="col">Actions</th>
            </tr>

            <?php foreach ($employes as $employe): ?>
                <tr>
                    <th style="color:#2b3a6b;"  scope="col"><?= $employe['id'] ?></th>
                    <td><?php echo $employe['prenom'] . " " . $employe['nom']  ?></td>
                    <td><?= $employe['identifiant'] ?></td>
                    <td><?= $employe['designation'] ?></td>
                    <td><?= $employe['phone'] ?></td>
                    <td><?= $employe['email'] ?></td>
                    <td>
                        <a href="edit_employe.php?id=<?= $employe['id'] ?>" class="btn btn-info">Modifier</a>
                        <a href="list_employes.php?id=<?= $employe['id'] ?>" class="btn btn-danger" onclick="return confirm('vous avez sure de supprimé ce employes ?')" delete>supprimé</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </table>
       
    </div>
</body>

</html>