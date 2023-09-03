<?php 
session_start();

if(empty($_SESSION['name'])){
    header('Location: login.php');
}

?>
<html>
    <head>
        <title>Página secreta!</title>
    </head>
    <body>
        <h1>Olá, <?php echo $_SESSION['name']; ?> - <a href="logout.php">Sair</a></h1>  
    </body>
</html>