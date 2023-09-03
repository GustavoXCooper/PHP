<?php
session_start();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

if(empty($name)){
    $_SESSION['error'] = 'Nome não foi preenchido!';
    header('Location: login.php');
} else {
    $_SESSION['name'] = $name;
}
header('location:index.php');

