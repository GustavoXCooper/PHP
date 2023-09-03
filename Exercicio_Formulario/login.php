<?php 
session_start();
?>
<html>
    <head>
        <title>Formulário de Login</title>
    </head>
    <body>
        <h1>Qual seu nome?</h1>
        <?php
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
        <form method='POST' action="processaForm.php">

            <input type="text"  name="name">
            <br/>
            <input type="submit" value="Salvar"/>
        </form>
    <body>


</html>
