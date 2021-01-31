<?php
    include_once 'conexao.php';

    $deletar = $_GET['deletar'];

    $sql = "DELETE FROM `dados_tb` WHERE id = :id";
    $id = $deletar;
    $result = $db->prepare($sql);
    $result->execute(array(":id"=>$id));

    if($result){
        header('Location: /Agenda_Anotacoes/php/tela_de_observacao.php');
    }
?>