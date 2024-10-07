<?php 
    include "connect.php";
    $mess = "";
    if(isset($_POST['submit'])){
        extract($_POST);
        $query = "SELECT * from contable where username = '$username' and password = '$password'";
        $result = mysqli_query($con, $query) or die('Error query');
        if(mysqli_num_rows($result) == 0){
            $mess =  "Les donner sont incorrect !";
                                
        }
        else{
            $contable = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['id'] = $contable['id'];
            header("location:contable_options.php");
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login_contable.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="" method="post">
                <h1>Bonjour Mr le comptable</h1>
                <div class="input">
                    <p>username :</p>
                    <input type="text" name="username" required>
                </div>
                <div class="input">
                    <p>password :</p>
                    <input type="password" name="password" required>
                </div>
                
                <p style="text-align: center; color: red;"><?= $mess ?></p>
                <br>
                
                <div class="btn">
                    <input type="submit" name="submit" value="Login">
                </div>
                <a href="empll.php" class="seconect">revenir</a>
            </form>
        </div>
    </div>
</body>
</html>