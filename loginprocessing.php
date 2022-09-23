<?php 
include ("config.php");
$req = $bdd->prepare('SELECT email, password FROM users WHERE
email = :email AND password = :password');
$req->execute(array('email' => $_POST['email'], 'password'
=> $_POST['password']));
$reponse = $req;
$donnees = $reponse->fetchALL();
//var_dump($donnees);
$nombre= count($donnees);
 if ($nombre==0) 
 
 {
    echo "VEUILLEZ VOUS ENREGISTRER.";
header("Location: register.php");
exit();

 }
 else {
    echo "Vous pouvez vous connecter";
    header("Location:dashboard.php");
    exit();
 }

?>
<!DOCTYPE >
<html>
    <head>
        <title> dashboard</title>
        <body>
            
        </body>
    </head>
</html>


   
                      
                    
                  
              
                                           
                                     
                       
                                            
                

                