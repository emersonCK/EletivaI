<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body class="container">
  <div class="modal" tabindex="-1" style="display: block;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Acessar</h5>
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="resposta.php" method="POST">
            <div class="row">
              <div class="col">
                <label for="email" class="label-control">Informe o email</label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="senha" class="label-control">Informe a senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          <button type="submit" class="btn btn-primary">Acessar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>