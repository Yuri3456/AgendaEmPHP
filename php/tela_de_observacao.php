<?php 
  include_once 'consulta.php';

  $objeto = new conexao();
  $conexao = $objeto->Conectar();

  $consulta = "SELECT * FROM dados_tb";
  $resultado = $conexao->prepare($consulta);
  $resultado->execute();
  $chegada = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
<title>Tabela de deveres</title>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<body>

<div class="w3-container">
    <h1 style="text-align: center;">Tabela de análise de atividades</h1>
  <table class="w3-table w3-bordered">
    <tr>
      <th>ID</th>
      <th>Comentário</th>
      <th>Data a ser feito</th>
      <th>Opções</th>
    </tr>
    <tr>
      <?php
        foreach($chegada as $chegadas){
      ?>
      <tr>
      <th><?php echo $chegadas['id']?></th>
        <th><?php echo $chegadas['descricao']?></th>
        <th><?php echo $chegadas['data']?></th>

        <form action="delete.php" method="GET">
          <!-- <th><input value="deletar" name="deletar" type="submit"></th> -->
          <th><input type="hidden" value="deletar" /></th>
        </form>
      </tr>
    </tr>
    <?php
        }
    ?>
  </table>
</div>
<a style="text-decoration: none; font-weight: bold; margin: 15px;" href='/Agenda_Anotacoes/index.html'>VOLTAR</a>
</body>
</html>