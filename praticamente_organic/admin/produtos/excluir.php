<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {

    require_once('../../config/conexao.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM produtos WHERE id_prod = '$id'";
    $exec = $conn->query($sql);
}

header('location: ./index.php');
