<!DOCTYPE html>
<html>
    <head>
        <title> config</title>
        <meta charset="utf-8"/>
        <body>
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>
        </body>
</head>
</html>