<?php
include "connect.php";

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $query = "DELETE from users where user_id = '$user_id'";
    mysqli_query($con, $query) or die('error deleting');
}

$query = "SELECT * from users";
$result = mysqli_query($con, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);


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
        <h1 class="text-center" style="color:#2b3a6b;">Table utilisateurs</h1>
        
        <div class="text-center">
            <a href="contable_options.php" class="btn btn-primary" >Revenir</a>
            
        </div>
      
        <table class="table mt-5">
        <tr>
                <th style="color:#2b3a6b;" scope="col">ID</th>
                <th style="color:#2b3a6b;"scope="col">NOM COMPLETE</th>
                <th style="color:#2b3a6b;" scope="col">EMAIL</th>
                <th style="color:#2b3a6b;" scope="col">AGE</th>
                <th style="color:#2b3a6b;"scope="col">PAYS</th>
                <th style="color:#2b3a6b;" scope="col">Actions</th>
            </tr>

            <?php foreach ($users as $user): ?>
                <tr>
                    <th style="color:#2b3a6b;" ><?= $user['user_id'] ?></th>
                    <td><?php echo $user['prenom'] . " " . $user['nom'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['age'] ?></td>
                    <td><?= $user['pays'] ?></td>
                  
                  
                  
                    <td>
                        <a href="edit_user.php?user_id=<?= $user['user_id'] ?>" class="btn btn-info">Modifier</a>
                        <a href="list_users.php?user_id=<?= $user['user_id'] ?>" class="btn btn-danger" onclick="return confirm('vous avez sure de supprimé ce employes ?')" delete>supprimé</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </table>
        
    </div>
</body>

</html>