

<?php
 
 $titulo = $_POST['titulo'];
 $descricao = $_POST['descricao'];
 $status = $_POST['status'];
 $data = $_POST['data'];
 $solicitante = $_POST['solicitante'];
 $id = $_GET['id'];

try{
    $conexao =  new PDO('mysql:host=localhost;dbname=verdanatech','root','');
    $query = "update chamados set Titulo ='$titulo', Descricao = '$descricao', Status = '$status', Data = '$data', Solicitante = '$solicitante' where Id = '$id'";
    $stmt = $conexao->query($query);
    $ok = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo 'Atualizado com Sucesso';
  }
  catch (PDOException $e) {
    echo 'erro';
  }
?>
<button type="button" onclick="window.location.href='index.php'" class="btn btn-Warning">Voltar</button>