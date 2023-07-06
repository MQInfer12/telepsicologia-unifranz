<?php
session_start();

if(!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'psicologo'){
    header('Location:home.php');
} 
?>