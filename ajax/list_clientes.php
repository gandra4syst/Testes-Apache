<?php

    include "gestor.php";
    $gestor = new Gestor();
    $clientes = $gestor-> EXE_QUERY("SELECT id_cliente, nome FROM clientes");
    echo json_encode($clientes, 128);