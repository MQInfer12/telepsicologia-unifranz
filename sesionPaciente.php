<?php
session_start();

if(!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'paciente'){
    header('Location:home.php');
}
?>