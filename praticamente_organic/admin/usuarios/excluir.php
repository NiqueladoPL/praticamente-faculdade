<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {

    require_once('../../config/conexao.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id_usu = '$id'";
    $exec = $conn->query($sql);
}

header('location: ./index.php');
