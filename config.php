<?php

    $dbHost = 'localhost';  
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-cadastro_clientes';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro na conexão";
    //
    //}
    //else
    //{
    //    echo "Conexão estabelecida com sucesso";
    //
    //}
?>