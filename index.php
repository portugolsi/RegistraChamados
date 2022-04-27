<html>
  <head>
    <meta charset="utf-8" />
    <title>VerdanaTech</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Chamados
            </div>
            
            <div class="card-body">
              <form action="abrir_chamado.php" method='post'>
                <div class="form-group">
                <button class="btn btn-lg btn-info btn-block" type="submit">Abrir Chamado</button>
              </form>
              <br>
              <form action="listar_chamado.php" method='post'>
                <div class="form-group">
                <button class="btn btn-lg btn-info btn-block" type="submit">Listar Chamados</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>