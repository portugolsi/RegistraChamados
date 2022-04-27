<html>
  <head>
    <meta charset="utf-8" />
    <title>VerdanaTech - Excluir chamado</title>

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
              Deseja mesmo excluir esse chamado? Uma vez excluído, não tem como restaurar.
            </div>
            <?php $id=$_GET['Id']?>
            <div class="card-body">
              <?= "<form action='excluido.php?id=$id' method='post' style='display: flex; justify-content: center'> "?>
                <div class="form-group">
                <a class="btn btn-secondary" href='index.php' role="button">Voltar</a>
                <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>