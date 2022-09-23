<?php include ("config.php");?>
<!DOCTYPE html>
<html>
    <head>
        <title> home</title>
        <meta charset="utf-8"/>
        <body>
        <p> Bravo
        <?php
          echo $_POST['fullname'];
             echo $_POST['email'];
             echo $_POST['phonenumber'];
             echo $_POST['password'];
             ?></p>
      <?php
echo 'bonjour';
$req = $bdd->prepare('INSERT INTO users(fullname, email,phonenumber, password) VALUES(:fullname,:email, :phonenumber, 
:password)');
$req->execute(array(
'fullname' => $_POST['fullname'],
'email' =>$_POST['email'],
'phonenumber' =>$_POST['phonenumber'],
'password' =>$_POST['password'],
));
header("Location:dashboard.php");
exit();
echo 'Le jeu a bien été ajouté !';
?>
  </body>
</head>
</html>
