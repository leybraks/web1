<?php
    include '../Class/Usuario.php';
    include '../PDO/Conexion.php';
    include '../PDO/UsuarioPDO.php';
    
    session_start();
    $USUcorrecto = "admin";
    $PASScorrecto = "admin";
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $usu = new Usuario();
    $usu->setUsuario($usuario);
    $usu->setClave($clave);

    if ($usu->getUsuario() == $USUcorrecto && $usu->getClave() == $PASScorrecto) {
        $_SESSION['login'] = "admin";
        header("location:Intranet.php");
        $usuario = 0;
        $clave = 0;
        exit();
    } elseif (empty($_POST['usuario']) || empty($_POST['clave'])) {
        header("location:vacio.php");
        exit();
    } else {
        header("Location:index.php");
        exit();
    }
?>