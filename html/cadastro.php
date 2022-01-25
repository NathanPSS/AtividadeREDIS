<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Back End Redis</title>
  </head>
  <body>
  <div class="container">
    <div class="row justify-content-end">
    <div class="col-1">
      <form method="POST" action="login.php">
    <button type="submit"class="btn btn-primary">Login</button>
</form>
  </div>

  </div>
  </div>
  <hr>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-6" id="formulario">
        <h1>Cadastro</h1>
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@hotmail.com">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
  </body>
</html>