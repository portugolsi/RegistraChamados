<?php
    try{
        $conexao =  new PDO('mysql:host=localhost;dbname=verdanatech','root','');
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $status = $_POST['status'];
        $timestamp = strtotime(str_replace('/', '-',$_POST['data']));

        
        $query = 'select COUNT(*) Id FROM chamados';
        $stmt = $conexao->query($query);
        $TotalRegistros = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $newformat = date('d-m-Y',$timestamp);
        $data = $newformat;
        $solicitante = $_POST['solicitante'];
        $query = 'INSERT INTO chamados (Titulo, Descricao, Status, Data, Solicitante) VALUES';
        $query .= "('$titulo','$descricao','$status','$data','$solicitante')"; 
        $stmt = $conexao->query($query);
        $lista_alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "Chamado cadastrado com Sucesso";
        
      
      
      }
      catch (PDOException $e) {
        echo 'erro';
      };

     


?>

<button type="button" onclick="window.location.href='index.php'" class="btn btn-Warning">Voltar</button>