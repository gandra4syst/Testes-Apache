<?php

    include "gestor.php";
    $gestor = new Gestor();
    $parameters = array(':id_cliente' => $_POST['id_cliente']);
    $detalhe_cliente = $gestor-> EXE_QUERY("SELECT * FROM clientes WHERE id_cliente = :id_cliente, $parameters");
    echo json_encode($detalhe_cliente, 128);