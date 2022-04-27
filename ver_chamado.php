<html>
  <head>
    <meta charset="utf-8" />
    <title>VerdanaTech - Ver Chamado</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
		<script src="js/bootstrap-datepicker.min.js"></script> 
		<script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>


    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  
    <nav class="navbar navbar-dark bg-dark" style = "display: flex;  flex-direction: row; justify-content:flex-start; align-items: center;" >
        <a class="navbar-brand" href="#">
           VD
        </a>
      
        
        <h3 style='color: white; padding-left: 420px'>Chamado <?= $_GET['Id']?></h3>  
   
    </nav>

    
    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Chamado 
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                
                <?php
                    try{

                        $id = $_GET['Id'];
                        $conexao =  new PDO('mysql:host=localhost;dbname=verdanatech','root','');
                        $query = "select * FROM chamados WHERE id='$id'";
                        $stmt = $conexao->query($query);
                        $chamados= $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                       
                      
                       echo "<form action='editar_chamado.php' method='post' class='form-horizontal'>";

                        echo '<div class="form-horizontal">';
                              echo '<label>Título</label>';

                              $Titulo = $chamados[0]['Titulo'];
                              $Descricao = $chamados[0]['Descricao'];
                              $status = $chamados[0]['Status'];
                              $data = $chamados[0]['Data'];
                              $solicitante =  $chamados[0]['Solicitante'];
                              
                              
                        echo "<input name='titulo' type='text' class='form-control'  value='$Titulo'  disabled='disabled'>";
                      }
                      catch (PDOException $e) {
                        echo 'erro';
                      };
               ?>
                     
                </div>
                <div class="form-horizontal">
                  <label>Descrição</label>
                  <?=  "<textarea id='textarea' name='descricao' disabled='disabled' class='form-control' rows='3'>$Descricao</textarea>"; ?>
                   
                </div>    
                <div class="form-horizontal" >
                  <label>Status</label>
                  <select name='status' class="form-control" style="height :40px;" disabled="disabled">
                    <?= "<option selected='selected'>$status</option>"?>
                    
                  </select>
                </div>    
                <div class="form-horizontal">
                  <label class="control-label">Data</label>
                  
                    <div class="input-group date">
                     <?= "<input name='data'  type='text' class='form-control' id='exemplo' disabled='disabled' value='$data' >"?>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                  </div>
                </div>
                <div class="form-horizontal">
                      <label>Solicitante</label>
                       <?= "<input name='$id' type='text' class='form-control' placeholder='$solicitante' >"?>
                </div>

                <div class="form-group" style="padding:20px;">

                  <button type="button" onclick="window.location.href='listar_chamado.php'" class="btn btn-Warning">Voltar</button>

                  <button type="submit" class="btn btn-primary">Editar</button>
        
              </div>
			        </form>

                  

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script type="text/javascript">
			$('#exemplo').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				
			});
		</script>

  </body>
</html>