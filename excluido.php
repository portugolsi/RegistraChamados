<?php

 $id = $_GET['id'];

try{
    $conexao =  new PDO('mysql:host=localhost;dbname=verdanatech','root','');
    $query = "DELETE FROM chamados where Id = '$id'";
    $stmt = $conexao->query($query);
    $ok = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo 'Excluído com Sucesso';
  }
  catch (PDOException $e) {
    echo 'erro';
  }
?>
<button type="button" onclick="window.location.href='index.php'" class="btn btn-Warning">Voltar</button>