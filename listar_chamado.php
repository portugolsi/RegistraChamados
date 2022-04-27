<html>
  <head>
    <meta charset="utf-8" />
    <title>VerdanaTech</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        VD
      </a>
    </nav>

    <br>
    <br>
    <br>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header " style="display: flex; gap:800px;">
              Chamados
              <button type="button" onclick="window.location.href='abrir_chamado.php'" class="btn btn-Warning">Abrir Chamado</button>

            </div>
            
            <div class="card-body">
              <div class="row">
                <div class="col">
                
                
                

                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Solicitante</th>
                        <th scope="col">Status</th>
                        <th scope="col" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php     



try{
  $conexao =  new PDO('mysql:host=localhost;dbname=verdanatech','root','');
  $query = "select * from chamados";
  $stmt = $conexao->query($query);
  $lista_alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach($lista_alunos as $key => $value ){
    $status = $value['Status'];
    echo"<tr>";
    echo '<td>'.$value["Titulo"]."</td>";
    echo '<td>'.$value["Descricao"]."</td>";
    echo '<td>'.$value["Solicitante"]."</td>";
    echo '<td>'.$status."</td>";
echo '<td> <div style="display:flex gap:3px" > <a class="btn btn-secondary" href="ver_chamado.php?Id='.$value["Id"].'" role="button">Ver</a>         <a class="btn btn-success" href="editar_chamado.php?Id='.$value["Id"].'" role="button">Editar</a>        <a class="btn btn-danger" href="excluir_chamado.php?Id='.$value["Id"].'"  role="button">Excluir</a>        </td>';
    
  }

}
catch (PDOException $e) {
  echo 'erro';
}

?>
  
                        </tr>
                    </tbody>
                    </table>

                    <div style="display:flex gap:3px" > <a class="btn btn-secondary" href="index.php" role="button">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
  </body>
</html>


