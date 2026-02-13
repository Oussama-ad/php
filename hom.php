<?php
 session_start() ;
 require_once "database.php" ;  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>you are in home page</h1>
    <a href="index.php">other page</a>
</body>
</html>

<?php 
echo $_SESSION["name"] . "<br>" ; 
echo $_SESSION["password"] . "<br>" ; 


?>