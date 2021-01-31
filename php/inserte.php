<?php
    include 'conexao.php';

    $ent1 = $_GET['ent1'];
    $ent2 = $_GET['ent2'];

    //$sql = "INSERT INTO `descricao`(`discorrer`) VALUES (:descricao)";  
    $sql = "INSERT INTO `dados_tb`(`descricao`, `data`) VALUES (:ent1, :ent2)";
    $result = $db->prepare($sql);
    $exec = $result->execute(array(":ent1"=>$ent1, ":ent2"=>$ent2));

    if($exec){
        header('Location: /Agenda_Anotacoes/php/tela_de_observacao.php');
    }else{
        echo "<a href='/Agenda_Anotacoes/index.html'>VOLTAR</a>";
    }
?>